<?php 
include("baglan.php");
session_start();
if(isset($_SESSION["kadi"]) and isset($_SESSION["sifre"]) )
{
 $kadi=$_SESSION["kadi"];
 $sifre=$_SESSION["sifre"];
$query = $db->query("SELECT * FROM kullanicilar WHERE kullaiciadi = '{$kadi}' and sifre = '{$sifre}'")->fetch(PDO::FETCH_ASSOC);
if ( is_null($query )){
header("location: login.php");	
} 
echo "Bu sayfa size özel bir sayfadır. Oturumunuz başarıyla gerçekleştiği için şuan bu sayfaya girebilmektesiniz.
	<br><br>
 <a href='logout.php'>Çıkış</a>
	";
}else{header("location: login.php");}
?>