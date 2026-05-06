<?php
$conn = mysqli_connect("localhost", "root", "", "data_undangan");

if (!$conn) {
    die("koneksi gagal!: " . mysqli_connect_error());
}
?>