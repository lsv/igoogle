<?php
require 'vendor/autoload.php';

$dumper = new \Symfony\Component\Yaml\Parser();
$yaml = $dumper->parse(file_get_contents('resources/config/feeds.yml'));

var_dump($yaml);