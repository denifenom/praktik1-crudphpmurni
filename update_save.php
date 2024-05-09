<?php

include('connection.php');

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "UPDATE cruds SET kode = '$kode', nama = '$nama', alamat = '$alamat' WHERE id = '$id'";
print_r($query);

if($connection->query($query)) {
    header("location: read.php");
} else {
    echo "Data Gagal Diupate!";
}

?>
