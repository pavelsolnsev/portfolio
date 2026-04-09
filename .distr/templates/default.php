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
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>