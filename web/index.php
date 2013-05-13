<?php
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../resources/config/feeds.php';
$app = new Silex\Application(array(
	'feeds' => $feeds
));

/*
$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) { return ''; }

    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message, $code);
});
*/

require __DIR__.'/../resources/config/prod.php';
require __DIR__.'/../src/app.php';

require __DIR__.'/../src/controllers.php';

$app->run();