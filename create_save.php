<?php
include('connection.php');

$kode = $_POST['kode_barang'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$query = "INSERT INTO cruds (kode, nama, alamat) VALUES ('$kode', '$nama', '$alamat')";

if($connection->query($query)) {
    header("location: read.php");
} else {
    echo "Data Gagal Disimpan!";
}


//Rest API
//https/..../

?>
