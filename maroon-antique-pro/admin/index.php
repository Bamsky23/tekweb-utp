<?php
include '../config/auth.php';
include '../config/koneksi.php';

$data=mysqli_query($conn,"SELECT * FROM produk");
?>

<a href="tambah.php">+ Tambah</a>

<?php while($d=mysqli_fetch_assoc($data)){ ?>
<p>
<?= $d['nama_produk']; ?>
<a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
<a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
</p>
<?php } ?>