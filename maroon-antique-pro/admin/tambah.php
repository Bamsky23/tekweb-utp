<?php
include '../config/auth.php';
include '../config/koneksi.php';

if(isset($_POST['submit'])){
$nama=$_POST['nama'];
$harga=$_POST['harga'];

$gambar=$_FILES['gambar']['name'];
$tmp=$_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp,"../uploads/".$gambar);

mysqli_query($conn,"INSERT INTO produk(nama_produk,harga,gambar)
VALUES('$nama','$harga','$gambar')");

header("Location:index.php");
}
?>

<form method="POST" enctype="multipart/form-data">
<input name="nama">
<input name="harga">
<input type="file" name="gambar">
<button name="submit">Simpan</button>
</form>