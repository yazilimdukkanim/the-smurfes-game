<?php 

session_start();
ob_start();
include("ayar.php");


?>
<?php 


$eksilt=@$_POST['eksilt'];

if (!empty($eksilt) == "tamam") {
	
$bir= 1;

$olustur=$db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$olustur->bindParam(1,$_SESSION['kadi']);
$olustur->execute();

$ol= $olustur->fetch(PDO::FETCH_ASSOC);

$cikar= $ol['puan']-$bir;

$duzenle=$db->prepare("UPDATE uyeler SET puan=? WHERE kadi=?");
$duzenle->bindParam(1,$cikar);
$duzenle->bindParam(2,$_SESSION['kadi']);
$duzenle->execute();

header("refresh:1s; url=index.php");

}


?>