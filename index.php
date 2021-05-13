<?php

use Circles\Circle;
use Circles\CircleComparator;
use Circles\ComparableCircle;
include "./vendor/autoload.php";

$circleOne = new ComparableCircle("CircleOne",8);
$circleTow = new ComparableCircle("CircleTow",2);
$circleThree = new ComparableCircle("CircleThree",4);

$test = $circleOne->compareTo($circleThree);
echo ("Comparable: <br>");
echo $test;


$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
 echo $circleComparator->compare($circleOne, $circleTwo);