<?php 
session_start();
ob_start();
include("ayar.php");


?>
<?php 

$cekcek=$db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$cekcek->bindParam(1,$_SESSION['kadi']);
$cekcek->execute();

$cekimim= $cekcek->fetch(PDO::FETCH_ASSOC);

echo $cekimim['puan'];

?>