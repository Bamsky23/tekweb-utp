<?php
echo "TEST BERHASIL";
error_reporting(E_ALL);
ini_set('display_errors', 1);

// BASE URL biar path konsisten
$base_url = "http://localhost/maroon-antique-pro/";
?>

<?php include __DIR__ . '/templates/header.php'; ?>

<div class="container text-center mt-5">
  <h1 style="color:#800000;">Luxury Antique Collection</h1>
  <p>Barang antik eksklusif & bernilai tinggi</p>
  <a href="<?= $base_url ?>pages/produk.php" class="btn btn-warning mt-3">Lihat Produk</a>
</div>

<?php include __DIR__ . '/templates/footer.php'; ?>