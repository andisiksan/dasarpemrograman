<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include_once("connect.php");
    $mobil = mysqli_query(
        $conn,
        "SELECT * FROM table_mobil"
    );
    ?>


    <div class="container">
        <div class="row" style="background-color: #f4f4f4;">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">Rental Mobil</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="crud.php">CRUD <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <a href="add.php" class="btn btn-primary">Tambah Mobil</a>
            </div>

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">

                            <td>Id Mobil</td>
                            <td>Merk Mobil</td>
                            <td>Warna Mobil</td>
                            <td>Plat Mobil</td>
                            <td>Gambar</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($mo = mysqli_fetch_array($mobil)) {
                            echo "
                            <tr class='text-center'>

                            <td>" . $mo['id_mobil'] . "</td>
                            <td>" . $mo['merk_mobil'] . "</td>
                            <td>" . $mo['warna_mobil'] . "</td>
                            <td>" . $mo['plat_mobil'] . "</td>                          
                            <td>" . $mo['gambar'] . "</td>                            <td class='text-center'>
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