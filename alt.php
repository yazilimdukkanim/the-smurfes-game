


<script type="text/javascript">
    








</script>





<?php 

$otuzum=$db->prepare("SELECT* FROM uyeler WHERE kadi=?");
$otuzum->bindParam(1,$_SESSION['kadi']);
$otuzum->execute();
$otuzcuk=$otuzum->fetch(PDO::FETCH_ASSOC);

if ($otuzcuk['puan'] < 30) {

?>

<script type="text/javascript" src="sirinler.js"></script>

<?php 

}
else{

?>
<script type="text/javascript" src="bolumiki.js"></script>

<?php 

}

?>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>