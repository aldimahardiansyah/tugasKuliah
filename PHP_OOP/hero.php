<?php
class hero
{
    // properti atau atribut
    public $damage;
    public $defense;
    public $name;

    // konstruktor
    public function __construct($name, $damage, $defense)
    {
        $this->damage = $damage;
        $this->name = $name;
        $this->defense = $defense;
    }

    // method
    public function set_damage($damage)
    {
        $this->damage = $damage;
    }

    public function get_damage()
    {
        return $this->damage;
    }
}

$hero1 = new hero('Alucard', 210, 60);
$hero2 = new hero('Miya', 240, 20);

echo 'Nama hero:' . $hero1->name;
echo '<br/> Damage:' . $hero1->damage;

$hero1->set_damage(350);
echo "<br/>";
echo $hero1->damage;