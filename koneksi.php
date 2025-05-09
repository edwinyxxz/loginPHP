<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_siswa");

if (mysqli_connect_errno()){
    echo "koneksi gagal: " . mysqli_connect_error();
}
?>
