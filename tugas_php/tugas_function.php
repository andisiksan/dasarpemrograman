<?php

// persegi
function persegi($sisi)
{
    $hasil = $sisi * $sisi;
    echo "luas persegi = $sisi x $sisi = $hasil <br>";
}

persegi(10);

// persegi panjang
function persegi_panjang($p, $l)
{
    $hasil = $p * $l;
    echo "luas persegi panjang = $p x $l = $hasil <br> ";
}

persegi_panjang(10, 20);


// segitiga
function segitiga($a, $t)
{
    $hasil = $a / 2 * $t;
    echo "luas segitiga = $a/2 x $t = $hasil <br> ";
}

segitiga(10, 30);


// jajaran genjang
function jajaran_genjang($a, $t)
{
    $hasil =  $a * $t;
    echo "luas jajaran genjang = $a x $t = $hasil <br> ";
}
jajaran_genjang(3, 5);


// trapesium
function trapesium($ss, $t)
{

    $hasil = 1 / 2 * $ss * $t;
    echo "luas trapesium = 1/2 x $ss x $t = $hasil";
}
trapesium(20, 40);
