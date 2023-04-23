<?php

if(is_numeric($_POST['nummer'])){
    $nummer = $_POST;
    if ($nummer > 1 && $nummer < 10){
        $opties = array("1"=>"Zeer Slecht","2"=>"Slecht","3"=>"Matig","4"=>"ruim onvoldoende","5"=>"onvoldoende","6"=>"voldoende","7"=>"ruim voldoende","8"=>"Goed", "9"=>"Zeer goed", "10"=>"uitmuntend");
        echo $opties[$nummer];
    } 
} else{
    echo("nummer is geen numeriek tussen 1 en 10");
    echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
    exit();
}
?>