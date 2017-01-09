<?php

if(!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);

define('ROOT', dirname(__DIR__));
define('APP_DIR', 'src');
define('APP', ROOT . DS . APP_DIR . DS);
define('CONFIG', ROOT . DS . 'config' . DS);
define('LOCALE', ROOT . DS . 'locale' . DS);
define('VENDOR', ROOT . DS . 'vendor' . DS);
define('TMP', ROOT . DS . 'tmp' . DS);
define('WWW_ROOT', ROOT . DS . 'webroot' . DS);
define('IMG_DIR', WWW_ROOT  . 'img' . DS);
define('CSS_DIR', WWW_ROOT . 'css' . DS);
define('CSS_PATH', DS . 'css' . DS);
define('JS_DIR', WWW_ROOT . 'js' . DS);
define('TEMPLATE_DIR', APP . 'templates' . DS);
define('CONTROLLER_DIR', APP . 'controllers' . DS);
define('VIEW_DIR', APP . 'views' . DS);
define('MODEL_DIR', APP . 'models' . DS);
define('PLUGIN_DIR', ROOT . DS . 'php' . DS . 'plugins' . DS);
define('CORE_PATH', ROOT . DS . 'vendor' . DS . 'glaucus-pocus' . DS . 'glaucus-pocus' . DS);
define('GLAUCUS', CORE_PATH . 'src' . DS);
