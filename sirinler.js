var sirin = document.getElementById("sirin");
var kaktus= document.getElementById("kaktus");
var puan = document.getElementById("puan");
var elma= document.getElementById("elma");
var sayi=0;
var skorum= 0;



function zipla(){


 if(kaktus.classList!="kaktus-animate")
    {
        kaktus.classList.add("kaktus-animate");

        



    }
 
    if(sirin.classList!="sirin-animate")
    {
        sirin.classList.add("sirin-animate");

        elma.classList.add("apple-animate");
       setTimeout(function(){
            sirin.classList.remove("sirin-animate");

elma.classList.remove("apple-animate");



if(sayi <= 30){



document.getElementById("puan").value="Puanınız:"+sayi;
sayi++;
//console.log(sayi);



if (sayi >= 30){


alert("Oyunu kazandınız Tebrikler");
kaktus.style="display:none;";

//window.location.reload(false);
if (skorum <= 15) {

document.getElementById("puan").value="Skor:"+skorum;

skorum++;

if (skorum > 0) {




kaktus.style="display:none;";

window.location.reload(false);

var zip= document.getElementById("zip").value;



var xhttp= new XMLHttpRequest();
xhttp.open("POST","update.php",true);
xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhttp.send("zip="+zip);
xhttp.onreadystatechange=function(){

if (this.readyState == 4 && this.status == 200) {

document.getElementById("puan").value="Skor:"+this.responseText;



}
else{

document.getElementById("puan").value=this.statusText;

}

}





    
}



}

}

}






        },500);
    






    }



}









//carpisma ani



var carpismaani= setInterval(function(){


var sirinbottom= parseInt(window.getComputedStyle(sirin).getPropertyValue("bottom"));

var kaktusleft= parseInt(window.getComputedStyle(kaktus).getPropertyValue("left"));


//console.log(kaktusleft);

if (kaktusleft >0 && kaktusleft < 40 && sirinbottom < 40){


alert("Game Over");


//ajax cikarma kodlari

var cikar=document.getElementById("cikar").innerHTML="<input type='hidden' id='oyunubaslat' value='oldu'>";

var oyunubaslat=document.getElementById("oyunubaslat").value;


var cikarma= new XMLHttpRequest();
cikarma.open("POST","cikarma.php",true);
cikarma.setRequestHeader("Content-type","application/x-www-form-urlencoded");
cikarma.send("oyunubaslat="+oyunubaslat);

cikarma.onreadystatechange=function(){

if (this.readyState == 4 && this.status == 200){


document.getElementById("puan").value="Skor:"+this.responseText;



}

else{

document.getElementById("puan").value="Skor:"+this.statusText;



}

}


//ajax cikarma kodlari








kaktus.classList.remove("kaktus-animate");
kaktus.style.display="none";


window.location.reload(false);




}





});