<?php

include('connection.php');

$id = $_GET['id'];

$query = "DELETE FROM cruds WHERE id = '$id'";

if($connection->query($query)) {
    header("location: read.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
