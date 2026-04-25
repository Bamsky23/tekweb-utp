<?php
session_start();
include '../config/koneksi.php';

if(isset($_POST['login'])){
$user=$_POST['username'];
$pass=md5($_POST['password']);

$q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
if(mysqli_num_rows($q)>0){
$_SESSION['login']=true;
header("Location: ../admin");
}else{
echo "Login gagal";
}
}
?>

<form method="POST">
<input name="username">
<input type="password" name="password">
<button name="login">Login</button>
</form>