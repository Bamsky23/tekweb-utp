<?php
include '../config/auth.php';
include '../config/koneksi.php';

$id=$_GET['id'];
$d=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM produk WHERE id=$id"));

if(isset($_POST['submit'])){
mysqli_query($conn,"UPDATE produk SET 
nama_produk='$_POST[nama]',
harga='$_POST[harga]'
WHERE id=$id");

header("Location:index.php");
}
?>

<form method="POST">
<input name="nama" value="<?= $d['nama_produk']; ?>">
<input name="harga" value="<?= $d['harga']; ?>">
<button name="submit">Update</button>
</form>