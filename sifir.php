<?php 

session_start();
ob_start();
include("ayar.php");

?>
<?php 

$sif=@$_POST['sif'];

$cek=$db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$cek->bindParam(1,$_SESSION['kadi']);
$cek->execute();

$cekim= $cek->fetch(PDO::FETCH_ASSOC);



if ($cekim['puan'] == 0) {
	
if (!empty($sif) == "mane") {
	


$bes=5;

$topla= $cekim['puan']+$bes;

$ekle=$db->prepare("UPDATE uyeler SET puan=? WHERE kadi=?");
$ekle->bindParam(1,$topla);
$ekle->bindParam(2,$_SESSION['kadi']);
$ekle->execute();
$eklem= $ekle->rowCount();

if ($eklem) {

echo "yenildiniz oyun tekrardan başlıycak";



}
}






}

?>