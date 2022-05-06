<?php 

include("ust.php");

?>

<?php 

$otuz=$db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$otuz->bindParam(1,$_SESSION['kadi']);
$otuz->execute();
$otuzum=$otuz->fetch(PDO::FETCH_ASSOC);

if ($otuzum['puan'] < 30) {
	


?>


<div class="ekran">

<div id="elma"></div>

<div id="sirin"></div>	
<div id="kaktus"></div>

</div>
<button type="button" class="btn btn-danger offset-lg-4 col-lg-4" onclick="zipla()" id="zip" value="oldu">Zıpla</button>
<br>
<br>
<br>


<br>

<input type="text"  id="puan" class="offset-lg-4 col-lg-4" disabled="disabled" style="background-color: black; color:white; border-radius: 15px; box-shadow: 5px 10px 5px green;">

<div id="cikar"></div>



<?php 

}
else{



if ($otuzum['puan'] != 55) {
	


?>
<div class="ekran2">

<div id="limon2"></div>	

<div id="sirin2"></div>
<div id="kutular1"></div>

</div>

<br>
<input type="text" disabled="disabled" id="puan2" class="offset-lg-4 col-lg-4" style="background-color: black; color:white; border-radius: 15px; box-shadow: 5px 10px 5px green;">

<div id="son"></div>
<?php 
}
else{

?>


<img src="http://businessadministration.ir/wp-content/uploads/2018/10/win-win-settlements_resized.jpg" style=" margin-top: 200px;" class=" col-lg-4 offset-lg-4">
<br>
<br>

<form action="" method="post">
<button type="submit" name="yeniden" value="baslat" class="btn btn-danger col-lg-4 offset-lg-4">Yeniden başlat</button>
</form>
<?php
}
}

?>


<?php 

if (!empty($_POST['yeniden']) == "baslat") {

$besi=5;

$basla=$db->prepare("UPDATE uyeler SET puan=? WHERE kadi=?");
$basla->bindParam(1,$besi);
$basla->bindParam(2,$_SESSION['kadi']);
$basla->execute();

$bas=$basla->rowCount();

if ($bas) {
	
echo "<span style='color:white;'>İki saniye içinde oyun başlıyor</span>";

header("refresh:2; url=index.php");


}

}

?>


<?php 

include("alt.php");

?>