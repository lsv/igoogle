<?php

// Local
$app['locale'] = 'en';
$app['session.default_locale'] = $app['locale'];
$app['translator.messages'] = array(
    'da' => __DIR__.'/../resources/locales/da.yml',
);

$app['debug'] = false;

// Cache
$app['cache.path'] = __DIR__ . '/../cache';

// Http cache
$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

// Twig cache
$app['twig.options.cache'] = $app['cache.path'] . '/twig';

// Assetic
$app['assetic.enabled']              = true;
$app['assetic.path_to_cache']        = $app['cache.path'] . '/assetic' ;
$app['assetic.path_to_web']          = __DIR__ . '/../../web/assets';
$app['assetic.input.path_to_assets'] = __DIR__ . '/../assets';

// CSS
$app['assetic.input.path_to_css']       = array(
	__DIR__ . '/../../vendor/twitter/bootstrap/less/bootstrap.less',
	__DIR__ . '/../../vendor/twitter/bootstrap/less/responsive.less',
	$app['assetic.input.path_to_assets'] . '/less/style.less'
);
$app['assetic.output.path_to_css']      = 'css/styles.css';

// JS
$app['assetic.input.path_to_js']        = array(
    $app['assetic.input.path_to_assets'] . '/js/app.js',
);
$app['assetic.output.path_to_js']       = 'js/scripts.js';

// Doctrine (db)
/*
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'silex_kitchen',
    'user'     => 'root',
    'password' => '',
);
*/

// User
/*
$app['security.users'] = array('username' => array('ROLE_USER', 'password'));
*/
