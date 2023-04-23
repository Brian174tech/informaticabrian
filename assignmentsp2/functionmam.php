<?php
require_once '../default/header.php';

if(is_numeric($_POST['nummer1']) || is_numeric($_POST['nummer2']) || is_numeric($_POST['nummer3'])){
    $nummert = $_POST['nummer1'];
    $nummer1 = (int)$nummert;
    $nummert = $_POST['nummer2'];
    $nummer2 = (int)$nummert;
    $nummert = $_POST['nummer3'];
    $nummer3 = (int)$nummert;
    echo "<p> Dit zijn je ingevoerde nummers: $nummer1, $nummer2 en $nummer3 </p><br>";
    if ($nummer1 >= 0 && $nummer1 <= 99 || $nummer2 >= 0 && $nummer2 <= 99 || $nummer3 >= 0 && $nummer3 <= 99 ){
        $resultaat = min($nummer1,$nummer2,$nummer3);
        echo "<p>Dit nummer is het kleinst = $resultaat</p>";
        $resultaat = max($nummer1,$nummer2,$nummer3);
        echo "<p>Dit nummer is het grootst = $resultaat</p>";
        $resultaat = ($nummer1 + $nummer2 + $nummer3) / 3;
        echo "<p>Dit is het gemiddelde = $resultaat</p>";
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