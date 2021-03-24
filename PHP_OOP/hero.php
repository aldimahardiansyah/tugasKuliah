<?php
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

// inheritance (pewarisan)
class hero extends lord
{
    public $role;

    // konstruktor
    public function __construct($name, $role, $damage, $defense)
    {
        $this->name = $name;
        $this->role = $role;
        $this->damage = $damage;
        $this->defense = $defense;
    }
    function set_damage($damage)
    {
        $this->damage = $damage;
    }
}