<?php

require_once 'TimeTravel.php';

$test = new TimeTravel('2001-01-01', '2010-10-02');
var_dump($test);

echo '<br/>';

echo $test->getTravelInfo();

echo '<br/>';

$interval = new DateInterval('PT1000000000S');
echo $test->findDate($interval);

$start = $test->start;
$end = $test->end;
$period = new DatePeriod($start, $interval, $end);

$test->backToFutureStepByStep($period);

