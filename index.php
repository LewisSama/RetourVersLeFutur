<?php

require_once 'TimeTravel.php';


$start= new DateTimeImmutable('1985-12-31');
$end = new DateTime();
$test = new TimeTravel($start, $end);
var_dump($test);


$unMilliardSecond = new DateInterval('PT1000000000S');
$end2 = $test->findDate($unMilliardSecond);
var_dump($end2);

$test->setEnd($end2);



echo '<br/>';

echo $test->getTravelInfo();

echo '<br/>';


$interval = new DateInterval('PT5875200S');
$period = new DatePeriod($end2, $interval, $start);
var_dump($period);
$test->backToFutureStepByStep($period);

