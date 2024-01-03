<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Animaux
    { //Déclaration de la classe Vehicule.
        private $nomAnimal=''; //Déclaration d'un attribut privée $immatriculation entre '' pour qu'il sache que c'est un string

        private $ageAnimal='';   //Declaration d'un attribut marque

        public function __construct($animalName, $animalAge){
            $this-> nomAnimal = $animalName;
            $this-> ageAnimal = $animalAge; 
        }

        public function getNomAnimal()
        { //Déclaration d'une méthode publique getImmatriculation
            // qui retourne la valeur de la propriété $immatriculation
            return $this->nomAnimal; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function getAgeAnimal()
        { //Déclaration d'une méthode publique getImmatriculation
            // qui retourne la valeur de la propriété $immatriculation
            return $this->ageAnimal; //Retourne la valeur actuelle de la propriété $balance.
        }
    }
    class Chien extends Animaux {
        private $chienRace = '';
        public function __construct($animalName, $animalAge, $raceChien) {
            // Call the parent class constructor
            parent::__construct($animalName, $animalAge);
            
            // Initialize the additional property for Chien class
            $this->chienRace = $raceChien;
        }
    
        public function getChienRace() {
            return $this->chienRace;
        }
    
        public function setChienRace($newChienRace) {
            $this->chienRace = $newChienRace;
        }
    }
    class Chat extends Animaux {
        private $chatCouleur = '';
        public function __construct($animalName, $animalAge, $couleurChat) {
            // Call the parent class constructor
            parent::__construct($animalName, $animalAge);
            
            // Initialize the additional property for Chien class
            $this->chatCouleur = $couleurChat;
        }
    
        public function getChatCouleur() {
            return $this->chatCouleur;
        }
    }   
// Passage des valeurs aux propriétés
   $pets = new Animaux("Bobby",3);
   $dogs = new Chien("Toffy",3,"doberman");
   $cats = new Chat("Whiskers", 2, "blanc");

// Display information
echo "Nom de l'animal: " . $pets->getNomAnimal() . ", Age: " . $pets->getAgeAnimal() . "<br>";
echo "Race du chien: " . $dogs->getChienRace() . "<br>";
echo "Couleur du chat: " . $cats->getChatCouleur() . "<br>";
   ?>
</body>

</html>