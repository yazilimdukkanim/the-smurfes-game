<?php 

session_start();
ob_start();

include("ayar.php");



?>

<!DOCTYPE html>
<html onkeydown="klavye()" id="yukari" value="asagi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>şirinler</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style type="text/css">
	
body{

background-color: black;

}
.ekran{
    width: 800px;
    height: 200px;
    border:1px solid #000;
    background: #fff;
    margin:100px auto;
    position: relative;
    overflow:hidden;

}


#sirin{
width: 72px;
height: 72px;
position: absolute;

bottom: 0px;
left: -10px;
background: url(smurfs.png);

}

.sirin-animate{
    animation: sirin .5s linear;
}

@keyframes sirin{


   0%{bottom:0px;}
    25%{bottom:70px;}
    75%{bottom:70px;}
    100%{bottom:0px;}
}




#kaktus{

width: 32px;
height: 32px;
position: absolute;
bottom: 0px;
 left:775px;
background: url(kaktus.png);

}
.kaktus-animate{
    animation:kaktus 2s linear infinite;
}
@keyframes kaktus{

 0%{left:775px;}
    100%{left:-40px;}



}

#puan{

background-color: white;

color: black;

height: 100px;


}


#elma{

width: 24px;
height: 24px;

background: url(elma.png);

position: absolute;

bottom: 140px;

}



@keyframes apple{

0%{

bottom: 140px;

}
25%{

bottom: 90px;

}

50%{

bottom: 50px;

}

75%{

bottom: 25px;

}

100%{

bottom: 0px;

}

}

.apple-animate{

animation: sirin .5s linear;

}



#game{

display: none;

}


/*
ikinci bolum burdan itibaren

*/

.ekran2{

margin: 0px auto;

background-color: white;
height: 240px;

width: 850px;
overflow: hidden;
position: relative;
}

#limon2{
width: 24px;
height: 24px;
position: absolute;

bottom: 130px;
background: url(limon.png);

}


@keyframes limon2{

0%{

bottom: 130px;

}
25%{

bottom: 80px;

}

50%{

bottom: 50px;

}
75%{

bottom: 20px;

}

100%{

bottom: 0px;

}
}


.limon2-animate{

animation: limon2 .5s linear;

}

#sirin2{

width: 72px;
height: 72px;

position: absolute;
background: url(smurfs.png);
bottom: 0px;
left: -10px;


}



@keyframes sirin2{

   0%{bottom:0px;}
    25%{bottom:70px;}
    75%{bottom:70px;}
    100%{bottom:0px;}



}

.sirin2-animate{

 animation: sirin2 .5s linear;


}

#kutular1{

width: 32px;
height: 32px;
position: absolute;
left: 200px;
background: url(pasta.png);
bottom: 0px;



}


@keyframes kutular1{


0%{

left: 795px;

}


100%{

left: 0px;

}
}

.kutular1-animate{

    animation:kutular1 2s linear infinite;


}



</style>

</head>
<body>
<?php 

if (@$_SESSION['user'] == 0) {
    
header("Location: giris.php");

}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hesabım
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?php echo $_SESSION['kadi']; ?></a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Puanınız:
<span id="arti">
  


</span>


<script type="text/javascript">
  
setInterval(function(){

var artibes= new XMLHttpRequest();
artibes.open("GET","artibes.php",true);
artibes.send();

artibes.onreadystatechange=function(){

if(this.readyState=4 && this.status == 200){

document.getElementById("arti").innerHTML=this.responseText;


}
else{

document.getElementById("arti").innerHTML=this.statusText;

}


}

},1000);

</script>



  <div id="sonuc">
<!-- ajax içeriği gelicek buraya -->





  </div>
<!-- ajax ilepuani cek -->
<input type="hidden" id="sif" value="mane">

<script type="text/javascript">
  
var sif= document.getElementById("sif").value;

var sifir= new XMLHttpRequest();
sifir.open("POST","sifir.php",true);
sifir.setRequestHeader("Content-type","application/x-www-form-urlencoded");
sifir.send("sif="+sif);

sifir.onreadystatechange=function(){

if (this.readyState == 4 && this.status== 200){

var sonuc = document.getElementById("sonuc").innerHTML=this.responseText;

if (sonuc){

setTimeout(function(){
window.location = "gameover.php";

},2000);

}




}
else{

document.getElementById("sonuc").innerHTML=this.statusText;

}

}



</script>

<!-- ajax ilepuani cek -->

</a>




      </li>
    </ul>
    
  </div>
</nav>


