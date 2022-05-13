<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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

    // ambil data url
    $id_mobil = $_GET['id_mobil'];
    // var_dump($id_mobil);

    // query data mobil
    $mo = mysqli_query($conn, "SELECT * FROM table_mobil WHERE id_mobil= $id_mobil ");

    while ($mobil_data =  mysqli_fetch_array($mo)) {
        $id_mobil = $mobil_data['id_mobil'];
        $merk_mobil = $mobil_data['merk_mobil'];
        $warna_mobil = $mobil_data['warna_mobil'];
        $plat_mobil = $mobil_data['plat_mobil'];
    }


    ?>


    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>Edit Mobil</h4>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" name="form1">
                    <table width="100%" class="table-bordered" cellpadding="10">
                        <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>">
                        <tr>
                            <td>Merk Mobil</td>
                            <td><input type="text" class="form-control" name="merk_mobil" value="<?php echo $merk_mobil; ?>"></td>
                        </tr>
                        <tr>
                            <td>Warna Mobil</td>
                            <td><input type="text" class="form-control" name="warna_mobil" value="<?php echo $warna_mobil; ?>"></td>
                        </tr>
                        <tr>
                            <td>Plat Mobil</td>
                            <td><input type="text" class="form-control" name="plat_mobil" value="<?php echo $plat_mobil; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="form-control btn btn-primary" name="submit" value="Ubah"></td>
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

    $id_mobil = $_POST['id_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $plat_mobil = $_POST['plat_mobil'];

    $result = mysqli_query($conn, "UPDATE table_mobil SET merk_mobil = '$merk_mobil', warna_mobil = '$warna_mobil' , 
    plat_mobil = '$plat_mobil'
    WHERE id_mobil='$id_mobil'");
    // print_r($_POST);

    header("location:index.php");
}

?>