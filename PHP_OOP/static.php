<?php
class bogor
{

    // mendeklaraikan method static
    public static function teks()
    {
        echo 'Hay-hay Bogor ...';
    }
}

// memanggil method static dalam class tanpa memuat objek
bogor::teks();