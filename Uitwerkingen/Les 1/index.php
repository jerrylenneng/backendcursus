<!DOCTYPE html>
<html>

<body>





<h1>Les 1 - Uitwerkingen</h1>

<h2>Oefeningen - HTML</h2>


<?php 

#les 1.1 Oefening 2
echo 'Hello World' ."<br>" ; 

#les 1.2 Oefening 1
$variabele = "Hello World";
echo "$variabele" ."<br>" ;  

#les 1.2 Oefening 2
$variabele = "Hello World" . "<br>";
echo $variabele ; 

#les 1.2 Oefening 3

$aanhef = "Dhr.";
$voornaam = "Peter";
$achternaam = "Pan";
$straat = " Never ending road";
$postcode= "1234AB";
$woonplaats = "eiland";
$land= " Neverland ";

echo $aanhef ."<br>" ; 
echo $voornaam ."<br>" ; 
echo $achternaam ."<br>" ; 
echo $straat."<br>" ; 
echo $postcode ."<br>" ; 
echo $woonplaats ."<br>" ; 
echo $land ."<br>" ; 

echo "<br><br>";

#les 1.3 - oefening 1


 $lengte = 1.55;
 $gewicht = 53;
 $bmi = $gewicht / ( $lengte * $lengte );
 
echo "Je BMI is: $bmi" . "<br><br>";
if ($bmi <= "18.5") {
  echo "Je hebt ondergewicht!";
} elseif ($bmi <= "25") {
  echo "Je hebt een gezond gewicht!";
} elseif ($bmi <= "30") {
  echo "Je hebt een overgewicht!";
} elseif ($bmi >= "30") {
  echo "Je hebt een obesitas!";
}
 
echo "<br><br>";



 #les 1.4 - oefening 1
 
 $namen = array("Piet", "Kees", "Jan", "Annabel"); 
 echo $namen[0],$namen[3];
 
 $namen[2] = "Karel";

echo "<br><br>";

foreach($namen as $value){
    echo $value . "<br>";
}


echo "<br><br>";

#les 1.4 oefening 3

$producten = array("Kaas"=>"2", "Melk"=>"4", "Eieren"=>"16", "Boter"=>"256");



echo "We hebben " . $producten['Kaas'] . " stukken Kaas." . "<br>";
echo "We hebben " . $producten['Melk'] . " pakken Melk." . "<br>";
echo "We hebben " . $producten['Eieren'] . " Eieren." . "<br>";
echo "We hebben " . $producten['Boter'] . " stukken Boter." . "<br>";

echo "<br><br>";

#les 1.4 oefening 4

$voorraad = array (
	array (1,"Kaas",2,10),
	array (2,"Melk",4,8),
	array (3,"Eieren",16,14),
	array (4,"Boter",256,44),
);


echo "Voorraad, Kaas: " . $voorraad[0][2]; 
echo "<br><br>";
echo "Verkochte eieren: " . $voorraad[2][3]; 


#les 1.4 oefening 5

echo "<br><br>";

function sayHelloWorld() {
  return "Hello World";
}
 
echo sayHelloWorld();

echo "<br><br>";
 
 #les 1.4 oefening 6
 
function lengteVanString($string) {
	return strlen("$string");
}

echo lengteVanString("erisgeenvoorraadmeer");

echo "<br><br>";

 #les 1.4 oefening 7 (nog niet gedaan) 

function woordenVervangen($string) {
	return strlen("$string");
}

$langetekst="Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galão aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra café au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma.";
$woorden = explode(" ", $langetekst);


foreach($woorden as $value){
	$new_value = str_replace(str_split(',.'), ' ', $value);
	$new_value2 = lcfirst($new_value);
    echo $new_value2 . "<br>";

}






 
 ?>



</body>
</html> 