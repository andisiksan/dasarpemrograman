<?php


// nilai a 90-100;
// b 80-90;
// c 70-80;
// d 0-70;
$angka = 70;
switch ($angka) {
    case $angka >= 90 && $angka <= 100:
        echo "a";
        break;
    case $angka >= 80 && $angka <= 90:
        echo "b";
        break;
    case $angka >= 70 && $angka <= 80:
        echo "c";
        break;
    case $angka == 0 && $angka <= 70:
        echo "d";
        break;
}
