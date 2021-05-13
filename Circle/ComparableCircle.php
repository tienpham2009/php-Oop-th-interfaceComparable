<?php


namespace Circles;
use Comparable\Comparable;
include "../vendor/autoload.php";


class ComparableCircle extends Circle implements Comparable
{
    public function compareTo($objTow): int
    {
        $circleTwoRadius = $objTow->getRadius();

        if ($this->getRadius() > $circleTwoRadius){
            return 1;
        } elseif ($this->getRadius() < $circleTwoRadius){
            return -1;
        }else{
            return 0;
        }
    }

}