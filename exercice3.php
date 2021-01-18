<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");


// Calculer la différence entre 2 dates en utilisant l'objet DateTime et la fonction date_diff():

$now = new DateTime();

$end_of_formation = new DateTime('02-04-2021 17:00:00');

$difference = date_diff($now, $end_of_formation);

echo "Aujourd'hui : ".$now->format("d/m/Y H:i:s")."<br><br>";

echo "Fin de ma formation : ".$end_of_formation->format("d/m/Y H:i:s")."<br><br>"; 

echo "Le nombre de jours restants avant la fin de ma formation : ".$difference->format('%R%a days');



?>