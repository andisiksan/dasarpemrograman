<?php

$nama =  "Novi";
$tinggibadan = 160;
$beratbadan = 52;


$hasil = $tinggibadan / 100;
$bmi = $beratbadan / ($hasil * $hasil);
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk ";

if ($bmi <= 18.5) {
    echo "Kurus";
} elseif ($bmi < 22.9) {
    echo "Sedang";
} else {
    echo "Gemuk";
}
