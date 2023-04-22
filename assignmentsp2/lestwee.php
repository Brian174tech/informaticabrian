<!DOCTYPE html>
<html lang="en">
<head>
  <title>Computer Science Brian</title>
  <meta name="keywords" content="Brian is a Software engineer in the making and this is his personal website" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="../css/mainstyle.css" type="text/css" rel="stylesheet" />
  <link href="../css/color.css" type="text/css" rel="stylesheet" />
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
          <li id="currentpage">Assignments-P4 - Les 2</li>
        </ul>
        <nav class="navbutton">
          <ul id="menuitems" class="menuitems">
            <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="../old" target="_blank"> Assignments-P1</a><a class="dropdown-content2" href="../assignmentsp2">Assignments-P4</a></li>
            <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="../assessment">Assessment-P1</a><a class="dropdown-content2" href="../assessment/assessmentp2.php">Assessment-P2</a></li>
            <li><a href="../experiments">Experiments</a></li>
            <li><a href="../projects">Projects</a></li>
          </ul>
        </nav>
      </nav>
    </nav>
    <main class= "contentmain">
        <section class="contentassessment">
            <h4>Assignment P4 - Les 2</h4><br>
            

            <?php
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>Score</th><th>UserName</th><th>GameDate</th></tr>";
          
            class TableRows extends RecursiveIteratorIterator {
                function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                }

                function current() {
                    return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
                }

                function beginChildren() {
                    echo "<tr>";
                }

                function endChildren() {
                    echo "</tr>" . "\n";
                }
            }

            $servername = "localhost";
            $username = "bri_sg";
            $password = "28172817";
            $dbname = "highscore";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT `Score`,`UserName`,`GameDate` FROM `Score` ORDER BY `Score` DESC");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
          ?>

        </section>
    </main>
    <script rel="javascript" src="scripts/script.js"></script>
</body>
</html>