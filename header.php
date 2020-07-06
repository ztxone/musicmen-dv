<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
<?
	$APPLICATION->ShowHead();
	use Bitrix\Main\Page\Asset;
	Asset::getInstance()->addString("<link rel='shortcut icon' href='/favicon.ico' />");
	Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
	Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
	Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bulma.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bulma-carousel.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/helpers.css');
	CJSCore::Init(array("jquery"));
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bulma-carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
?>
	<title><?$APPLICATION->ShowTitle()?></title>


<!--     <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> -->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<main class="workarea">
	<nav class="columns navbar is-fixed-top is-fullheight header-navbar is-mobile is-marginless">
		<div class="column center right is-uppercase is-size-7">
			<a href="/rent/zvuk/" class="navbar-item has-text-weight-bold desktop">Звук</a>
			<a href="/rent/svet/" class="navbar-item has-text-weight-bold desktop">Свет</a>
			<a href="/rent/video/" class="navbar-item has-text-weight-bold desktop">Видео</a>
			<a href="/rent/stsena_konstruktiv/" class="navbar-item has-text-weight-bold desktop">Сцена (конструкции)</a>
		</div>
		<div class="column is-one-fifth center">
			<figure class="navbar-item image logo">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="musicmen-dv логотип"></a>
			</figure>
		</div>
		<div class="column center left is-uppercase is-size-7">
			<a href="/studio/" class="navbar-item has-text-weight-bold desktop">Студия</a>
			<a href="/repetition/online.php" class="navbar-item has-text-weight-bold desktop">Репточки</a>
			<a href="/groups/blueslime.php" class="navbar-item has-text-weight-bold desktop">Группа Blues Lime</a>
			<a href="/our_work/" class="navbar-item has-text-weight-bold desktop">Наши работы</a>
			<a role="button" class="navbar-burger has-text-weight-bold has-text-white" aria-label="menu" aria-expanded="false">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>
	</nav>
	