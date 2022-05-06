<?php 
session_start();
ob_start();
include("ayar.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giriş sayfası</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


<style type="text/css">
	
.form{

margin-top: 250px;

}


</style>

</head>
<body>



<div class="form offset-lg-4 col-lg-4">
	
<form action="" method="post">

<div class="form-group">
    <label for="exampleInputEmail1">kullanıcı adı</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kadi">
    <small id="emailHelp" class="form-text text-muted">Şirinler oyununu oynamak için giriş yapın..</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Şifre</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary col">Submit</button>

</form>

<?php 

if (!empty($_POST['kadi']) && !empty($_POST['password'])) {

$password= @$_POST['password'];

$md5=md5($password);

$giris= $db->prepare("SELECT* FROM uyeler WHERE kadi=? AND sifre=?");

$giris->bindParam(1,$_POST['kadi']);
$giris->bindParam(2,$md5);
$giris->execute();

$gir= $giris->rowCount();
$fet=$giris->fetch(PDO::FETCH_ASSOC);

if ($gir) {
$_SESSION['user']=1;	

$_SESSION['kadi']=$fet['kadi'];
$_SESSION['puan']=$fet['puan'];


}
else{

$_SESSION['user']=0;


}

}

if (@$_SESSION['user'] == 1) {
	
header("Location: index.php");

}



?>

</div>


</body>
</html>