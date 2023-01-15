<?php
// require_once 'objectmodel.php';
    $message = "";

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

//     if(isset($_POST['getList'])){
//         function startList(){
//             $this = $fakeSql1[$objectName,$objectId,$objectColor];
//             $
//         }
//         function get(?string"Stoel", ?int"120", ?string"zwart")
//             $fakeSql = 
//             return 
//       }    
// ?>