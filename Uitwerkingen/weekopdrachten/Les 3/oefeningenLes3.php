
<h1> Oefeningen en eindopdrachten </h1>
<h3> Terug naar hoofdmenu </h3> <a href="../../index.php">Hoofdmenu</a>



<h4> Oefeningen Les 3 </h4>

<h5> Oefening 1 </h5>

<?php 

class Dier {
	private $aantal_poten = 4;
	private $diersoort = "huisdier";
	private $kleur = "roze";
	private $ogen = "2" ;
	private $diet = "vegetarier";

	public function __construct($diersoort, $kleur, $ogen, $aantal_poten, $diet) {
		$this->diersoort = $diersoort;
		$this->kleur = $kleur;
		$this->ogen = $ogen;
		$this->aantal_poten = $aantal_poten;
		$this->diet = $diet;

	}

	public function tonen() {
		echo "Dit is een {$this->diersoort} met {$this->kleur} haar, {$this->ogen} aantal ogen, {$this->aantal_poten} aantal poten en een {$this->diet} dieet";
	}

}



$dier = new Dier('zoogdier' , 'rood' , 'twee' , '4' , 'carnivorisch');
$dier->tonen();
echo "<br>";
$dier = new Dier('roofdier' , 'rood' , 'vier' , '2' , 'vegetarisch');
$dier->tonen();
echo "<br>";
$dier = new Dier('vlamdier' , 'rood' , 'zes' , '0' , 'omnitarisch');
$dier->tonen();
echo "<br>";
$dier = new Dier('waterbeest' , 'rood' , 'acht' , '6' , 'flexitarisch');
$dier->tonen();
echo "<br>";
$dier = new Dier('vliegbeest' , 'rood' , 'tien' , '8' , 'carnivorisch');
$dier->tonen();

echo "<br>";

?>

<h5> Oefening 2 & 3 </h5>

<?php 


class Dier2 {
	public $sPoten = "4";
	public $sGrootte = "";
	public $sKleur = "";
	
	public function dierMethode(){
		return "Het dier " . $this->getSoort( ) . ", die " . $this->getKleur( ) . " van kleur is, " . $this->getActie( ) . "!";
	}
	
    public function setSoort( $sSoort ){
        $this->sSoort = $sSoort;
        return;
    }
    public function getSoort( ){
        return $this->sSoort;
    } 
	
	
    public function setKleur( $sKleur ){
        $this->sKleur = $sKleur;
        return;
    }
    public function getKleur( ){
        return $this->sKleur;
    } 
    public function setActie( $sActie ){
        $this->sActie = $sActie;
        return;
    }
    public function getActie( ){
        return $this->sActie;
    } 
	
	public function randomActie( ){
		return "test";
	}
	
	
}

$oDier = new Dier2;
$oDier->setSoort( "de vogel" );
$oDier->setKleur( "wit" );
$oDier->setActie( "vliegt" );
echo $oDier->dierMethode( );
echo "<br>";
$oDier->setSoort( "de kat" );
$oDier->setKleur( "zwart" );
$oDier->setActie( "springt" );
echo $oDier->dierMethode( );
echo "<br>";
$oDier->setSoort( "de vis" );
$oDier->setKleur( "blauw" );
$oDier->setActie( "zwemt" );
echo $oDier->dierMethode( );







?>


<h5> Oefening 4, deeloefeningen 1 t/m 5 </h5>

<a href="index.php">Opdrachten</a>


<br><br><br><br><br>


