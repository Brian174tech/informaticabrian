<?php
require_once '../default/header.php';

if(is_numeric($_POST['nummer'])){
    $nummer2 = $_POST['nummer'];
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