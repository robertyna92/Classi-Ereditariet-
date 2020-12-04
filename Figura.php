<?php
abstract class Figura {
	public function __construct(){}
	
	abstract public function getArea();
	abstract public function getPerimetro();
}

/* ----------------- Classe Triangolo -------------------------- */

class Triangolo extends Figura {

	public function getArea(){}
	public function getPerimetro(){}

	public static function Scaleno($lato_uno, $lato_due,$lato_tre){
	
		$perimetro = ($lato_uno + $lato_due + $lato_tre);
		$semiPerimetro = ($lato_uno + $lato_due + $lato_tre)/2;
		$area = sqrt($semiPerimetro * ($semiPerimetro - $lato_uno) * ($semiPerimetro - $lato_due) * ($semiPerimetro - $lato_tre));

		echo "I lati del trinagolo Scaleno sono: " . $lato_uno . ", " . $lato_due . ", " . $lato_tre ."\n" ; 
		echo "Il perimetro del triangolo Scaleno è: " . $perimetro . "\n";
		echo "L'area del triangolo Scaleno è: " . $area . "\n";	
	}

	public static function Isoscele($lato_uno,$lato_due){
		$perimetro = ($lato_uno + $lato_due+ $lato_due);
		$semiPerimetro = ($lato_uno + $lato_due+ $lato_due)/2;
		$area = sqrt($semiPerimetro * ($semiPerimetro - $lato_uno) * ($semiPerimetro - $lato_due) * ($semiPerimetro - $lato_due));

		echo " \n I lati del trinagolo Isoscele sono: " . $lato_uno . ", " . $lato_uno . ", " . $lato_due  ."\n" ; 
		echo "Il perimetro del triangolo Isoscelòe è: " . $perimetro . "\n";
		echo "L'area del triangolo Isoscele è: " . $area . "\n";
	}

	public static function Equilatero($lato_uno){

		$perimetro = ($lato_uno*3);
		$semiPerimetro=($lato_uno*3)/2;
		$area = sqrt($semiPerimetro * ($semiPerimetro - $lato_uno) * ($semiPerimetro - $lato_uno) * ($semiPerimetro - $lato_uno));

		echo " \n I lati del trinagolo Equilatero sono: " . $lato_uno . ", " . $lato_uno . ", " . $lato_uno  ."\n" ; 
		echo "Il perimetro del triangolo Equilatero è: " . $perimetro . "\n";
		echo "L'area del triangolo Equilatero è: " . $area . "\n";

	}
}
$scaleno = Triangolo:: Scaleno(6,5,2.2);
$isoscele = Triangolo:: Isoscele(10,13) ."\n";
$equilatero = Triangolo:: Equilatero(8) ."\n";

/* ---------------- Classe Quadrilatero ----------------------- */

class Quadrilatero extends Figura{
	public function getArea(){}
	public function getPerimetro(){}
}

/* ----------------Classe Quadrato ---------------------- */

class Quadrato extends Quadrilatero {
	public $lato;

	public function __construct($lato)
	{
		$this->lato= $lato;
	}

	public function getArea(){
		return $this->lato * $this->lato;
	}

	public function getPerimetro(){
		return $this->lato*4;

	}
}

$quadrato = new Quadrato(5);
echo "\n Il perimetro del quadrato è:" . $quadrato->getPerimetro();
echo "\n L'area del quadrato è: " . $quadrato->getArea() . "\n";


/* ------------------------ Classe Rombo --------------------------------- */

class Rombo extends Quadrilatero {
	public $diagonale_maggiore;
	public $diagonale_minore;
	public $lato;


	public function __construct($diagonale_maggiore,$diagonale_minore,$lato)
	{
		$this->diagonale_maggiore= $diagonale_maggiore;
		$this->diagonale_minore=$diagonale_minore;
		$this->lato=$lato;
	}

	public function getArea(){
		return $this->diagonale_maggiore * $this->diagonale_minore /2;
	}

	public function getPerimetro(){
		return $this->lato*4;
	}
}

$rombo = new Rombo(12,20,10);
echo "\n L'area del Rombo è: " . $rombo->getArea();
echo "\n Il perimetro del rombo è:" . $rombo->getPerimetro() . "\n";


/* --------------------------- Classe Rettangolo-------------------------- */

class Rettangolo extends Quadrilatero{
	public $base;
	public $altezza;

	public function __construct($base,$altezza)
	{
		$this->base= $base;
		$this->altezza=$altezza;
	}

	public function getArea(){
		return $this->base * $this->altezza;
	}

	public function getPerimetro(){
		return $this->base*2 + $this->altezza*2;
	}
}

$rettangolo = new Rettangolo(12,20);
echo "\n L'area del rettangolo è:" . $rettangolo->getArea();
echo "\n Il perimetro del rettangolo è:" . $rettangolo->getPerimetro();


?>

