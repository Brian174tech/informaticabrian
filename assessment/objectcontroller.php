<?php
require_once 'objectmodel.php';
    $message = "";
    $messageList = "";
    $messageNumber = "";
    $objectChosen = "";
    
    $objectList = new ObjectList();
        $objectList->setObjectList(array (
            array("stoel", 213, "hout"),
            array("tafel", 014, "blauw"),
            array("bord", 600, "zwart"))
            );
            $objectListA = $objectList->objectList;

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $color = $_POST['color'];
        $message = 
        "<table>
        <tr> <td>objectName:</td><td>".$name."</td></tr>
            <tr> <td>objectId:</td><td>".$id."</td></tr>
            <tr> <td>objectColor:</td><td>".$color."</td></tr>
            </table>";
      } 

    if(isset($_POST['getList'])){
        $messageList = 
        "<table>
        <tr> <th>Number</th><th>Object</th></tr>
        <tr> <td> 1 </td><td>".$objectListA[0][0]."</td></tr>
        <tr> <td> 2 </td><td>".$objectListA[1][0]."</td></tr>
        <tr> <td> 3 </td><td>".$objectListA[2][0]."</td></tr>
        </table>";

    }    

    if(isset($_POST['getNumber'])){
        $number = $_POST['number'];
        if($number <= 3 && (int)$number <= 3){
            if ((int)$number == "1" ){
                $objectChosen = $objectListA[0];
            }elseif  ((int)$number == "2" ){ 
                $objectChosen = $objectListA[1];
            }elseif  ((int)$number == "3" ){
                $objectChosen = $objectListA[2];
            }
            $objectNumber = new ObjectO();
            $objectNumber->setObjectName($objectChosen[0]);
            $objectNumber->setObjectId($objectChosen[1]);
            $objectNumber->setObjectColor($objectChosen[2]);
            $attribute1 = $objectNumber->getObjectName();
            $attribute2 = $objectNumber->getObjectId();
            $attribute3 = $objectNumber->getObjectColor();
            $messageNumber =
            "<table>
            <tr> <th>attributes</th><th>values</th></tr>
            <tr> <td> objectName </td><td>".$attribute1."</td></tr>
            <tr> <td> objectId </td><td>".$attribute2."</td></tr>
            <tr> <td> objectColor </td><td>".$attribute3."</td></tr>
            </table>";
        }else{
            $messageNumber = "Wrong input or object does not exist";
        }
        
    }
