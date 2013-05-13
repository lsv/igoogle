<?php

use \Symfony\Component\HttpFoundation\Response;

/** @var $app Silex\Application */
$app->get('/', function() use ($app) {
	return $app['twig']->render('index.html.twig', array(
		'feeder' => $app['feeds'],
	));
});

$app->post('/feed', function(\Symfony\Component\HttpFoundation\Request $request) use ($app) {
	$url = urldecode($request->request->get('href'));
	$max = urldecode($request->request->get('items'));

	$data = array();
	$channel = \Zend\Feed\Reader\Reader::import($url);
	if (! $channel) {
		return new Response('Could not fetch ' . $url);
	}

	$methods = array(
		'getTitle' => 'title',
		'getDescription|getCategory' => 'description',
		'getLink' => 'link',
		'getPubDate' => 'pubdate'
	);

	$i = 0;
	foreach($channel as $item) {
		if ($max != '') {
			if (++$i > $max) {
				break;
			}
		}

		$d = array_fill_keys(array_values($methods), '');

		foreach($methods AS $k => $v) {
			if (strpos($k, '|') === false) {
				if (method_exists($item, $k)) {
					$d[$v] = $item->$k();
				}
			} else {
				$keys = explode('|', $k);
				foreach($keys AS $key) {
					if (method_exists($item, $key)) {
						$d[$v] = $item->$key();
						break;
					}
				}
			}
		}

		$data[] = $d;
	}

	return new Response(json_encode($data));
});
return $app;
