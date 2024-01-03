<?php
//Classe forme absttraite elle va hériter aux autres classes la méthode calcule Aire
abstract class Shape {
    abstract public function calculerAire();
}

//Classe concrète pour le cercle
class Circle extends Shape {
    private $rayon;

    public function __construct($monrayon){

        $this->rayon = $monrayon;
        
    }

    public function calculerAire()
    {
        return pi() * pow($this->rayon, 2);
        
    }
}
//Classe contrète pour calculer l'aire d'un rectangle

class Rectangle extends Shape {
    private $longueur;
    private $largeur;

    //On initialise les variables de mon rectangle
    public function __construct($long, $larg){
        $this -> longueur = $long;
        $this -> largeur = $larg;
    }
//function pout calculer l'aire é
    public function calculerAire()
    {
        return $this->longueur * $this-> largeur;
    }
}
$cercle = new Circle(12.5);
echo "L'air du circle est:  " . number_format($cercle-> calculerAire(),2) . "<br>"; //On appel la variable cercle qu'on vient de créer
//et in l'assigne la valeur de calculer aire et c'est cette classe que fait le calcule de l'air
$rectangulo = new Rectangle(11.5888888,24.2222222);
echo "L'air du rectangle est:  " . number_format($rectangulo-> calculerAire(),2) . "<br>";