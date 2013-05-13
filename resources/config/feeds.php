<?php
$feeds['maxitems'] = 5;
$feeds['maxage'] = '-2d';

$feeds['col']['Home'][] = array(
	array(
		'name' => 'TV2 nyheder',
		'feed' => 'http://rss.tv2.dk/rss/show/site/nyhederne.tv2.dk/feed/TV+2+Nyhederne/index.xml',
	),
	array(
		'name' => 'TV2 sporten',
		'feed' => 'http://sporten.tv2.dk/rss.xml',
	),
	array(
		'name' => 'A list apart',
		'feed' => 'http://alistapart.com/site/rss',
		'maxitems' => 2,
		'maxage' => ''
	),
	array(
		'name' => 'Wikihow',
		'feed' => 'http://www.wikihow.com/feed.rss',
		'maxitems' => 1
	)
);
$feeds['col']['Home'][] = array(
	array(
		'name' => 'newz.dk',
		'feed' => 'http://newz.dk/rss/news/nopicture'
	),
	array(
		'name' => 'PCWorld',
		'feed' => 'http://www.pcworld.dk/rss/all'
	),
	array(
		'name' => 'Engadget',
		'feed' => 'http://www.engadget.com/rss-hd.xml',
		'maxitems' => 3
	),
);
$feeds['col']['Home'][] = array(
	array(
		'name' => 'Railgun',
		'feed' => 'http://railgun.newz.dk/rss/news/nopicture'
	),
	array(
		'name' => 'Comon',
		'feed' => 'http://www.comon.dk/rss/all'
	),
	array(
		'name' => 'Filmz',
		'feed' => 'http://filmz.dk/rss/'
	)
);
$feeds['col']['Home'][] = array(
	array(
		'name' => 'Macnation',
		'feed' => 'http://macnation.newz.dk/rss/news/nopicture',
	),
	array(
		'name' => 'Vejret',
		'feed' => 'http://www.rssweather.com/icao/EKCH/rss.php',
		'maxitems' => ''
	)
);
$feeds['col']['Work'][] = array(
	array(
		'name' => 'Macnation',
		'feed' => 'http://macnation.newz.dk/rss/news/nopicture',
	),
	array(
		'name' => 'Vejret',
		'feed' => 'http://www.rssweather.com/icao/EKCH/rss.php',
		'maxitems' => ''
	)
);