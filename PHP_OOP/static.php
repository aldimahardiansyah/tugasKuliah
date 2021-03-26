<?php
class bogor
{
    // mendeklarasikan variabel static
    public static $sebutan = 'Kota hujan';

    // mendeklaraikan method static
    public static function teks()
    {
        echo 'Hay-hay Bogor ...';
    }
}

// memanggil method dan variabel static dalam class tanpa membuat objek
bogor::teks();
echo '<br/>' . bogor::$sebutan;