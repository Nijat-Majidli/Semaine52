<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");



// On utilise la fonction time() pour obtenir le timestamp courant;
// Afin d'obtenir le timestamp d'une autre date précise on utilise la fonction mktime(hour, minute, second, month, day, year);


// Calculer la différence entre 2 dates en utilisant les fonctions time() et mktime(): 

$now = time();

$end_of_formation = mktime(0,0,0,04,02,2021);

$difference = $end_of_formation - $now;

$nombre_de_jours = ceil($difference / 86400);

echo "Le nombre de jours restants avant la fin de ma formation : $nombre_de_jours jours"



?>