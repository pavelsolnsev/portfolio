'use strict';

const { src, dest, parallel, series, watch } = require('gulp');
const gulpSass = require('gulp-sass');
const sassCompiler = gulpSass(require('sass'));
const browserSync = require('browser-sync').create();
const connectPhp = require('gulp-connect-php');
const babel = require('gulp-babel');
const plumber = require('gulp-plumber');
const gulpif = require('gulp-if');
const include = require('gulp-include');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const rev = require('gulp-rev');
const revReplace = require('gulp-rev-replace');
const nunjucksRender = require('gulp-nunjucks-render');
const rename = require('gulp-rename');
const webp = require('gulp-webp');
const debug = require('gulp-debug');
const htmlmin = require('gulp-htmlmin');
const combine = require('stream-combiner2').obj;
const del = require('del');
const os = require('os');
const fs = require('fs');

/* Переменные окружения */
const isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV !== 'production';

/* Конфиг: в разработке сборка в .dev/public (не трогает public/ для деплоя). Прод: NODE_ENV=production → public/ */
var CONFIG = {
	output: isDevelopment ? '.dev/public' : 'public',
	input: '.distr/',
	pages: '.distr/pages',
	templates: '.distr/templates',
	blocks: '.distr/blocks',
	proxyPortPhp: 8001,
	proxyPortBs: 8910,
	useAutoprefixer: true,
	reload: true,
	phpPath: ''
};

function loadConfig() {
	if (fs.existsSync(__dirname + '/./gulpconfig.json')) {
		const user_config = require('./gulpconfig.json');
		CONFIG = Object.assign({}, CONFIG, user_config);
		return CONFIG;
	}
}
loadConfig();

function connectPhpSrv(done) {
	console.log('* Запуск gulp-connect-php *');

	const serverConfig = {
		base: CONFIG.output,
		port: CONFIG.proxyPortPhp
	};

	if (os.type() === 'Windows_NT') {
		serverConfig.bin = CONFIG.phpPath + 'php.exe';
		serverConfig.ini = CONFIG.phpPath + 'php.ini';
	}

	connectPhp.server(serverConfig, done);
}

function browserSyncInit(done) {
	console.log('* Запуск browserSync *');

	browserSync.init({
		proxy: '127.0.0.1:' + CONFIG.proxyPortPhp,
		open: false,
		reloadOnRestart: true,
		injectChanges: true,
		port: CONFIG.proxyPortBs
	});
	done();
}

function clean() {
	console.log('* Удаление предыдущей сборки *');

	return del(['**', '../manifest', '!' + CONFIG.input + '**'], { force: true, cwd: CONFIG.output });
}

function images() {
	console.log('* Копирование картинок *');

	return src(['**/img/**/*.*', '!{~**/**,**/~**}/img/**/*.*', '!**/img/**/{~*.*,*.ps}'], { cwd: CONFIG.blocks, dot: true })
		.pipe(rename(function (path) {
			let slash = '/';
			if (os.type() === 'Windows_NT') slash = '\\';
			path.dirname = path.dirname.replace(slash + 'img', '');
		}))
		.pipe(dest(CONFIG.output + '/img/'));
}

function webpTask() {
	console.log('* Конвертация в webp *');

	return src('**/**', { cwd: CONFIG.output + '/img/' })
		.pipe(webp())
		.pipe(dest(CONFIG.output + '/img/'));
}

function scripts() {
	console.log('* Копирование скриптов *');

	return src(['**/*.js', '!{~**/**,**/~**}/*.js', '!**/~*.js'], { cwd: CONFIG.pages, dot: true })
		.pipe(plumber())
		.pipe(include({
			includePaths: [CONFIG.blocks]
		}))
		.pipe(babel({
			presets: ['@babel/preset-env']
		}))
		.pipe(gulpif(!isDevelopment, rev()))
		.pipe(dest(CONFIG.output))
		.pipe(gulpif(!isDevelopment, combine(rev.manifest('js.json'), dest('manifest'), debug({ title: 'manifest -> js.json' }))));
}

