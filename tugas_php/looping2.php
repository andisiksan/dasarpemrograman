        <?php
        echo "<table border='1px' cellpadding='5' width='400'>";
        echo " <tr bgcolor=#0000ff><th>No</th> <th>Nama</th> <th>Kelas</th> </tr>";

        $no = 1;
        $kelas = 10;

        do {
            if ($no % 2 == 0)
                $bg = "";
            else $bg = "#dddddd";
            echo "<tr bgcolor= $bg><td>$no</td> <td>Nama ke $no</td> <td>Kelas $kelas</td></tr>";
            $kelas--;
            $no++;
        } while ($kelas > 0);

        echo "</table>";

        ?>
