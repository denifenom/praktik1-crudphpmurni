<?php
$db_host1 = "localhost";
$db_user1 = "root";
$db_pass = "12345678";
$db_name = "t0";    
$connection = mysqli_connect($db_host1, $db_user1, $db_pass, $db_name);
if($connection) {
    //echo "Koneksi Ke DB Berhasil!";
} else {
    echo "Gagal! : ". mysqli_connect_error();
}
?>
