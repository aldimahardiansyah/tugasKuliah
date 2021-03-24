<?php
require_once('hero.php');

// membuat objek
$lord = new lord();
$hero1 = new hero('Alucard', 'Fighter', 210, 60);
$hero2 = new hero('Miya', 'Marksman', 240, 20);

// mencetak damage lord
echo 'Damage Lord: ' . $lord->damage;
echo '<hr/>';

echo '<br/>Nama hero: ' . $hero1->name;
echo '<br/> Damage: ' . $hero1->damage;

// mengubah damage
$hero1->set_damage(420);

echo "<br/>";
echo 'Damage setelah diubah: ' . $hero1->damage;