<?php
require_once '../default/header.php';

if(is_numeric($_POST['nummer'])){
    $nummer2 = $_POST['nummer'];
    $nummer = (int)$nummer2;
    if ($nummer >= 1 && $nummer <= 10){
        $opties = array("1"=>"Zeer Slecht","2"=>"Slecht","3"=>"Matig","4"=>"ruim onvoldoende","5"=>"onvoldoende","6"=>"voldoende","7"=>"ruim voldoende","8"=>"Goed", "9"=>"Zeer goed", "10"=>"uitmuntend");
        echo "<p>De cijferwaarde van nummer $nummer = $opties[$nummer]</p>";
        echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
    } else{
        echo("<p>nummer is geen (geldig) numeriek</p>");
        echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
        exit();
    }
} if(is_numeric($_POST['nummercount'])){
    $nummer2 = $_POST['nummercount'];
    $nummer = (int)$nummer2;
    if ($nummer >= 0 && $nummer <= 999999){
        $resultaat = strlen((string)$nummer);
        echo "<p>De lengte van je nummer $nummer = $resultaat</p>";
        echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
    }else{
        echo("<p>nummer is geen (geldig) numeriek</p>");
        echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
        exit();
    }
} else{
    echo("<p>nummer is geen (geldig) numeriek</p>");
    echo "<p><a href=\"javascript:history.back()\"> Pagina terug!</a></p>\n";
    exit();
}
?>