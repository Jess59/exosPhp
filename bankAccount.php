<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class BankAccount
    { //Déclaration de la classe BankAccount.
        private $balance; //Déclaration d'un attribut privée $balance dans la classe BankAccount.
    
        public function __construct($balance)
        { // Déclaration d'un constructeur pour la classe BankAccount. 
            //Le constructeur est appelé lorsqu'une nouvelle instance de la classe est créée.
            $this->balance = $balance; // Initialise la propriété $balance de l'objet 
            //avec la valeur passée en paramètre lors de la création de l'objet.
        }

        public function getBalance()
        { //Déclaration d'une méthode publique getBalance 
            // qui retourne la valeur de la propriété $balance.
            return $this->balance; //Retourne la valeur actuelle de la propriété $balance.
        }

        public function setBalance($newBalance)
        { // Déclaration d'une méthode publique setBalance
            // qui permet de mettre à jour la valeur de la propriété $balance.
            $this->balance += $newBalance; // Met à jour la valeur de la propriété $balance avec la nouvelle valeur passée en paramètre.
        }
    }

    // Exemple d'utilisation
    $account = new BankAccount(10); //Création d'une nouvelle instance de la classe BankAccount avec un solde initial de 10.
    echo "Solde actuel : " . $account->getBalance() . "<br>";
    // Affiche le solde actuel en appelant la méthode getBalance de l'objet $account.

    $account->setBalance(1000000);
    //Appelle la méthode setBalance pour mettre à jour le solde de l'objet à 1 000 000.
    echo "Nouveau solde : " . $account->getBalance();
    // : Affiche le nouveau solde en appelant à nouveau la méthode getBalance de l'objet $account.
    ?>

</body>

</html>