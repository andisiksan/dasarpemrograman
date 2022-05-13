<?php


// panjang
$p = 8;
// lebar
$l = 4;
// alas
$a = 4;
// tinggi
$t = 8;
// sisi
$s = 4;
// jumlah sisi sejajar
$ss = 16;

// luas persegi
$l_persegi = $s * $s;
echo "$s x $s = $l_persegi";
echo "<hr>";


//luas persegi panjang
$l_persegi_panjang = $p * $l;
echo "$p x $l = $l_persegi_panjang";
echo "<hr>";

// luas segitiga
$l_segitiga = $a / 2 * $t;
echo "$a : 2 x $t = $l_segitiga";
echo "<hr>";

// //luas jajaran genjang
$l_jajargenjang = $a * $t;
echo "$a x $t = $l_jajargenjang";
echo "<hr>";


// //luas trapesium
$l_trapesium = 1 / 2 * $ss * $t;
echo "1/2 x $ss x $t = $l_trapesium";
echo " <hr>";
