<?php

// Parent class
class lord
{
    // properti atau atribut
    public $damage = 500;
    public $defense = 2000;
    public $name = 'Lord';

    // method
    public function get_damage()
    {
        return $this->damage;
    }
}