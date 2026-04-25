<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","maroon_antique-pro");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>