<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon superWebsite</title>
</head>

<body>

    <h1>Ma page web</h1>
    <!--<p>Aujourd'hui nous sommes le:-->
    <?php /*echo date('d/m/Y h:i:s'); 
//Comentaires d'une ligne // Paragraph*/
    //.</p>
    
    //Si la variable est en false elle ne rentre plus dans la condition IF
    //$isAllowToEnter = "blue";
    
    /*if($isAllowToEnter == "oui"){
        echo "Vous êtes autorisé(e) à acceder au site 🤑";
      } elseif  ($isAllowToEnter == "non"){
         echo "Accès refusé 🤬";   
        } else {
            echo "Euh je ne comprends pas ton choix, te peux me le rappeler stp?";
        }*/

    /* $isEnabled = false;
     $isOwner = false;

     if (!$isEnabled && !$isOwner){
         echo'Accès à la recette validé 🤑';
     } else {
         echo'Accès à la recette interdit! 🤬';
     }*/

    /*$isEnabled = true;
    $isOwner = false;
    $isAdmin = true;
    //on admets que isEnabled ET isOwner sont true, pour indiquer que c'est different, on ajoute !
    //IL rentre si && est ok OU isAdmin =true
    if (($isEnabled && $isOwner)||$isAdmin){
        echo'Accès à la recette validé 🤑';
    } else {
        echo'Accès à la recette interdit! 🤬';
    }

    $recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César');
            echo $recipes[1];
            echo '<pre>';  //montre le tableau en presentation
            var_dump($recipes); //montre tout le tableau

            $recipe = [
                'title'=>'Cassoulet',
                'recipe' => 'Etape : Des flageolet; Etape 2',
                'author' => 'joue.doe@exemple.com',
                'enabled' => true,
            ]; 
            echo '<pre>';
            var_dump($recipe);

            $num=1;
            while ($num <= 5) {
                echo "le numéro est : " . $num . "\n";
                $num++;
            } //afiche 1,2,3,4,5
    $num = 7;
    do {
        echo "le numero est : " . $num . "\n";
        $num++;
    } while ($num <= 5);

    for ($i = 0; $i <= 5; $i++) {
        echo $i . " ";
    } // Affice 1 2 3 4 5

    $fruits = array ("Pomme","Banane","Orange") ;

        foreach ($fruits as $fruit ) {

            echo " " . $fruit ." ";
        }
        $personne = array("nom" =>"Doe", "prenom" =>"Joe","age"=>30); //clé=>valeur

        foreach($personne as $cle=>$valeur) {
            echo "  " . $cle . ": " . $valeur . "  " . "<br>"; 
        } //affiche nom: 
        //Function break  pour arreter la boucle
        $i=0;

        while($i< 10){
            echo $i . '  ';

            if ($i === 5){
                break;
            }
            $i++; //affiche 0 1 2 3 4 5
        }
    //Calcule la moyenne des notes
    $notes = array(
        //maths(clé)  15(valeur)
        "maths" => 15,
        "francais" => 12,
        "histoire_geo" => 9,
    );

    $nombreNotes = count($notes);// compte le total des notes

    $totalNote = 0;
   // $nbNote = 0; //on mets le compteur à zero
    foreach ($notes as $keyNote => $valNote) { 
        $totalNote += $valNote; //additione les notes 15 + 12 + 9
   //     $nbNote +=1; //compte le total de notes 3
    }
   // echo $totalNote; //Affiche 36
   // echo $nombreNotes;  //Affiche 3
    echo 'La moyenne est de ' . $totalNote/$nombreNotes . ' / 20.'; // il affiche 12/20
    //ppour qu'il sort directe
    die();

    //Afficher le prix ttc
    $prixHt = 50;
    $tauxTva = 20; //
    $prixTtc = 0;
    echo 'Le prix TTC du produit est de ' . (($prixHt * $tauxTva) / 100) + $prixHt . ' €.';
    //calcule la tva  et on l'additione le prix hors taxe
    //Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(),
// faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.
    $test = 42;
    $test = (string)$test;
    var_dump((string)$test); //Il affiche string(2) "42"
    //Déclarer un variable $sexe qui contient une chaîne de caractères. 
    //Créer une condition qui affiche un message différent en fonction de la valeur de la variable. 
    $sexe = "masculin";
    if ($sexe == "masculin") {
        echo 'Je suis un homme';
    } else {
        echo 'Je suis une femme';
    }
    //Déclarer une variable $budget qui contient la somme de 1 553,89 €. 
    //Déclarer une variable $achats qui contient la somme de 1 554,76 €.
    // Afficher si le budget permet de payer les achats.
$budget = 1553.89;
$achats = 1554.76;

if($budget>=$achats){
    var_dump('Pn peux payer');
}else {
    var_dump('On ne peux pas payer');
}
//Déclarer une variable $age qui contient la valeur de type integer de votre choix.
// Réaliser une condition pour afficher si la personne est mineure ou majeure.
$age=13;
$majeur= "18";
if($age>=$majeur){
    var_dump('Tu es majeur');
}
    else{
        var_dump('Tu es mineur');
    }*/

//Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24.
// Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
$heure=7;

if($heure >=5 || $heure >= 12) {
    var_dump('Il est ' . $heure . ' du matin');
}









    ?>

</body>

</html>