<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = $get_lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode(strtolower($_GET['lang'])) : 'ru';
$query_string = http_build_query($_GET);
include_once $ROOT . 'translation.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
<base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta name="description" content="фронтенд-разработчик Солнцев Павел">
	<meta name="keywords" content="Фронтенд-разработка, HTML-верстка, HTML, CSS, JavaScript, Vue">
	<meta content="<?= $title ?>">
	<meta name="theme-color" content="#2B2B2B">
	<meta name="msapplication-navbutton-color" content="#2B2B2B">
	<meta name="apple-mobile-web-app-status-bar-style" content="#2B2B2B">
	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:site_name" content="Frontend developer">
	<meta property="og:description" content="Фронтенд-разработка, HTML-верстка, HTML, CSS, JavaScript, Vue">
	<meta property="og:image" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="https://pavelsolnsev.ru/">
	<link rel="icon" type="image/svg" href="img/common/favicon.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="">
	<div class="wrapper">
		
		<header class="head">
	<div class="head__title loving-title _h1">FRONTEND DEVELOPER</div>
	<div class="head__langs">
		<a href="https://<?= $_SERVER['HTTP_HOST'] ?>" class="head__lang ru">РУ</a>
		<a href="https://<?= $_SERVER['HTTP_HOST'] ?>/?lang=en" class="head__lang en">EN</a>
	</div>
</header>
		<nav class="menu">
	<span data-target="about" class="menu__link">
		<?= $menu_link_1 ?>
	</span>
	<span data-target="skills" class="menu__link">
		<?= $menu_link_2 ?>
	</span>
	<span data-target="portfolio" class="menu__link">
		<?= $menu_link_3 ?>
	</span>
</nav>
		<main class="content">
			<section data-key="about" class="loving-section about">
	<h1 class="loving-title _h2"><span class="loving-title__inside">
			<?= $loving_title ?>
		</span></h1>
	<div class="about__main">
		<img class="about__photo" alt="" src="img/about/pavel.jpg" />
		<ul class="about__list">
			<li class="about__item _date">22<span class="about__slash">/</span>12<span class="about__slash">/</span>1990</li>
			<li class="about__item _city"><?= $about__item?></li>
			<li class="about__item _phone"><a href="tel:+79166986185" class="about__phone">+7 (916) 698-61-85</a></li>
			<li class="about__item _mail"><a href="mailto:pavelsolnsev@gmail.com" class="about__phone">pavelsolnsev@gmail.com</a></li>
			<li class="about__item _socials">
				<a href="https://t.me/pavelsolnsev" target="_blank" class="about__link _tg">Telegram</a>
				<a href="https://vk.com/id7895483" target="_blank" class="about__link _vk">VKontakte</a>
			</li>
		</ul>
	</div>
	<div class="about__education education">
		<h3 class="education__title loving-title _h3"><?=$education__title?></h3>
		<dl class="education__dl">
			<dt class="education__dt"><?= $education__dt_1 ?></dt>
			<dd class="education__dd"><a data-fancybox href="#diplom"><?= $education__dd_1 ?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt">wayup.in</dt>
			<dd class="education__dd"><a target="_blank" href="http://lab.pavelsolnsev.ru/wayup/Pavel_Solntsev_Alexandrovich.pdf"><?= $education__dd_2?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt">loftschool.com</dt>
			<dd class="education__dd"><a target="_blank" href="https://loftschool.com/diploma/BE38167122518/ru/pdf"><?= $education__dd_3?></a></dd>
		</dl>
		<dl class="education__dl">
			<dt class="education__dt"><?= $education__dt_2?></dt>
			<dd class="education__dd"><?= $education__dd_4 ?></dd>
		</dl>
	</div>
</section>
			
