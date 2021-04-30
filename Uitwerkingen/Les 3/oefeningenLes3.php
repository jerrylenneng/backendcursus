
<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../index.php">Hoofdmenu</a>



<h4> Oefeningen Les 3 </h4>

<?php 

class Dier {
	private $aantal_poten = 4;
	private $diersoort = "huisdier";
	private $kleur = "roze";
	private $ogen = "2" ;
	private $diet = "vegetarier";


	public function __construct($diersoort, $kleur) {
		$this->diersoort = $diersoort;
		$this->kleur = $kleur;
	}



	public function tonen() {
		echo "Dit is een {$this->diersoort} dier met {$this->kleur} haar.";
	}

}

$dier = new Dier('pescetarian' , 'paars');
$dier->tonen();

echo "<br><br>";

class Authentication {
	
	private $username;
	private $password;
	
	public function setCredentials($username, $password) {
		$this->username = $username;
		$this->password = $password;
	}
	
}

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




echo "<br><br>";


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








?>

<h4> Weekopdracht </h4><a href="eindopdrachtLes3.php">Weekopdracht</a>