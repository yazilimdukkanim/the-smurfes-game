
var limon2= document.getElementById("limon2");
var sirin2= document.getElementById("sirin2");
var kutular1= document.getElementById("kutular1");
var rakam=0;


function klavye(){


if (kutular1.classList != "kutular1-animate") {


kutular1.classList.add("kutular1-animate");

}


var x = event.which;

if (x == 38 && sirin2.classList != "sirin2-animate"){
sirin2.classList.add("sirin2-animate");

limon2.classList.add("limon2-animate");
setTimeout(function(){

sirin2.classList.remove("sirin2-animate");
limon2.classList.remove("limon2-animate");


if (rakam <= 30) {



document.getElementById("puan2").value=rakam;
rakam++;

//console.log(rakam);


}//burasi saydirma 30lu

if (rakam == 15){

var yukari= document.getElementById("yukari").value;

var xt= new XMLHttpRequest();
xt.open("POST","puantopla.php",true);
xt.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xt.send("yukari="+yukari);

xt.onreadystatechange=function(){

if (this.readyState == 4 && this.status == 200){


document.getElementById("arti").innerHTML=this.responseText;

window.location.reload(false);

}
else{

document.getElementById("arti").innerHTML=this.statusText;

}

}//ajax kodlari


}// esistse 30 a puan ver


},500);



}


}


var carpismaani= setInterval(function(){


var sirin2bottom= parseInt(window.getComputedStyle(sirin2).getPropertyValue("bottom"));

var kutular1gb= parseInt(window.getComputedStyle(kutular1).getPropertyValue("left"));

if (sirin2bottom < 40 && kutular1gb > 0 && kutular1gb < 40) {

var hidden= document.getElementById("son").innerHTML="<input type='hidden' id='eksilt' value='tamam'/>";

var eksilt= document.getElementById("eksilt").value;


var cikarma= new XMLHttpRequest();
cikarma.open("POST","eksiltme.php",true);
cikarma.setRequestHeader("Content-type","application/x-www-form-urlencoded");
cikarma.send("eksilt="+eksilt);

cikarma.onreadystatechange=function(){

if (this.readyState == 4 && this.status == 200){


document.getElementById("arti").value="Skor:"+this.responseText;



}

else{

document.getElementById("arti").value="Skor:"+this.statusText;



}

}


//ajax cikarma kodlari


alert("Gameover");

window.location.reload(false);

}



});