<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_siswa");

if (mysqli_connect_errno()){
    echo "gagal kontol: " . mysqli_connect_error();
}
?>