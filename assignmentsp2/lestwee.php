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
define ( 'DB_HOST' , 'localhost' );
define ( 'DB_NAME' , 'schoolopdracht' );
define ( 'DB_USER' , 'bri_sg' );
define ( 'DB_PASS' , '28172817' );

function connectDatabase(){
    $conn = 'mysql:host=' . DB_HOST . ';DB_NAME=' . DB_NAME;

    try{
        return new PDO($conn, DB_USER, DB_PASS );
    }
    catch (PDOException $e) {
        return NULL;
    }
}

$db = connectDatabase();
if( is_null ( $db ) )
    die('<h1>Database-verbinding mislukt</h1>' );
echo 'gelukt';

$sql = 'SELECT * FROM schoolopdracht.gebruikers';

$statement = $db->prepare( $sql );
$statement->execute();
$result = $statement->fetchall ( PDO::FETCH_OBJ );

foreach ( $result as $record ){
    echo '<ul>';

    foreach ( $record  as $key => $value ) {
        echo "<li>$key => $value</li>";
    }
    echo '</ul>'
}
?>

        </section>
    </main>
    <script rel="javascript" src="scripts/script.js"></script>
</body>
</html>