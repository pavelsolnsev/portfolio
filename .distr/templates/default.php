<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';

/* Старые ссылки ?lang= — сохраняем в cookie и убираем параметр из адреса */
if (isset($_GET['lang'])) {
	$redirectLang = strtolower(trim((string) $_GET['lang'])) === 'en' ? 'en' : 'ru';
	$secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
	setcookie('site_lang', $redirectLang, time() + 365 * 24 * 60 * 60, '/', '', $secure, false);
	$path = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
	if ($path === false || $path === '') {
		$path = '/';
	}
	header('Location: ' . ($secure ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . $path, true, 302);
	exit;
}

$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = (isset($_COOKIE['site_lang']) && $_COOKIE['site_lang'] === 'en') ? 'en' : 'ru';
$qs = $_GET;
unset($qs['lang']);
$query_string = http_build_query($qs);
include_once $ROOT . 'translation.php';

$og_origin = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'pavelsolntsev.ru');
$og_image = $og_origin . '/img/about/pavel.jpg';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
<base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>

	<meta name="description" content="<?= htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8') ?>">
	<meta name="keywords" content="Фронтенд-разработка, HTML-верстка, HTML, CSS, JavaScript, Vue">
	<meta name="theme-color" content="#2B2B2B">
	<meta name="msapplication-navbutton-color" content="#2B2B2B">
	<meta name="apple-mobile-web-app-status-bar-style" content="#2B2B2B">
	<meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
	<meta property="og:site_name" content="Frontend developer">
	<meta property="og:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES, 'UTF-8') ?>">
	<meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8') ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?= htmlspecialchars($og_origin . '/', ENT_QUOTES, 'UTF-8') ?>">
	<link rel="icon" type="image/svg" href="img/common/favicon.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="">
	<div class="wrapper">
		{% block blocks %}
		{% include 'header/block.php' %}
		{% include 'nav/block.php' %}
		<main class="content">
			{% include 'about/block.php' %}
			{% include 'skills/block.php' %}
			{% include 'portfolio/block.php' %}
		</main>
		{% include 'footer/block.php' %}
		{% endblock %}
	</div>

	<div hidden>
		{% block popups %}
		{% include 'popups/block.php' %}
		{% endblock %}
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
	<script src="js/script.js" defer></script>
</body>

</html>