<section data-key="skills" class="loving-section skills">
	<h2 class="skills__title loving-title _h2"><span class="loving-title__inside"><?= $skills__title?></span></h2>
	
	<div class="skills__item _HTML"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">HTML</h3>
			<div class="skills__line">
				<span style="width:100%; background: #E44D26;"></span>
				<div class="skills__value">100%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">HTML 5</div>
			<div class="skills__tag">Adaptive</div>
			<div class="skills__tag">Crossbrum</div>
			<div class="skills__tag">Semantics</div>
			<div class="skills__tag">BEM</div>
			<div class="skills__tag">E-mail</div>
			<div class="skills__tag">Nunjucks</div>
			<div class="skills__tag">Jade/pug</div>
			<div class="skills__tag">Twig</div>
			<div class="skills__tag">Optimization</div>
			<div class="skills__tag">SEO</div>
			<div class="skills__tag">Emmet</div>
		
		</div>
		<div class="skills__text"><?= $skills__text_1?></div>
	</div>
	
	<div class="skills__item _CSS"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">CSS</h3>
			<div class="skills__line">
				<span style="width:100%; background: #379AD6;"></span>
				<div class="skills__value">100%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">CSS</div>
			<div class="skills__tag">CSS 3</div>
			<div class="skills__tag">LESS</div>
			<div class="skills__tag">SCSS/SASS</div>
			<div class="skills__tag">Mobile First</div>
			<div class="skills__tag">Animation</div>
			<div class="skills__tag">Flexible</div>
			<div class="skills__tag">Grids</div>
			<div class="skills__tag">Masks</div>
			<div class="skills__tag">Pixel Perfect</div>
			<div class="skills__tag">SVG</div>
			<div class="skills__tag">Rem</div>
			<div class="skills__tag">Emmet</div>
		
		</div>
		<div class="skills__text"><?= $skills__text_2?></div>
	</div>
	
	<div class="skills__item _JavaScripts"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">JavaScripts</h3>
			<div class="skills__line">
				<span style="width:60%; background: #F7E01D;"></span>
				<div class="skills__value">60%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">JavaScript</div>
			<div class="skills__tag">jQuery</div>
			<div class="skills__tag">Ajax</div>
			<div class="skills__tag">Closures</div>
			<div class="skills__tag">This</div>
			<div class="skills__tag">Cycle</div>
			<div class="skills__tag">Functions</div>
			<div class="skills__tag">Objects</div>
			<div class="skills__tag">Promise</div>
			<div class="skills__tag">Plugins</div>
			<div class="skills__tag">Animation</div>
			<div class="skills__tag">Events</div>
			<div class="skills__tag">DOM</div>
			<div class="skills__tag">Regular expressions</div>
			<div class="skills__tag">Cookies</div>
			<div class="skills__tag">API</div>
			<div class="skills__tag">Webpack</div>
			<div class="skills__tag">Gulp</div>
		
		</div>
		<div class="skills__text"><?= $skills__text_3?></div>
	</div>
	
	<div class="skills__item _Vue"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">Vue</h3>
			<div class="skills__line">
				<span style="width:40%; background: #3FB984;"></span>
				<div class="skills__value">40%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">Vue.js</div>
			<div class="skills__tag">Components</div>
			<div class="skills__tag">Form</div>
			<div class="skills__tag">HTTP</div>
			<div class="skills__tag">Virtual DOM</div>
			<div class="skills__tag">Reactive data binding</div>
			<div class="skills__tag">Mixins</div>
			<div class="skills__tag">Directives</div>
			<div class="skills__tag">Plagins</div>
			<div class="skills__tag">Composition API</div>
			<div class="skills__tag">TypeScript</div>
			<div class="skills__tag">Vue CLI</div>
			<div class="skills__tag">Vue Router</div>
			<div class="skills__tag">Vuex</div>
		
		</div>
		<div class="skills__text"><?= $skills__text_4?></div>
	</div>
	
	<div class="skills__item _Graphics"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">Graphics</h3>
			<div class="skills__line">
				<span style="width:70%; background: #E91E63;"></span>
				<div class="skills__value">70%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">Adobe Photoshop</div>
			<div class="skills__tag">Sketch/Zeplin</div>
			<div class="skills__tag">Figma</div>
			<div class="skills__tag">UI/UX</div>
			<div class="skills__tag">SVG</div>
			<div class="skills__tag">Components</div>
			<div class="skills__tag">Vector graphics</div>
			<div class="skills__tag">GIF</div>
			<div class="skills__tag">PNGA</div>
		
		</div>
		<div class="skills__text"><?= $skills__text_5?></div>
	</div>
	
	<div class="skills__item _Other"> 
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3">Other</h3>
			<div class="skills__line">
				<span style="width:50%; background: #787CB4;"></span>
				<div class="skills__value">50%</div>
			</div>
		</div>
		<div class="skills__tags">
			
			<div class="skills__tag">GIT</div>
			<div class="skills__tag">PHP</div>
			<div class="skills__tag">MySQL</div>
			<div class="skills__tag">WordPress</div>
			<div class="skills__tag">Modx</div>
			<div class="skills__tag">Bitrix24</div>

		
		</div>
		<div class="skills__text"><?= $skills__text_6?></div>
	</div>
	
	<div class="skills__item _irl">
		<div class="skills__graph">
			<h3 class="skills__name loving-title _h3"><?= $skills__name?></h3>
		</div>
		<div class="skills__text">
			<ul class="skills__ul">
				<li class="skills__li"><?= $skills__li_1?></li>
				<li class="skills__li"><?= $skills__li_2?></li>
				<li class="skills__li"><?= $skills__li_3?></li>
				<li class="skills__li"><?= $skills__li_4?></li>
				<li class="skills__li"><?= $skills__li_5?></li>
				<li class="skills__li"><?= $skills__li_6?></li>
				<li class="skills__li"><?= $skills__li_7?></li>
				<li class="skills__li"><?= $skills__li_8?></li>
				<li class="skills__li"><?= $skills__li_9?></li>
				<li class="skills__li"><?= $skills__li_10?></li>
				<li class="skills__li"><?= $skills__li_11?></li>
				<li class="skills__li"><?= $skills__li_12?></li>
				<li class="skills__li"><?= $skills__li_13?></li>
				<li class="skills__li"><?= $skills__li_14?></li>
			</ul>
		</div>
	</div>
