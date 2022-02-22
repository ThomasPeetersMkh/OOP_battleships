<?php

class RebelShip extends AbstractShip
{
    public function getFavoriteJedi(){
        $coolJedis = array("Yoda","Ben Obi-Wan Kenobi");
        $key = array_rand($coolJedis);
        return $coolJedis[$key];
    }

    public function getType()
    {
        return "Rebel";
    }

    public function isFunctional()
    {
        return true;
    }

    public function getNameAndSpecs($short = false )
    {
        $val = parent::getNameAndSpecs($short);
        $val .= " (Rebel)";
        return $val;
    }

    public function getJediFactor()
    {
        return rand(10,30);
    }


}