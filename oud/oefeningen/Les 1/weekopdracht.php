
<!DOCTYPE html>
<html>
<style>



</style>
<body>

<h1> Hoofdopdracht Les 1 </h1>

<?php

#hoofdzin:
$verhaal  = "Zij is een lelijke prinses. Zij is ook nog eens een hele domme en dikke prinses.";



function aantalWoorden($string) {
	return str_word_count("$string");
}

#arrays met aardige en grove woorden
$groveWoorden = ["lelijke", "domme", "dikke"];
$aardigeWoorden = ["mooie", "slimme", "sexy"];


$nieuwVerhaal = str_replace($groveWoorden, $aardigeWoorden, $verhaal, $aantalVervangenWoorden);

echo $verhaal . "<br>";
echo $nieuwVerhaal ;

echo "<br><br>";

echo strtolower("$verhaal");


echo "<br><br>";
$rest = substr($nieuwVerhaal, 0, -20);
echo "$rest..." . "<br>";

echo "<br><br>";
echo "Zinnetje heeft zoveel woorden:";
$aantalWoorden = str_word_count("$verhaal");
echo $aantalWoorden . "<br>";
echo "Aantal niet-aardige woorden vervangen voor aardige woorden: $aantalVervangenWoorden";

echo "<br>";

echo "Er zitten " . preg_match_all("/[A-Z]/", $verhaal) . " hoofdletters in de zin die zijn vervangen voor kleine letters" ;

echo "<br>";

$percentageVervangenWoorden = $aantalWoorden / $aantalVervangenWoorden;
echo 100 / $percentageVervangenWoorden . " procent van de woorden is vervangen"


?>


</body>

</html>
