<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");


// La fonction date() retourne la date du jour:

echo "La date courante : ".date('d-m-Y');

echo "<br><br>";


// Ajoutons 1 mois à la date courante:

echo  "Un mois plus tard : ";

echo date('d-m-Y', strtotime('+1 month'));


?>