<?php 
session_start();
ob_start();

include("ayar.php");



?>
<?php 


$zip = @$_POST['zip'];

if(!empty($zip) == "oldu"){

$goster= $db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$goster->bindParam(1,$_SESSION['kadi']);
$goster->execute();
$gos=$goster->fetch(PDO::FETCH_ASSOC);

$bir= 1;

$hesapla=$gos['puan']+$bir;

$ekle= $db->prepare("UPDATE uyeler SET puan=? WHERE kadi=?");
$ekle->bindParam(1,$hesapla);
$ekle->bindParam(2,$_SESSION['kadi']);
$ekle->execute();

}
?>