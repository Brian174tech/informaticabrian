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
        <li id="currentpage">Assessment-P2</li>
      </ul>
      <nav class="navbutton">
        <ul id=menuitems class="menuitems">
          <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="../old" target="_blank"> Assignments-P1</a><a class="dropdown-content2" href="../assignmentsp2">Assignments-P2</a></li>
          <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="index.html">Assessment-P1</a></li>
          <li><a href="../experiments">Experiments</a></li>
          <li><a href="../projects">Projects</a></li>
        </ul>
      </nav>
    </nav>
  </nav>
  <main class="contentmain">
    <section class="contentassessment">
      <h3>Individual assessment on UML and PHP</h3>
      <h4>PHP</h4>
      <ul>
        <li>Staat voor PHP: Hypertext Preprocessor</li>
        <li>Is een veel gebruikte open source scripting language </li>
        <li>PHP scripts executeren server side</li>
        <li>.PHP file kan tekst, HTML, CSS, JS en php code bevatten</li>
        <li>PHP scripts werken alleen in een .PHP format met PHP/mySQL omgeving(op webserver), bv niet in .HTML</li>
        <li>Kan (gebruiker)data aanmaken, lezen en verwijderen op server en database</li>
        <li>Cookies(usersession), userautorisatie, versleuteling en dynamische pagina content</li>
      </ul>
      <h5>Structuur</h5>
      <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
      &lt;head&gt;
      &lt;/head&gt;
      &lt;body&gt;
          &lt;?php
              // PHP code goes here
          ?&gt;
      &lt;/body&gt;
&lt;/html&gt;
        </pre>
      <h5>Display through PHP with variables</h5>
      <p>
        <?php
        $print = "print";
        $echo = "echo";
        $br = "<br>";
        $vardump = "var_dump";
        $vardump2 = 202.3;

        echo "$echo" . "<br>";
        print "$print" . $br;
        var_dump($vardump);
        echo ($br);
        var_dump($vardump2);
        var_dump(is_int($vardump2));
        echo ($br);
        var_dump($vardump . $vardump2);
        echo ($br);

        $docentNaam = "Ekko";
        $x = array("Brian", 32, array("Frans", "$docentNaam", "Kenneth"));
        var_dump($x);
        ?>
      </p>
      <h5>Data types</h5>
      <p>
        <?php
        $dataList = array("String", "Integer", "Float", "Boolean", "Null", "Array", "Object", "Resource");
        // Bovenstaand zijn van value type en reference type
        echo "<ul>";
        for ($i = 0; $i < count($dataList); $i++) {
          echo "<li>", $dataList[$i], "</li>";
        }
        echo "</ul>";
        ?>
      </p>
      <h5>Form GET</h5>
      <p>

      <form action=impressed_get.php method="get">
        <table>
          <tr>
            <td>Naam:</td>
            <td><input type="text" name="name"></td>
          </tr>
          <tr>
            <td>Zijn we onder de indruk?</td>
            <td><input type="radio" name="impressed" value="onder de indruk">Jazeker
              <input type="radio" name="impressed" value="niet onder de indruk">Nee, niet echt
            </td>
          </tr>
        </table>
        <input type="submit">


        </p>
      </form>
    </section>
  </main>
  <script rel="javascript" src="../scripts/script.js"></script>
</body>

</html>