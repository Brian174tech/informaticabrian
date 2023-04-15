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
          <li id="currentpage">Assignments-P4 - Les 1</li>
        </ul>
        <nav class="navbutton">
          <ul id="menuitems" class="menuitems">
            <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="../old" target="_blank"> Assignments-P1</a><a class="dropdown-content2" href="../assignmentsp2">Assignments-P2</a></li>
            <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="../assessment">Assessment-P1</a><a class="dropdown-content2" href="../assessment/assessmentp2.php">Assessment-P2</a></li>
            <li><a href="../experiments">Experiments</a></li>
            <li><a href="../projects">Projects</a></li>
          </ul>
        </nav>
      </nav>
    </nav>
    <main class= "contentmain">
        <section class="contentassessment">
            <h4>Assignment P4 - Les 1</h4><br>
            <h5>Sample 1:</h5>
        <pre>
    &lt;?php
        for ( $i = 1; $i <= 10; $i++) {
            echo $i ;
        }
    ?&gt;
        </pre>
        <p>
            Result: 
            <?php
                    for ( $i = 1; $i <= 10; $i++) {
                        echo $i ;
                    }
                ?>

        </p><br>
        <h5>Sample 2:</h5><br>
        <pre>
    &lt;?php
        $i = 1; 
        while ( $i <= 10 ) {
            echo $i ;
            $i++ ;
        }
    ?&gt;
        </pre>
        <p>
            Result: 
            <?php
                $i = 1; 
                while ( $i <= 10 ) {
                    echo $i ;
                    $i++ ;
                }
            ?>

        </p><br>
        </section>
    </main>
    <script rel="javascript" src="scripts/script.js"></script>
</body>
</html>