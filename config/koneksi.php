<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "daftar siswa";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    DIE ("koneksi Gagal!");
}
echo "koneksi sukses";

?>
