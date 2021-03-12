<?php
$hero = ['Superman', 'Batman', 'Hulk'];
foreach ($hero as $super) {
    echo $super;
    echo "<br/>";
}

//hitng panjang array
echo "Panjang array: " . count($hero);

echo '<hr/>';

$hero1 = ['nama' => 'Alucard', 'role' => 'Fighter', 'attack' => 200];
$hero2 = ['nama' => 'Tigreal', 'role' => 'Tank', 'attack' => 94];

foreach ($hero1 as $hr) {
    echo $hr;
}