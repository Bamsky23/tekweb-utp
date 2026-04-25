<?php
session_start();
include '../config/koneksi.php';

$cart=$_SESSION['cart']??[];
?>

<h3>Keranjang</h3>

<?php foreach($cart as $id){
$d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id=$id"));
?>

<p><?= $d['nama_produk']; ?> - Rp <?= number_format($d['harga']); ?></p>

<?php } ?>