function styles() {
	console.log('* Копирование стилей *');

	return src(['**/*.scss', '**/**/*.scss', '!{~**/**,**/~**}/*.scss', '!**/~*.scss'], { cwd: CONFIG.pages, dot: true })
		.pipe(gulpif(isDevelopment, sourcemaps.init()))
		.pipe(plumber())
		.pipe(sassCompiler({
			includePaths: [CONFIG.blocks],
			indentType: 'tab',
			indentWidth: 1,
			outputStyle: isDevelopment ? 'expanded' : 'compressed',
			/* До миграции на @use и modern API (gulp-sass) — не засоряем лог */
			silenceDeprecations: ['import', 'legacy-js-api']
		}).on('error', sassCompiler.logError))
		.pipe(gulpif(CONFIG.useAutoprefixer, autoprefixer({
			overrideBrowserslist: ['last 2 versions']
		})))
		.pipe(gulpif(isDevelopment, sourcemaps.write()))
		.pipe(gulpif(!isDevelopment, rev()))
		.pipe(dest(CONFIG.output))
		.pipe(gulpif(!isDevelopment, combine(rev.manifest('css.json'), dest('manifest'), debug({ title: 'manifest -> css.json' }))));
}

function nunjucks() {
	console.log('* Рендеринг шаблонов (Nunjucks) *');

	return src(['**/*.{php,njk}', '!{~**/**,**/~**}/*.{php,njk}', '!**/~*.{php,njk}'], { cwd: CONFIG.pages, dot: true })
		.pipe(plumber())
		.pipe(nunjucksRender({
			path: [CONFIG.templates, CONFIG.blocks],
			inheritExtension: true,
			throwOnUndefined: true
		}))
		.pipe(dest(CONFIG.output));
}

function minify() {
	console.log('* Минификация *');

	return src(['**/index.php', '!{~**/**,**/~**}/*.php', '!**/~*.php'], { cwd: CONFIG.output })
		.pipe(htmlmin({
			collapseWhitespace: true,
			preserveLineBreaks: true,
			removeComments: true,
			minifyCSS: true,
			removeScriptTypeAttributes: true,
			removeStyleLinkTypeAttributes: true
		}))
		.pipe(dest(CONFIG.output));
}

function pages() {
	console.log('* Копирование остальных файлов *');

	return src(['**/**', '!**/*.{php,scss,js}', '!{~**/**,**/~**}', '!**/~*.*'], { cwd: CONFIG.pages, dot: true })
		.pipe(dest(CONFIG.output));
}

function revreplace() {
	if (isDevelopment) {
		return Promise.resolve();
	}

	console.log('* Замена имён файлов *');

	const manifestCss = src('manifest/css.json', { allowEmpty: true });
	const manifestImages = src('manifest/images.json', { allowEmpty: true });
	const manifestJs = src('manifest/js.json', { allowEmpty: true });

	return src(['**/*.php', '**/*.css'], { cwd: CONFIG.output })
		.pipe(revReplace({
			replaceInExtensions: ['.php', '.css'],
			manifest: manifestCss
		}))
		.pipe(revReplace({
			replaceInExtensions: ['.php', '.css'],
			manifest: manifestImages
		}))
		.pipe(revReplace({
			replaceInExtensions: ['.php'],
			manifest: manifestJs
		}))
		.pipe(debug({ title: 'revReplace + manifest' }))
		.pipe(dest(CONFIG.output));
}

function watchFiles(done) {
	watch('**/img/*.{jpg,png,gif,svg}', { cwd: CONFIG.blocks }, series(images));

	watch('**/*.scss', { cwd: CONFIG.input }, styles);

	watch('**/*.js', { cwd: CONFIG.input }, scripts);

	watch('**/*.{php,njk}', { cwd: CONFIG.input }, series(nunjucks, revreplace));

	watch('**/*.*', { cwd: CONFIG.pages }, pages);

	if (CONFIG.reload) {
		watch('**/*.*', { cwd: CONFIG.input }).on('change', browserSync.reload);
	}

	done();
}

const buildDevelopment = series(
	images,
	parallel(styles, scripts),
	nunjucks,
	pages
);

const buildProduction = series(
	clean,
	images,
	parallel(styles, scripts),
	nunjucks,
	pages,
	revreplace,
	minify
);

exports.build = isDevelopment ? buildDevelopment : buildProduction;

exports.webp = series(images, webpTask);

const serveAndWatch = series(connectPhpSrv, browserSyncInit, watchFiles);

exports.default = series(exports.build, serveAndWatch);

exports.nosync = series(exports.build, watchFiles);

exports.noreload = function noreload(done) {
	CONFIG.reload = false;
	series(exports.build, serveAndWatch)(done);
};
