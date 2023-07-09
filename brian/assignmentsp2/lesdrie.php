<?php require_once '../default/header.php'; ?>
<nav class="navbar">
    <nav class="navflex">
        <ul class=breadcrumb>
            <li><a href="../index.html">Home</a></li>
            <li>/</a></li>
            <li id="currentpage">Assignments-P4 - Les 3</li>
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
        <h4>Assignment P4 - Les 3</h4><br>
        <?php
        error_reporting(E_ALL);
        echo ('<h5>Composer</h5><p>Composer is een tool in softwareontwikkeling voor het beheren van afhankelijkheden van verschillende bibliotheken of packages die gebruikt worden in een project. Het automatiseert het proces van het downloaden, installeren en updaten van deze packages en zorgt ervoor dat de juiste versies worden gebruikt. Dit vereenvoudigt het ontwikkelingsproces en maakt het eenvoudiger om samen te werken met anderen aan het project. <br>Je kunt eenvoudig versies met elkaar delen met een .json file.<br></p><pre> {
        "name": "naam project",
        "description": "beschrijving project",
        "type": "project",
        "license": "MIT",
        "authors": [
            {
                "name": "Naam",
                "email": "mail@mail.com"
            }
        ],
        "require": {
            "monolog/monolog": "^2.0",
            "phpmailer/phpmailer": "^6.0"
        }
    }</pre><br>');
        echo ("<h5>PSR4 - auto loading</h5><p>PSR4-auto loading is een standaard voor het laden van PHP-klassen in een project. Het houdt in dat alle klassen in een bepaalde directorystructuur worden geplaatst en automatisch worden geladen wanneer ze worden opgeroepen in de code. Dit bespaart tijd en moeite bij het handmatig laden van klassen en zorgt voor een gestandaardiseerde manier van werken in PHP-projecten.</p><br>");
        echo ('<h5>Namespaces</h5><p>Een namespace in programmeertaal zorgt ervoor dat er geen conflicten optreden wanneer er verschillende bibliotheken of programmas dezelfde namen gebruiken. Het geeft als het ware een unieke identificatie aan elke class, interface, functie of constante in een programma. Namespace zorgt ook voor een betere structuur en organisatie van de code. Dit komt omdat het gemakkelijker wordt om te bepalen welke onderdelen van een programma bij elkaar horen en welke afhankelijk zijn van andere bibliotheken. Dit maakt het onderhoud en de ontwikkeling van software efficiënter.<br></p><pre>namespace MyApp\Models;

    class User {
       // class implementation
    }
    &
    use MyApp\Models\User;

    $user = new User();</pre><br>');
        echo ('<h5>Interface</h5><p>Een interface in PHP is een verzameling van methoden die een klasse moet implementeren als deze de interface wil gebruiken.</p><pre>
    interface AutoEigenschappen {
        public function getMerk(): string;
        public function getModel(): string;
        public function getBouwjaar(): int;
        public function getKleur(): string;
        public function setMerk(string $merk): void;
        public function setModel(string $model): void;
        public function setBouwjaar(int $bouwjaar): void;
        public function setKleur(string $kleur): void;
    }
    &
    class Auto implements AutoEigenschappen
    {
        private $merk;
        private $model;
        private $kleur;
        private $bouwjaar;
    }
    </pre><br>');
        echo ("<h5>Extend en constructor</h5><p>Het extend keyword wordt gebruikt om een subklasse te maken die de eigenschappen en methoden van een andere klasse, de superklasse, erft. Dit stelt de subklasse in staat om zowel de eigen methoden als die van de superklasse te gebruiken.<br>
    Een constructor is een speciale methode die wordt uitgevoerd wanneer een object van een klasse wordt gemaakt. Het kan worden gebruikt om eigenschappen van het object in te stellen en andere initialisaties uit te voeren.</p>");
        class car
        {
            public $name;

            public function __construct($name)
            {
                $this->name = $name;
            }

            public function defines()
            {
                echo "Ik ben een " . $this->name . "  (";
                var_dump($this);
                echo ")<br>";
            }
        }

        class brand extends car
        {
            public function typeofcar()
            {
                echo "Een Peugeot 2008! <br>";
            }
        }

        $voertuig = new car("auto");
        $voertuig->defines();

        $merk = new brand("Peugeot");
        $merk->defines();
        $merk->typeofcar();

        echo ("<br><h5>Magic methods</h5><p>Magische methoden (of magic methods) in PHP zijn voorgedefinieerde methoden.  Ze beginnen allemaal met de naam __ en eindigen met de naam van de methode, deze worden automatisch aangeroepen/uitgevoerd in bepaalde situaties, zoals wanneer een object wordt gemaakt of als een onbestaande methode wordt aangeroepen. Voorbeelden zijn __construct(bij een create), __destruct(bij een destroy), __toString(bij het behandelen van een object als een string), __get(read), __set(write), __isset(validity), etc. </p><br>");
        echo ("<h5>Polymorphisme</h5><p>Polymorfisme is een concept in de objectgeoriënteerde programmeertaal waarbij een object van verschillende klassen kan worden geïnstantieerd en op verschillende manieren kan worden gebruikt, afhankelijk van de context waarin het wordt gebruikt. Het betekent dat dezelfde methode verschillende implementaties heeft in verschillende klassen en dat de methode kan worden aangeroepen op objecten van die verschillende klassen zonder dat de methode opnieuw moet worden geschreven. Dit kan de efficiëntie van het code schrijven en onderhouden verbeteren, omdat het betekent dat bepaalde stukken code kunnen worden hergebruikt in verschillende contexten. </p><br>");
        echo ("<h5>Dependency injection container</h5><p>Een dependency injection container is een object dat wordt gebruikt om afhankelijkheden in een programma te beheren en te leveren aan objecten die deze nodig hebben. Het maakt het mogelijk om objecten te maken zonder dat ze afhankelijk zijn van andere objecten, en om afhankelijkheden te wijzigen zonder de code van het object te wijzigen. In plaats van handmatig elke afhankelijkheid te beheren, kan de container dit automatisch doen op basis van de configuratie die is opgegeven bij het opstarten van de applicatie. Dit maakt het eenvoudiger om de applicatie te schalen, te testen en te onderhouden, omdat elke component duidelijk is gedefinieerd en gemakkelijk kan worden vervangen of geüpgraded zonder dat dit gevolgen heeft voor de rest van de applicatie. </p><br>");
        echo ('<h5>Generator</h5><p>Een generator in PHP is een speciaal type functie waarmee je gegevens kunt genereren en terugsturen naar een loop zonder de geheugenbelasting van het opslaan van de hele lijst met gegevens. In plaats daarvan wordt de generator voortdurend nieuwe gegevens gegenereerd en teruggestuurd totdat het einde is bereikt. Voorbeeld 1. traditionele for each loop vs 2. generator</p><pre>
        1. for each
        $array = range(1, 100000);

        function processArray($arr) {
            foreach ($arr as $element) {
            }
        }
        
        processArray($array);

        Memory usage before: 4 MB
        Memory usage after: 34 MB

        2. generator
        function processArray($arr) {
            foreach ($arr as $element) {
                yield $element;
            }
        }
        
        $array = range(1, 100000);
        
        foreach (processArray($array) as $element) {
        }

        Memory usage before: 4 MB
        Memory usage after: 4 MB
        </pre>
        <p>Het verschil komt doordat de generator slechts één element van de array in het werkgeheugen laadt en bewerkt voordat het doorgegeven wordt aan de loop. De for each loop laadt alle data in en gaat ze een voor een langs tot ze klaar is.</p>');
        echo ("<br><h5>Inheritance en Composition</h5><p>Inheritance is een manier waarbij een klasse (de 'child class') de eigenschappen en methoden van een andere klasse (de 'parent class') erft. Composition is een manier waarbij een klasse bestaat uit verschillende objecten van andere klassen, die samenwerken om de functionaliteit van de klasse te bieden. Inheritance gaat bijvoorbeeld door extends, superklasse met overerving naar child - handig bij veel hebruikbare code. Composition kan met onafhankelijke classen die elkaar aanroepen, waar geen duidelijke hierarchie is tussen de klassen. </p><br>");
        echo ("<h5>Traits</h5><p>Traits zijn een manier om herbruikbare stukjes code te maken die kunnen worden toegepast op meerdere klassen zonder de noodzaak van herhaling van dezelfde code. Traits zijn dus meer gericht op hergebruik van code dan op de structurering van de relaties tussen klassen zoals composition of inheritance. Een trait is eigenlijk een herbruikbare set van methoden die je kunt toevoegen aan een klasse. Het belangrijkste verschil tussen een trait en een klasse is dat een trait zelf geen instantie kan hebben en dus geen object kan worden gemaakt. In plaats daarvan moet een trait worden gebruikt in combinatie met een klasse die de functionaliteit van de trait implementeert.</p><br>");
        echo ("<h5></h5><p></p><br>");
        ?>
        <br>
    </section>
</main>
<?php require_once '../default/footer.html'; ?>