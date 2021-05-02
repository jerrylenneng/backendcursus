<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../index.php">Hoofdmenu</a>

<h4> Opdracht Les 1  </h4>

<?php

#willekeurige tekst:
$verhaal  = "zij is een lelijke prinses. zij is ook nog eens een hele domme en dikke prinses.";

$array = explode ( ".", $verhaal);

echo $verhaal . "<br>";
foreach ($array as $value) {
	echo ucfirst($value) . "<br>";
	
}



// Ik snap niet waarom hij maar 1 waarde uppercase maakt en de anderen niet. 

#arrays met aardige en grove woorden
$groveWoorden = ["lelijke ", "domme", "dikke"];
$aardigeWoorden = ["mooie", "slimme", "slanke"];

$nieuwVerhaal = str_replace($groveWoorden, $aardigeWoorden, $verhaal, $aantalVervangenWoorden);

echo $nieuwVerhaal ;

// echo strtolower("$verhaal");

echo "<br><br>";
$rest = substr($nieuwVerhaal, 0, -20);
echo "$rest..." . "<br>";


echo "<br><br>";

function aantalWoorden($string) {
	return str_word_count("$string");
}


$groveWoorden = array(
	'lelijke'	=> '#ff0000',
	'domme'		=> '#ff0000',
	'dikke'		=> '#ff0000'
);

$aardigeWoorden = array(
	'mooie'			=> '#00ff00',
	'slimme'		=> '#00ff00',
	'slanke'		=> '#00ff00'
);
?>


<?php foreach ($groveWoorden as $something => $colour) : ?>
    <p style="color:<?php echo $colour ?>"><?php echo $something ?></p>
<?php endforeach ?>
<?php foreach ($aardigeWoorden as $something => $colour) : ?>
    <p style="color:<?php echo $colour ?>"><?php echo $something ?></p>
<?php endforeach ?>


<?php

#arrays met aardige en grove woorden
$groveWoorden = ["lelijke ", "domme", "dikke"];
$aardigeWoorden = ["mooie", "slimme", "slanke"];






echo "<br><br>";
echo "Zinnetje heeft zoveel woorden:";
$aantalWoorden = str_word_count("$verhaal");
echo $aantalWoorden . "<br>";
echo "Aantal niet-aardige woorden vervangen voor aardige woorden: $aantalVervangenWoorden";

echo "<br>";

echo "Er zitten " . preg_match_all("/[A-Z]/", $verhaal) . " hoofdletters in de zin die zijn vervangen voor kleine letters" ;

echo "<br>";

$percentageVervangenWoorden = $aantalWoorden / $aantalVervangenWoorden;
echo 100 / $percentageVervangenWoorden . " procent van de woorden is vervangen";







?>








