<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
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
            <div class="col-md-2"></div>

            <div class="col-md-2 text-center">
                <h5><a href="index.php">Admin</a></h5>
            </div>

            <div class="col-md-2 text-center">
                <h5><a href="mobil.php">Mobil</a></h5>
            </div>

            <div class="col-md-2 text-center">
                <h5><a href="pembeli.php">Pembeli</a></h5>
            </div>

            <div class="col-md-2 text-center">
                <h5><a href="transaksi.php">Transaksi</a></h5>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12">
                <a href="add.php" class="btn btn-primary">Tambah Mobil</a>
            </div>

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <td>Id Transaksi</td>
                            <td>Warna Mobil</td>
                            <td>Merk Mobil</td>
                            <td>Plat Mobil</td>
                            <td>Id Mobil</td>
                            <td>Nama Admin</td>
                            <td>Nama Pembeli</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($mo = mysqli_fetch_array($mobil)) {
                            echo "
                            <tr class='text-center'>
                            <td>" . $mo['id_transaksi'] . "</td>
                            <td>" . $mo['warna_mobil'] . "</td>
                            <td>" . $mo['merk_mobil'] . "</td>
                            <td>" . $mo['plat_mobil'] . "</td>
                            <td>" . $mo['id_mobil'] . "</td>
                            <td>" . $mo['nama_admin'] . "</td>
                            <td>" . $mo['nama_pembeli'] . "</td>
                            <td class='text-center'>
                            <a href='edit.php?id_mobil=" . $mo['id_mobil'] . "' class='btn btn-warning'>Edit</a>
                            <a href='' class='btn  btn-danger' onclick='confirmation(`" . $mo['id_mobil'] . "`)' >Hapus</a>
                            </td>
                            </tr>
                            
                            ";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    function confirmation(id_mobil) {
        if (confirm('Apakah anda yakin akan menghapus data mobil ini ?')) {
            window.location.href = 'delete.php?id_mobil=' + id_mobil;
        }

    }
</script>