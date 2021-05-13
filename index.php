<?php
use Circles\ComparableCircle;
include "./vendor/autoload.php";

$circleOne = new ComparableCircle("CircleOne",8);
$circleTow = new ComparableCircle("CircleTow",2);
$circleThree = new ComparableCircle("CircleThree",4);

$test = $circleOne->compareTo($circleThree);
echo ("Comparable: <br>");
echo $test;
