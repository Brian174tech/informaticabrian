<?php require_once '../default/header.php'; ?>
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
<main class="contentmain">
  <section class="contentassessment">
    <h4>Assignment P4 - Les 2</h4><br>
    <?php
    $date = date('d-m-Y H:i');
    $dow = date('l');
    echo "<p> $dow<br>";
    echo "$date</p>";

    function showTime()
    {
      $date = strftime("%c", time());
      $dow = strftime("%A", time());
      echo "{$dow} / {$date}<br>";
    }
    setlocale(LC_TIME, 'nl_NL');
    showTime();
    ?>
    <br>
    <?php
    error_reporting(E_ALL);
    // function teller()
    // {
    //   $filename = "teller.txt";
    //   if (file_exists($filename)) {
    //     $handle = fopen($filename, "rb+");
    //     $teller = fread($handle, filesize($filename));
    //     $teller++;
    //   } else {
    //     $handle = fopen($filename, "wb+");
    //     $teller = 1;
    //   }
    //   rewind($handle);
    //   fwrite($handle, $teller);
    //   fclose($handle);
    //   return sprintf("%06d", $teller);
    // }
    // $teller = teller();
    // echo "$teller hallo";
    $filename = 'teller.csv';
    $string = 'opdracht';
    $file = fopen($filename, "w");
    //echo fwrite($file,"bob");
    // fclose($file);
    readfile($filename);
    ?>
    <br><br>
    <?php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'schoolopdracht');
    define('DB_USER', 'bri_sg');
    define('DB_PASS', '28172817');

    function connectDatabase()
    {
      $conn = 'mysql:host=' . DB_HOST . ';DB_NAME=' . DB_NAME;

      try {
        return new PDO($conn, DB_USER, DB_PASS);
      } catch (PDOException $e) {
        return NULL;
      }
    }

    $db = connectDatabase();
    if (is_null($db))
      die('<h1>Database-verbinding mislukt</h1>');
    echo 'verbinding: gelukt';

    $sql = 'SELECT * FROM schoolopdracht.gebruikers';

    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchall(PDO::FETCH_OBJ);

    foreach ($result as $record) {
      echo '<ul>';

      foreach ($record  as $key => $value) {
        echo "<li>$key => $value</li>";
      }
      echo '</ul>';
    }

    ?>
    <?php
    session_start();
    if (!isset($_SESSION['counter'])) {
      $_SESSION['counter'] = 0;
    }
    $counter = $_SESSION['counter'] + 1;
    $_SESSION['counter'] = $counter;
    ?>
    <br>
    <p>
      SessionID = <?= session_id() ?> <br>
      Page visit counter: <?= $counter ?> .
    </p>
    <p style="border-width:3px; border-style:solid;">
      <img id="activitydiagram" src="../images/activity.png" title="activity switch image" /><br>
      Switch activity diagram
    </p>
  </section>
</main>
<?php require_once '../default/footer.html'; ?>