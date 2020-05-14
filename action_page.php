<?php 
include("baglan.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btngiris'])) {
      $kadi = $_POST['usrnm']; 
      $sifre = $_POST['psw'];
      $query = $db->query("SELECT * FROM kullanicilar WHERE kullaiciadi = '{$kadi}' and sifre = '{$sifre}'")->fetch(PDO::FETCH_ASSOC);
  if ( $query ){
  $_SESSION["kadi"] =$kadi;
  $_SESSION["sifre"] = $sifre;
  
  header('location: index.php');  
}else{
   header('Location: login.php');
}

    }else 
    if (isset($_POST['btnuyeol'])) {
     header('Location: kayitol.php');
    }
  }else
  {
      header('Location: login.php');
  }

 ?>