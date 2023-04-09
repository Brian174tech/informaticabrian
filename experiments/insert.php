<!DOCTYPE html>
<html lang="en">
<?php
    $servername = "localhost";
    $username = "bri_sg";
    $password = "28172817";
    $dbname = "highscore";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    try {
    $stmt = $conn->prepare("INSERT INTO `Score` (`UserName`,`Password`, `Score`) 
                            VALUES (:UserName, :Password, :Score)");
    $stmt->bindParam(':UserName', $Username);
    $stmt->bindParam(':Password', $Password);
    $stmt->bindParam(':Score', $Score);


    // insert a row
    $Username = $_POST["UserName"];
    $Password = $_POST["Password"];
    $Score = $_POST["Score"];
    $stmt->execute();
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
<script type="text/javascript">
  window.location.href = "javagame.php";
</script>
</html>