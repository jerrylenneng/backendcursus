<?php

/*
$persoon1 = new Persoon("Jerry", "Bruin", 30);
echo $persoon1->$naam;
echo $persoon1->$oogkleur;
$persoon1->setNaam("John");
echo $persoon1->$naam;


class Persoon {
	//eigenschappen
	public $naam;
	public $oogkleur;
	public $leeftijd;
	
	//constructoren
	public function __construct($naam, $oogkleur, $leeftijd) {
		$this->naam = $naam;
		$this->oogkleur = $oogkleur;
		$this->leeftijd = $leeftijd;
	}
	
	//methodes
	public function setNaam($naam) {
		$this->naam = $naam;
	}


	











echo Person::$drinkingAge;

echo "<br><br>";

Person::setDrinkingAge(18);
echo Person::$drinkingAge;

$person1 = new Person("Jerry", "Bruin", 30);
echo $person1->getDA();



*/





/*

	$persoon1 = new Persoon("Jerry", "Bruin", 30);
	echo $persoon1->naam;
	echo $persoon1->oogkleur;
	echo $persoon1->leeftijd;
	
	$persoon1->setNaam("John");
	echo $persoon1->naam;


$persoon1 = new Persoon("Jerry", "Bruin", 30);
echo $persoon1->getNaam();

echo "<br><br>";

$testObject = new DBClass();

$testObject->DBclass();

$query = "INSERT INTO users (id, name) VALUES (1, 'Peter Parker');";
*/


#$link->query($query);
#$result=mysqli_query($link,$query);
#$row = mysqli_fetch_row($result);
#return $row[0];

/*
include "inc/model.php";
require_once( 'inc/DBClass.php' );
#include "classes/dbh.class.php";
#include "classes/test.class.php";
#include "inc/.php";



$huisdier01 = new Persoon();

echo $huisdier01->voornaam;

$naam = "Jerry";
$oogkleur = "bruin";
$leeftijd = 30;

$persoon1 = new Persoon();
$persoon1->setNaam("Jerry");
echo $persoon1->naam;

$persoon2 = new Persoon();
$persoon2->setNaam("Dave");
echo $persoon2->naam;

*/

<?php

/*

class Auto {
    
    public $sKleur = "";
    
    public function rijden( ){
        return "De auto, die " . $this->getKleur( ) . " is, rijdt!";
    }

    public function setKleur( $sKleur ){
        $this->sKleur = $sKleur;
        return;
    }
    
    public function getKleur( ){
        return $this->sKleur;
    }
    
} 

$oAuto = new Auto;
$oAuto->setKleur( "groen" );
echo $oAuto->rijden( );

*/

	

/*
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age}";
	}
}
/* Tom is inherited from Person 
class Tom extends Person {
	# __construct() is inherited
	# introduce() is inherited
	public function sayHello() {
		echo "Hello, World <br>";
	}
}
$tom = new Tom('Tom', 29);
$tom -> sayHello();
$tom -> introduce();

*/

?>

<?php


/*



class Auto {
    private $type = 'hatchback';
    private $kleur = 'geen';
    // In dit geval mogen we alleen de kleur van de auto aanpassen.
    public function setKleur($kleur) {
        $this->kleur = $kleur;
    }
    public function getKleur() {
        return $this->kleur;
    }
    public function getType() {
        return $this->type;
    }
    public function tonen() {
        echo 'Deze ' . $this->getType() . ' heeft de kleur ' . $this->getKleur();
    }
}
$auto = new Auto;
$auto->setKleur('groen');
$auto->tonen();

echo "<br><br>";



class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();




echo "<br>";
?>

<h5> Oefening 3 </h5>

<?
class Dier2 {
	public $naam;
	public $soort;
	
	public function __construct($naam, $soort) {
		$this->naam = $naam;
		$this->soort = $soort;
	}
	
	public function dierTonen() {
		echo "De naam van het dier is {$this->naam} en de soort is {$this->soort}.";
	}
}

class Kat extends Dier2 {
	public function katTonen() {
		echo "Wat ben ik?" ;
	}
}

$langharig = new Kat("Henk", "Noorse Boskat");
$langharig->katTonen();
echo "<br>";
$langharig->dierTonen();










class Tafel {
    public $aantal_poten = 4;
    public $vorm = 'rond';
    public $kleur = 'blauw';
    public function tonen() {
        echo "Dit is een {$this->kleur}e {$this->vorm}e tafel met $this->aantal_poten poten.";
    }
}
$tafel = new Tafel;
$tafel->tonen(); // Dit is een blauwe ronde tafel met 4 poten.

echo "<br><br>";


	
$dier = new Dier('geel', '2');
	
$dier->tonen();

?>

<h5> Oefening 4 </h5>

<?php
class Authentication2 { 
    private $username;    
	private $password;    

	public function setCredentials($username, $password) {   
		$this->username = $username;     
		$this->password = $password;     
	}     
	
	public function getUsername() {   
		return $this->username;
	}
}







*/