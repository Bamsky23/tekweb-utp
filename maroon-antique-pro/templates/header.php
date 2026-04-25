<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// pastikan base_url tersedia
if (!isset($base_url)) {
    $base_url = "http://localhost/maroon-antique-pro/";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Maroon Antique</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- PATH FIX -->
<link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="<?= $base_url ?>">Maroon Antique</a>

<form method="GET" action="<?= $base_url ?>pages/produk.php" class="d-flex">
<input name="s" class="form-control me-2" placeholder="Cari barang...">
<button class="btn btn-warning">Search</button>
</form>

<a href="<?= $base_url ?>cart/index.php" class="btn btn-outline-light">🛒</a>
</div>
</nav>