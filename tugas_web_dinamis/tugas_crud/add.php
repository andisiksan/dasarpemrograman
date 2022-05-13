<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include_once("connect.php");
    $mobil = mysqli_query(
        $conn,
        "SELECT table_mobil.*, id_transaksi , nama_admin , nama_pembeli  FROM table_mobil
                                lEFT JOIN table_transaksi ON table_transaksi.id_mobil = table_mobil.id_mobil
                                LEFT JOIN table_pembeli ON table_pembeli.id_pembeli = table_transaksi.id_pembeli
                                LEFT JOIN table_admin ON table_admin.id_admin = table_transaksi.id_admin
                                "
    );
    ?>


    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>Tambah Mobil</h4>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <form action="add.php" method="POST" name="form1">
                    <table width="100%" class="table-bordered" cellpadding="10" border="0">
                        <tr>
                            <td>Merk Mobil</td>
                            <td><input type="text" class="form-control" name="merk_mobil"></td>
                        </tr>
                        <tr>
                            <td>Warna Mobil</td>
                            <td><input type="text" class="form-control" name="warna_mobil"></td>
                        </tr>
                        <tr>
                            <td>Plat Mobil</td>
                            <td><input type="text" class="form-control" name="plat_mobil"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Add"></td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {

    $merk_mobil = $_POST['merk_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $plat_mobil = $_POST['plat_mobil'];

    $insert = mysqli_query($conn, "INSERT INTO `table_mobil` ( `merk_mobil`, `warna_mobil` , `plat_mobil`)
    VALUES ('$merk_mobil', '$warna_mobil' , '$plat_mobil'); ");
    header("location:index.php");






    // cek erornya
    //     $sql = "INSERT INTO table_mobil ( merk_mobil, warna_mobil)
    // VALUES ( '$merk_mobil', '$warna_mobil')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }


    // untuk cek jalan/tidak
 
}
?>