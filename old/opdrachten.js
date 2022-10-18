function javaknop1(){
    document.getElementById('java1').style.backgroundColor='rgb(50, 255, 50)';
    document.getElementById('java2').style.backgroundColor='rgb(50, 255, 50)';
    document.getElementById('java3').style.backgroundColor='rgb(50, 255, 50)';
}
function javaknop2(){
    document.getElementById('java1').style.backgroundColor='rgb(255, 50, 50)';
    document.getElementById('java2').style.backgroundColor='rgb(255, 50, 50)';
    document.getElementById('java3').style.backgroundColor='rgb(255, 50, 50)';
}

function burger1(buttonpress){
    var burger;
    if (buttonpress == 0) {
        burger = "burger.jpg"
    }
    else{
        burger = "burger2.jpg"
    }
    document.getElementById('burgertje').src = burger;
}

function inbalk(){
    n1 = document.getElementById('hoogte').value; 
    n2 = document.getElementById('lengte').value;
    n3 = document.getElementById('breedte').value;
    document.getElementById('som').innerHTML = n1*n2*n3;
}