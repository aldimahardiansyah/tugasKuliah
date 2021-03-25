<?php
require_once('lord.php');

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
        return $this;
    }

    // overriding
    public function get_damage()
    {
        echo 'Damage hero: ' . $this->damage;
    }
}