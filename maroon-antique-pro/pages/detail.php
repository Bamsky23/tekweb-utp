<?php
include '../config/koneksi.php';
include '../templates/header.php';

$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id=$id"));
?>

<div class="container mt-5">
<h2><?= $d['nama_produk']; ?></h2>
<img src="../uploads/<?= $d['gambar']; ?>" width="300">
<p><?= $d['deskripsi']; ?></p>
<h4>Rp <?= number_format($d['harga']); ?></h4>
</div>