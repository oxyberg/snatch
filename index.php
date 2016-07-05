<?php

/*
	Snatch PHP router 1.0
	Matvey Pravosudov
	github.com/oxyberg/snatch
*/

require 'snatch.php';
$snatch = new Snatch;

$snatch->get('/', function () {
	echo 'Hello, Snatch!';
});

$snatch->run();
