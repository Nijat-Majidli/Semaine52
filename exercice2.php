<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");


// Affichage le numéro de semaine de la date 14/07/2019

$Date = new DateTime("14-07-2019");

echo "Le numéro de semaine de la date \"14/07/2019\" est : ".$Date->format('W');


?>