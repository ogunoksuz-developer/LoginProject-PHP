<?php 
try {
  include("baglan.php");
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['signupbtn'])) {
      $ad = $_POST['ad']; 
      $soyad = $_POST['soyad'];
      $email = $_POST['email']; 
      $kulad = $_POST['kulad'];
      $psw = $_POST['psw']; 
      $pswrepeat = $_POST['pswrepeat'];

      $query = $db->prepare("INSERT INTO kullanicilar SET
      ad = :ad,
      soyad = :soyad,
      mail = :mail,
      sifre = :sifre,
      rol = :rol,
      kullaiciadi = :kullaiciadi");

      $insert = $query->execute(array(
      "ad" => $ad,
      "soyad" => $soyad,
      "mail" => $email,
       "sifre" => $psw,
      "rol" => 1,
      "kullaiciadi" => $kulad,
));
      
  if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
}

  }else if (isset($_POST['cancelbtn'])) {
  header('Location: login.php');

  }
}

} catch (Exception $e) 
{
  print $e->getMessage();
}
 ?>