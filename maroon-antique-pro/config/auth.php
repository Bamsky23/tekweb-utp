<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: /maroon-antique-pro/auth/login.php");
  exit;
}
?>