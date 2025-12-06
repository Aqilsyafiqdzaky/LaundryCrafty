<?php
$conn = mysqli_connect("localhost", "root", "", "laundrycrafty");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
