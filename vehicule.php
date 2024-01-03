<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Vehicule
    { //Déclaration de la classe Vehicule.
        private $immatriculation=''; //Déclaration d'un attribut privée $immatriculation entre '' pour qu'il sache que c'est un string

        private $marque='';   //Declaration d'un attribut marque

        private $annee='';  //Declaration d'un attribut année

        private $couleur='';

        public function __construct($immatriculacion, $marca, $annio, $color){
            $this-> immatriculation = $immatriculacion;
            $this-> marque = $marca;
            $this-> annee = $annio;
            $this-> couleur = $color;
          
        }

        public function getImmatriculation()
        { //Déclaration d'une méthode publique getImmatriculation
            // qui retourne la valeur de la propriété $immatriculation
            return $this->immatriculation; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function setImmatriculation($newImmatriculation)
        { // Déclaration d'une méthode publique setBalance
            // qui permet de mettre à jour la valeur de la propriété $balance.
            $this->immatriculation  = $newImmatriculation; // Met à jour la valeur de la propriété $balance avec la nouvelle valeur passée en paramètre.
        }

        public function getMarque()
        { //Déclaration d'une méthode publique getBalance 
            // qui retourne la valeur de la propriété $balance.
            return $this->marque; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function setMarque($newMarque)
        { // Déclaration d'une méthode publique setBalance
            // qui permet de mettre à jour la valeur de la propriété $balance.
            $this->marque  = $newMarque; // Met à jour la valeur de la propriété $balance avec la nouvelle valeur passée en paramètre.
        }

        public function getAnnee()
        { //Déclaration d'une méthode publique getBalance 
            // qui retourne la valeur de la propriété $balance.
            return $this->annee; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function setAnnee($newAnnee)
        { // Déclaration d'une méthode publique setBalance
            // qui permet de mettre à jour la valeur de la propriété $balance.
            $this->annee  = $newAnnee; // Met à jour la valeur de la propriété $balance avec la nouvelle valeur passée en paramètre.
        }
        public function getCouleur()
        { //Déclaration d'une méthode publique getBalance 
            // qui retourne la valeur de la propriété $balance.
            return $this->couleur; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function setCouleur($newCouleur)
        { // Déclaration d'une méthode publique setCouleur
            // qui permet de mettre à jour la valeur de la propriété $couleur.
            $this->couleur  = $newCouleur; // Met à jour la valeur de la propriété $couleur avec la nouvelle valeur passée en paramètre.
        }

        public function display(){
            echo "Immatriculation: " . $this->immatriculation . "<br>";
            echo "Marque: " .$this->marque . "<br>";
            echo "Année: " . $this->annee . "<br>";
            echo "Couleur: " . $this->couleur . "<br>";
        }
    }

    // Exemple d'utilisation
    // Passage des valeurs aux propriétés
   $auto = new Vehicule("AByyyyyyyyyyyCD-1255-ggff","Vochitooo", 1981, "blue");
   $auto->display();
   
   ?>

</body>

</html>