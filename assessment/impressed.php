<?php
require_once 'objectcontroller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Computer Science Brian</title>
  <meta name="keywords" content="Brian is a Software engineer in the making and this is his personal website" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="../css/mainstyle.css" type="text/css" rel="stylesheet" />
  <link href="../css/color.css" type="text/css" rel="stylesheet" />
  <script rel="javascript" src="../scripts/script.js"></script>
</head>
<body>
    <header class="logomain">
      <img id="mainlogo" alt="logo" src="../images/mainlogo1.svg" />
      <span>Brian</span>
    </header>
    <nav class="navbar">
      <nav class="navflex">
        <ul class=breadcrumb>
          <li><a href="../index.html">Home</a></li>
          <li>/</a></li>
          <li id="currentpage">Assessment-P2-deel 2</li>
        </ul>
        <nav class="navbutton">
          <ul id=menuitems class="menuitems">
            <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="../old" target="_blank"> Assignments-P1</a><a class="dropdown-content2" href="../assignmentsp2">Assignments-P2</a></li>
            <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="index.html">Assessment-P1</a><a class="dropdown-content2" href="assessmentp2.php">Assessments-P2</a></li>
            <li><a href="../experiments">Experiments</a></li>
            <li><a href="../projects">Projects</a></li>
          </ul>
        </nav>
      </nav>
    </nav>
    <main class= "contentmain">
        <section class="contentassessment">
            <h3>PHP vervolg - deel 2</h3>
            <h5>Form POST</h5>
            <form method="post" action="">
            <table> 
                <tr> <td>objectName:</td><td><input type="text" name="name"></td></tr>
                <tr> <td>objectId:</td><td><input type="text" name="id"></td></tr>
                <tr> <td>objectColor:</td><td><input type="text" name="color"></td></tr>
            </table>
            <input type="submit" name="submit">
            <?php echo $message; ?> <br><br><br><br>

            <h5>MVC poc: get_objects</h5> <br>
            <form method="post" action="">
            Get list with objects <input type="submit" name="getList">

            <br><br><br><br>
            <h5>MVC poc: get_object#</h5> <br>
            <form method="post" action="">
            <table> 
                <tr> <td>Get object with nr.:</td><td><input type="text" name="number"></td></tr>
            </table>
            <input type="submit" name="getNumber">

    </main>
    <script rel="javascript" src="../scripts/script.js"></script>
</body>
</html>