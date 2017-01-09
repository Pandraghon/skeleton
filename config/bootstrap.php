<?php

if (version_compare(PHP_VERSION, "7.0.12") < 0) {
    trigger_error('Your PHP version must be equal or higher than 7.0.12.', E_USER_ERROR);
}

if (!extension_loaded('mbstring')) {
    trigger_error('You must enable the mbstring extension.', E_USER_ERROR);
}

require(__DIR__ . '/paths.php');
require(CORE_PATH . 'config' . DS . 'bootstrap.php');
require(dirname(__DIR__) . '/vendor/autoload.php');

use Glaucus\Core\Configure;

try {
    Configure::loadConfig();
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

if (Configure::read('debug')) {
    Configure::write('Cache.duration', '+2 minutes');
}

//date_default_timezone_set('Europe/Paris');
date_default_timezone_set('UTC');
mb_internal_encoding(Configure::read('App.encoding'));
ini_set('intl.default_locale', array_values(Configure::read('App.lang'))[0]);