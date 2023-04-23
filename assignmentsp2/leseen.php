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
            <h4>Assignment P4 - Les 1</h4><br>
            <h5>Sample 1: for loop</h5>
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
                for ($i = 1; $i <= 10; $i++) {
                    echo $i;
                }
                ?>

            </p><br>
            <h5>Sample 2: while loop</h5>
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
                while ($i <= 10) {
                    echo $i;
                    $i++;
                }
                ?>

            </p><br>
            <h5>Sample 3: do while </h5>
            <pre>
    &lt;?php
        $i = 0; 
        do {
            echo $i ;
            $i++;
        } while ( $i <= 10 ); 
    ?&gt;
        </pre>
            <p>
                Result:
                <?php
                $i = 1;
                do {
                    echo $i;
                    $i++;
                } while ($i <= 10);
                ?>

            </p><br>
            <h5>Sample 4: functies </h5>
            <p>
                substr("Willy Wonka", 4); <br>
                result: <?php echo substr("Willy Wonka", 4); ?> <br><br>
                is_numeric(32); is_numeric(true); <br>
                result: <?php echo is_numeric(32);
                        echo is_numeric(true); ?> <br><br>
                if (isset(null)); if (isset(4)); <br>
                result: <?php $a = null;
                        if (isset($a)) {
                            echo "Variable 1# is set.<br>";
                        } else {
                            echo "Variable 1# is NOT set.<br>";
                        } ?>
                result: <?php $b = 4;
                        if (isset($b)) {
                            echo "Variable 2# is set.<br>";
                        } else {
                            echo "Variable 2# is NOT set.<br>";
                        } ?><br>
                mail("someone@example.com","My subject",$msg);<br>
                result: Check your email inbox.
            </p><br>

            <h5>Sample 5: afkortingen, structuur, js en datatypen </h5>
            <p>
                <a href="../assessment/assessmentp2.php">Zie: Assessment-P2</a>

        </section>
    </main>
    <script rel="javascript" src="scripts/script.js"></script>
</body>

</html>