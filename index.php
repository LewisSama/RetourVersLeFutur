<?php

require_once 'TimeTravel.php';

$test = new TimeTravel('now', '2010-10-02');
var_dump($test);

echo $test->getTravelInfo();