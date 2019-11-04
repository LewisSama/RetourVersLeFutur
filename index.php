<?php

require_once 'TimeTravel.php';

$test = new TimeTravel('1985-12-31', '2010-10-02');
var_dump($test);

echo '<br/>';

echo $test->getTravelInfo();

echo '<br/>';

$blop = new DateInterval('PT1000000000S');
echo $test->findDate($blop);

$interval = new DateInterval('PT5875200S');

$start = $test->start;
$end = $test->end;
$period = new DatePeriod($start, $interval, $end);

$test->backToFutureStepByStep($period);

