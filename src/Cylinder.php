<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getCircleS($radius){
        $CircleS = $radius*$radius*pi();
        return $CircleS ;
    }
    public function getCylinderS($radius,$height){
        $CylinderS =  $radius*pi()*2*$height;
        return $CylinderS;
    }
    public function getVolume($radius, $height){
        $CircleS = $this->getCircleS($radius);
        $volume = $CircleS * $height ;
        return $volume;
    }
}