<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$base_url = "http://localhost/maroon-antique-pro/";

include __DIR__ . '/../config/koneksi.php';
include __DIR__ . '/../templates/header.php';

$s = $_GET['s'] ?? '';

$data = mysqli_query($conn,"SELECT * FROM produk WHERE nama_produk LIKE '%$s%'");
?>

<div class="container mt-4">
<div class="row">

<?php while($d = mysqli_fetch_assoc($data)) { ?>
<div class="col-md-3">
<div class="card mb-4">

<img src="<?= $base_url ?>uploads/<?= $d['gambar']; ?>" class="card-img-top">

<div class="card-body">
<h6><?= $d['nama_produk']; ?></h6>
<p>⭐ <?= $d['rating']; ?></p>
<h5>Rp <?= number_format($d['harga']); ?></h5>

<a href="<?= $base_url ?>pages/detail.php?id=<?= $d['id']; ?>" class="btn btn-dark btn-sm">Detail</a>
<a href="<?= $base_url ?>cart/add.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">🛒</a>

</div>
</div>
</div>
<?php } ?>

</div>
</div>

<?php include __DIR__ . '/../templates/footer.php'; ?>