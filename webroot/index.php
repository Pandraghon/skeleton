<?php

// INCLUDES
require(dirname(__DIR__) . '/config/bootstrap.php');

use Glaucus\MVC\Layout;
use Glaucus\Core\Configure;

$route = isset($_GET['route']) ? explode('/', $_GET['route']) : '';
$controller = empty($route) ? 'index' : $route[0];
if(!file_exists(CONTROLLER_DIR . $controller . '.php')) {
    include_once(TEMPLATE_DIR . 'error/404.php');
    die();
}

$lang = 'fr';
if(isset($_GET['lang']) && array_key_exists($_GET['lang'], Configure::read('App.lang'))) {
    $lang = $_GET['lang'];
    setcookie('GP_LANG', $lang, time() + DAY);
} else if(isset($_COOKIE['GP_LANG']) && array_key_exists($_COOKIE['GP_LANG'], Configure::read('App.lang'))) {
    $lang = $_COOKIE['GP_LANG'];
}

Configure::write('lang', $lang);
Configure::write('template', 'default');

$codelang = Configure::read('App.lang')[$lang]['code'];
putenv('LC_ALL=' . $codelang);
setlocale(LC_ALL, $codelang . '.utf8');
bindtextdomain('default', LOCALE);
textdomain('default');


include_once(CONTROLLER_DIR . $controller . '.php');
Layout::render('layouts/' . Configure::read('template') . '.twig');