<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");


// Affichage la date du jour au format : "mardi 2 juillet 2019"

$Date = new DateTime();

echo "Nous somme le : ".$Date->format('l d F Y');


?>