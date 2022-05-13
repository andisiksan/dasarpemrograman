<?php
$array = file_get_contents('data.json');
$data = json_decode($array, true);


echo "<table border='1px' width='800'>";
echo " <tr><th>No.</th> <th>Nama</th> <th>Tanggal Lahir</th>
    <th>Umur</th> <th>Alamat</th> <th>Kelas</th> <th>Nilai</th> <th>Hasil</th> </tr>";
$no = 1;

foreach ($data as $key => $value) {


    if ($no % 2 == 0)
        $bg = "";
    else $bg = "#dddddd";


    $hasil = $value['nilai'];
    if ($hasil >= 0 && $hasil <= 49) {
        $hasil = "E";
    } else if ($hasil >= 50 && $hasil <= 65) {
        $hasil = "D";
    } else if ($hasil >= 65 && $hasil <= 70) {
        $hasil = "C";
    } else if ($hasil >= 70 && $hasil <= 85) {
        $hasil = "B";
    } else if ($hasil >= 85 && $hasil <= 100) {
        $hasil = "A";
    }



    $tanggallahir = date('d F Y', strtotime($value['tanggal_lahir'])); // Hasil 15 February 1994
    $tahunlahir = date('Y', strtotime($value['tanggal_lahir'])); // Hasil 15 February 1994
    $umur = date('Y') - $tahunlahir;
    echo " <tr bgcolor=$bg> <td>" . $no++ . "</td> <td>" . $value['nama'] . "</td> <td>" . $tanggallahir . "</td>
    <td>" . $umur . " Tahun</td> <td>" . $value['alamat'] . "</td> <td>" . $value['kelas'] . "</td>
    <td>" . $value['nilai'] . "</td> <td>" . $hasil . "</td></tr> ";
}
