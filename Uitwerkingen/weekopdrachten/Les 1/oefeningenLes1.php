<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../../index.php">Hoofdmenu</a>

<h4> Oefeningen Les 1.1 </h4>

<a href="index.php">index.php</a>

<h4> Oefeningen Les 1.2 </h4>

<?php 

//oefening 1
$variabele = "Hallo Wereld!";
echo $variabele . "<br><br>";

//oefening 2
// 1. mist puntkomma
// 2. mag niet eindigen met een getal
// 3. mag niet beginnen met symbool
// 4. mag niet beginnen met een nummer

//oefening 3

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

?>

<h4> Oefeningen Les 1.3 </h4>

<?php

//oefening 1

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

?>

<h4> Oefeningen Les 1.4 </h4>

<?php 

// oefening 1

$namen = array("Piet", "Kees", "Jan", "Annabel"); 
echo $namen[0],$namen[3] . "<br><br>";

// oefening 2

$namen[2] = "Karel";

foreach($namen as $value){
    echo $value . "<br>";
}

echo "<br>";

// oefening 3

$producten = array("Kaas"=>"2", "Melk"=>"4", "Eieren"=>"16", "Boter"=>"256");

echo "We hebben " . $producten['Kaas'] . " stukken Kaas." . "<br>";
echo "We hebben " . $producten['Melk'] . " pakken Melk." . "<br>";
echo "We hebben " . $producten['Eieren'] . " Eieren." . "<br>";
echo "We hebben " . $producten['Boter'] . " stukken Boter." . "<br>";

echo "<br>";

// oefening 4

$voorraad = array (
	array (1,"Kaas",2,10),
	array (2,"Melk",4,8),
	array (3,"Eieren",16,14),
	array (4,"Boter",256,44),
);

echo "Voorraad, Kaas: " . $voorraad[0][2]; 
echo "<br>";
echo "Verkochte eieren: " . $voorraad[2][3]; 
echo "<br><br>";

// oefening 5

function lengteVanString($variabeleFunctie) {
	return strlen("$variabeleFunctie");
}

$string = "cabaretvoorstelling";
echo "$string heeft " . lengteVanString($string) . " letters" ;

echo "<br><br>";
 
// oefening 6

$zin = "Ik heb geen zin om te koken";
echo $zin;
echo "<br>";


function woordenVervangen($variabeleFunctie) {
	return str_replace('koken', 'eten', $variabeleFunctie);
}

echo woordenVervangen($zin);
echo "<br><br>";

// oefening 7

$langetekst="Cultivar a, trifecta instant skinny, espresso, con panna, crema spoon mocha, in coffee, sugar, french press medium latte trifecta instant to go. Breve skinny cinnamon grounds grinder, cortado, dark cup, crema percolator turkish, decaffeinated aromatic aftertaste redeye iced chicory. Single origin, steamed at seasonal, aged iced galão aftertaste beans sweet mug, extra filter, in, cappuccino, white con panna, frappuccino aftertaste frappuccino qui chicory. Grinder medium et so, and java, trifecta, at, extra café au lait trifecta, organic blue mountain coffee dark single origin. Viennese, aroma filter saucer cinnamon and, white, to go, crema coffee so lungo grounds, cultivar percolator french press acerbic americano siphon. Steamed eu est blue mountain, mug decaffeinated cortado strong, so as mug espresso acerbic sugar french press aroma.";
$langetekstAangepast= str_replace( ',' , '' , $langetekst);
$langetekstAangepast= str_replace( '.' , '' , $langetekstAangepast);

echo $langetekst;
echo "<br><br>";
echo $langetekstAangepast;
echo "<br><br>";

$array = explode ( " ", $langetekstAangepast);
print_r($array);

echo "<br><br>";

$woorden = explode(" ", $langetekst);

foreach($woorden as $value){
	$new_value = str_replace(str_split(',.'), ' ', $value);
	$new_value2 = lcfirst($new_value);
    echo $new_value2 . "<br>";
}

?>

<h4> Oefeningen Les 1.5 </h4>

<?php 
// oefening 1

$students =
  array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
); 


// Voornaam, achternaam, score. 
?>



<h5> Werkt nog niet </h5>

<?php

array_push($students[0], '"student_id" => "001"');


?>


<?php

if (count($students) > 0): ?>
<table>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($students))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($students as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>





