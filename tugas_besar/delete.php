<?php
include_once("connect.php");

$id_mobil = $_GET['id_mobil'];
$delete = mysqli_query(
    $conn,
    "DELETE FROM table_mobil WHERE id_mobil='$id_mobil' "
);
header("location:index.php");