</section>


			
<section data-key="portfolio" class="loving-section portfolio">
	<h2 class="portfolio__title loving-title _h2"><span class="loving-title__inside"><?= $title_inside ?></span></h2>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_5 ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/edunet.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/edunet.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">edunet</div>
					<div class="portfolio__links">
						<a href="https://vuz.edunetwork.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">vuz.edunetwork.ru</a>
						<a href="https://github.com/pavelsolnsev/edunet" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: edunet</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">VUE</div>
							<div class="portfolio__tag">NUXT3</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/college.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/college.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">college</div>
					<div class="portfolio__links">
						<a href="https://ruscollege.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">ruscollege.ru</a>
						<a href="https://github.com/pavelsolnsev/college" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: college</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">VUE</div>
							<div class="portfolio__tag">NUXT3</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/mti.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/mti.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">mti</div>
					<div class="portfolio__links">
						<a href="https://mti.moscow/" target="_blank" rel="noindex, nofollow" class="portfolio__link">mti.moscow</a>
						<a href="https://github.com/pavelsolnsev/mti" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: mti</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergy.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergy.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergy</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/synergy/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/synergy</a>
						<a href="https://github.com/pavelsolnsev/synergy" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergy</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_1 ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergyevent.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergyevent.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergyevent</div>
					<div class="portfolio__links">
						<a href="https://synergyevent.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergyevent.ru</a>
						<a href="https://github.com/pavelsolnsev/synergyevent" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergyevent</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							<div class="portfolio__tag">Animation</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/brain2020.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/brain2020.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">brain2020</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/brain2020/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/brain2020</a>
						<a href="https://github.com/pavelsolnsev/brain2020" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: brain2020</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							<div class="portfolio__tag">Animation</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/businessmobilization2020.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/businessmobilization2020.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">businessmobilization2020</div>
					<div class="portfolio__links">
						<a href="https://synergyglobal.ru/forums/businessmobilization/2020/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergyglobal.ru/forums/businessmobilization/2020</a>
						<a href="https://github.com/pavelsolnsev/businessmobilization2020" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: businessmobilization2020</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							<div class="portfolio__tag">Animation</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/beauty-forum.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/beauty-forum.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">beauty-forum</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/beauty-forum/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/beauty-forum</a>
						<a href="https://github.com/pavelsolnsev/beauty-forum" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: beauty-forum</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/mironova-videoschool.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/mironova-videoschool.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">mironova-videoschool</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/mironova/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/mironova</a>
						<a href="https://github.com/pavelsolnsev/mironova-videoschool" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: mironova-videoschool</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							<div class="portfolio__tag">Animation</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergyacademyv2.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergyacademyv2.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergyacademyv2</div>
					<div class="portfolio__links">
						<a href="https://synergyacademy.com/lp/v2/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergyacademy.com/lp/v2</a>
						<a href="https://github.com/pavelsolnsev/synergyacademyv2" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergyacademyv2</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/noform.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/noform.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">noform</div>
					<div class="portfolio__links">
						<a href="https://synergycybersport.com/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergycybersport.com</a>
						<a href="https://github.com/pavelsolnsev/noform" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: noform</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergy.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergy.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergy</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/synergy/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/synergy</a>
						<a href="https://github.com/pavelsolnsev/synergy" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergy</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/legalforum.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/legalforum.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">legalforum</div>
					<div class="portfolio__links">
						<a href="https://synergyglobal.ru/legalforum/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergyglobal.ru/legalforum</a>
						<a href="https://github.com/pavelsolnsev/legalforum" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: legalforum</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/mask.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/mask.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">mask</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/mask//" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/mask/</a>
						<a href="https://github.com/pavelsolnsev/mask" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: mask</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/dubai.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/dubai.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">dubai</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/dubai/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/dubai</a>
						<a href="https://github.com/pavelsolnsev/dubai" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: dubai</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergyintellect.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergyintellect.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergyintellect</div>
					<div class="portfolio__links">
						<a href="https://synergyintellect.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergyintellect.ru</a>
						<a href="https://github.com/pavelsolnsev/synergyintellect" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergyintellect</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/beautystart.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/beautystart.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">beautystart</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/beautystart//" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/beautystart/</a>
						<a href="https://github.com/pavelsolnsev/beautystart" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: beautystart</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergymed_sp.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergymed_sp.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergymed_sp</div>
					<div class="portfolio__links">
						<a href="https://synergymed.ru/lp/spa/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergymed.ru/lp/spa</a>
						<a href="https://github.com/pavelsolnsev/synergymed_sp" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergymed_sp</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/youngMoms.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/youngMoms.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">youngMoms</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/youngMoms/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/youngMoms</a>
						<a href="https://github.com/pavelsolnsev/youngMoms" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: youngMoms</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/bezege.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/bezege.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">bezege</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/bezege/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/bezege</a>
						<a href="https://github.com/pavelsolnsev/bezege" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: bezege</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/brand.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/brand.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">brand</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/brand/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/brand</a>
						<a href="https://github.com/pavelsolnsev/brand" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: brand</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							<div class="portfolio__tag">Animation</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/privetmma.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/privetmma.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">privetmma</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/privetmma/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/privetmma</a>
						<a href="https://github.com/pavelsolnsev/privetmma" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: privetmma</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_bot ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/ramafotball.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/ramafotball.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">ramafotball</div>
					<div class="portfolio__links">
						<a href="https://t.me/ramafotball/" target="_blank" rel="noindex, nofollow" class="portfolio__link">t.me/ramafotball</a>
						<a href="https://github.com/pavelsolnsev/ramafotball" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: ramafotball</a>
						
							<a href="https://football.pavelsolntsev.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>football.pavelsolntsev.ru</a>
						

						
							<a href="https://vk.com/ramafootball/" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>vk.com/ramafootball</a>
						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">Node.js</div>
							<div class="portfolio__tag">MySQL</div>
							<div class="portfolio__tag">Telegraf (Telegram Bot API)</div>
							<div class="portfolio__tag">JS</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_2 ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/synergykniga.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/synergykniga.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">synergykniga</div>
					<div class="portfolio__links">
						<a href="https://synergykniga.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">synergykniga.ru</a>
						<a href="https://github.com/pavelsolnsev/synergykniga" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: synergykniga</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/edunet.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/edunet.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">edunet</div>
					<div class="portfolio__links">
						<a href="https://vuz.edunetwork.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">vuz.edunetwork.ru</a>
						<a href="https://github.com/pavelsolnsev/edunet" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: edunet</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/mti.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/mti.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">mti</div>
					<div class="portfolio__links">
						<a href="https://mti.moscow/" target="_blank" rel="noindex, nofollow" class="portfolio__link">mti.moscow</a>
						<a href="https://github.com/pavelsolnsev/mti" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: mti</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/college.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/college.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">college</div>
					<div class="portfolio__links">
						<a href="https://ruscollege.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">ruscollege.ru</a>
						<a href="https://github.com/pavelsolnsev/college" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: college</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">VUE</div>
							<div class="portfolio__tag">NUXT3</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_3 ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/milk.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/milk.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">milk</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/milkFactory/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/milkFactory</a>
						<a href="https://github.com/pavelsolnsev/milk" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: milk</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/burger.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/burger.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">burger</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/burger/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/burger</a>
						<a href="https://github.com/pavelsolnsev/burger" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: burger</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/suchen.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/suchen.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">suchen</div>
					<div class="portfolio__links">
						<a href="https://lab.pavelsolntsev.ru/suchen/" target="_blank" rel="noindex, nofollow" class="portfolio__link">lab.pavelsolntsev.ru/suchen</a>
						<a href="https://github.com/pavelsolnsev/suchen" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: suchen</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">HTML</div>
							<div class="portfolio__tag">CSS (SCSS)</div>
							<div class="portfolio__tag">JS</div>
							<div class="portfolio__tag">PHP</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="portfolio__box">
		<h3 class="portfolio__name loving-title _h3"><?= $portfolio__name_4 ?></h3>
		<div class="portfolio__list">
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/dveri-tut.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/dveri-tut.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">dveri-tut</div>
					<div class="portfolio__links">
						<a href="https://www.dveri-tut.com/" target="_blank" rel="noindex, nofollow" class="portfolio__link">www.dveri-tut.com</a>
						<a href="https://github.com/pavelsolnsev/dveri-tut" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: dveri-tut</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">Optimization</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/zamkitut.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/zamkitut.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">zamkitut</div>
					<div class="portfolio__links">
						<a href="https://zamkitut.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">zamkitut.ru</a>
						<a href="https://github.com/pavelsolnsev/zamkitut" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: zamkitut</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">Optimization</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="portfolio__item">
				<div class="portfolio__preview">
					<img src="img/portfolio/ivan-pole.png" alt="" class="portfolio__image _m">
					<img src="img/portfolio/ivan-pole.png" alt="" class="portfolio__image _d">
				</div>
				<div class="portfolio__info">
					<div class="portfolio__name">ivan-pole</div>
					<div class="portfolio__links">
						<a href="https://ivan-pole.ru/" target="_blank" rel="noindex, nofollow" class="portfolio__link">ivan-pole.ru</a>
						<a href="https://github.com/pavelsolnsev/ivan-pole" target="_blank" rel="noindex, nofollow" class="portfolio__link"><br>Code: ivan-pole</a>
						

						
					</div>
					<div class="portfolio__tags">
						<div class="portfolio__tags">
							
							<div class="portfolio__tag">Optimization</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
</section>


		</main>
		<footer class="foot">
	<div class="foot__item">&copy; by BV</div>
	<div class="foot__item">
		<div class="foot__heart">&#10084;</div> since 2017
	</div>
</footer>
		
	</div>

	<div hidden>
		
		<div class="popups" id="diplom">
	<img src="/img/popups/diplom.jpg" alt="">
</div>
		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>