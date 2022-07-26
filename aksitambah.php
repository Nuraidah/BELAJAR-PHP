<?php
include "config/koneksi.php";

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST ['jk'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    
    
    $kirim = mysqli_query ($koneksi, "INSERT INTO siswa VALUES ('$nis', '$nama', '$alamat', '$jk', '$agama', '$status')");
    
    header ("location:tampil.php");
    ?>