<?php

$date = "17/17/2019";

//  On découpe la chaîne $date selon '/' avec la fonction explode() qui retourne un tableau 
//  Les éléments du tableau sont directement afffecté à des variables ($dd, $mm, $yyyy) dans un ordre respectif grâce à la fonction list()      

list($dd, $mm, $yyyy) = explode('/', $date);

// Les variables $dd, $mm, $yyyy sont des chaînes, or la fonction checkdate() n'accepte que des entiers

// echo gettype($dd) indique que la variable $dd est une chaîne (string)

// On va donc 'caster' c'est-à-dire changer le type des variables $dd, $mm, $yyyy.
// Pour cela on va mettre (int) devant la variable :

$dd = (int) $dd;
$mm = (int) $mm;
$yyyy = (int) $yyyy;

// Désormais le type des variables $dd, $mm, $yyyy est bien un entier

// Pour s'assurer que les valeurs de jour, mois et année sont correctes, on utilise la fonction checkdate() :

if (!checkdate($mm, $dd, $yyyy))
{         
    echo"Date ".$date." est erronée.";
}


?>