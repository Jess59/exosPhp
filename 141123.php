<?php
//Manipulation  des chaines de caracteres
//fonction strlen()
//permet de compter le nombre de caractères dans une chaines de caracteres
//$phrase = "Bonjour tout le monde!"; echo strlen($phrase);  
//fonction str_replace()
//$permet de remplacer une chaines de caracteres$
//$phrase = "Bonjour tout le monde!"; echo str_replace('Bonjour','Bonsoir', $phrase);  
//fonction ucfirst()
//permet de mettre la premiere lettre d'une caine de caracteres en majuscule
//$phrase = "bonjour tout le monde!"; echo ucfirst($phrase);
//fonction strtolower()
//permet de mettre une chaine de caracteres en minuscule
//$phrase = "HOLA MUNDO!"; echo strtolower($phrase);
//fonction strtoupper()
//permet de mettre une chaine de caracteres en majuscule
//$phrase = "bonjour tout le monde!"; echo strtoupper($phrase);
//fonction mb_convert_case()
//permet de mettre une chaine de caracteres en majuscules ou en minuscules
//$phrase = "bonjour tout le monde!";
//echo mb_convert_case($phrase, MB_CASE_UPPER, 'UTF-8');
//ou encore en titre (chaque premier lettre d'un mot est mise en majuscule)
//on l'utilise souvent pour les titles
//$frase = "bonjour tout le monde!";
//echo mb_convert_case($frase, MB_CASE_TITLE, 'UTF-8');
//fonction date();
//elle permet de formater une date.
//elle prend en parametre le format de la date souhaitée
//!!!!!!!!ASTUCE en format americain est plus facile pour comparer les dates, les plus anciennes
//echo date('y/m/d');
//fonction strtotime();
//elle permet de convertir une date en timestamp
//elle donne le nombre des secondes e=écoulés depuis 1 janvier 1970
//echo strtotime("now");
//fonction time();
//elle permet de recuperer le timestamp actuel (elle ne prend pas de paramettres)
//timestamp TREEEES utilisé pour les bases de données
//pareil que strtotime 
//echo time();
//CONVERSION DES DATES
//chande la date de version américaine à une version française
//$date= '2021-03-18'; echo date('d/m/y', strtotime($date));
//FR en us
//$date= '18-03-2021'; echo date('y/m/d', strtotime($date));




?>