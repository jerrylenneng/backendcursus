- - - - - - -      Eigen oefeningen      - - - - - - - <br><br>

<?php

/*
class databaseConnection {
	 
	 //eigenschappen en methodes hieronder
	 public $info = "This is some public info";
	 
	 
	 
	 
	 
}

$createConnection = new databaseConnection;
var_dump($createConnection);

echo "<br><br>";



class Persoon {
	 
	 //eigenschappen en methodes hieronder
	 public $voornaam = "Jerry";
	 private $achternaam = "Tandi Rau";
	 private $leeftijd = "30";
}

class Huisdier extends Persoon {
	public function eigenaar() {
		$a = $this->voornaam;
		return $a;
	}
}
*/

class Person {
	
	//eigenschappen
	private $naam;
	private $oogkleur;
	private $leeftijd;
	
	public static $drinkingAge = 21;
	
	public function __construct($naam, $oogkleur, $leeftijd) {
		$this->naam = $naam;
		$this->oogkleur = $oogkleur;
		$this->leeftijd = $leeftijd;
	}
	
	//methodes
	public function setNaam($naam) {
		$this->naam = $naam;
	}
	
	public function getDA() {
		return self::$drinkingAge;
	}
	
	
	
	public static function setDrinkingAge($newDA) {
		self::$drinkingAge = $newDA;
	}

}

/*

class MysqlDatabase  {
	
	//eigenschappen
	private $naam;
	private $oogkleur;
	private $leeftijd;
	
	public function __construct($naam, $oogkleur, $leeftijd) {
		$this->naam = $naam;
		$this->oogkleur = $oogkleur;
		$this->leeftijd = $leeftijd;
	}
	
	//methodes
	public function setConnectie($connectie) {
		$this->connectie = $connectie;
	}
	public function getConnectie() {
		return $this->connectie;
	}
	public function setDeconnectie($deconnectie) {
		$this->deconnectie = $deconnectie;
	}
	public function getDeconnectie() {
		return $this->deconnectie;
	}
	public function setRecordsOphalen($recordsOphalen) {
		$this->recordsOphalen = $recordsOphalen;
	}
	public function getRecordsOphalen() {
		return $this->recordsOphalen;
	}
	
	

	
}


class Database {
    private $connection = null;
    public function __construct($host, $username, $password, $databaseName)
    {
    }
    public function getAll($tableName) {
        return array('Piet', 'Kees', 'Annabel');
    }
}

class User
{
    private $database = null;
    // De User klasse moet dus beschikken over de database connectiegegevens.
    public function __construct() {
        $this->database = new Database('host', 'user', 'pass', 'dbname');
    }
    public function getUsers() {
        return $this->database->getAll('users');
    }
}

$user = new User();
#print_r($user->getUsers());

*/





?>