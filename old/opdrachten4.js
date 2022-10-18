var checkred="true";

function countRed(){
    if(checkred=="false"){
        redCount="0";
        document.getElementById('showredCount').innerHTML = redCount;
    } else if (window.checkred=="true"){
        redCount = document.getElementsByTagName('othercolour1').length;
        document.getElementById('showredCount').innerHTML = redCount;
    } else{
        redCount="gaat fout";
        document.getElementById('showredCount').innerHTML = redCount;
    }
}

function notRed(){
    nored = document.getElementsByTagName('othercolour2');
    count = nored.length;
    for (let i=0;i<count;i++){
        nored[i].style.color ='rgb(75, 75, 255)';
    }
}
function redtoGreen(){
    redtogreen = document.getElementsByTagName('othercolour1');
    countred = document.getElementsByTagName('othercolour1').length;
    let i = 0;
    checkred="false";
    while (i<countred){
        redtogreen[i].style.color= 'rgb(82, 170, 119)';
        i++;
    }
    
}