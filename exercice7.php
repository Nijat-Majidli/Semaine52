<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");



$Date = new DateTime();

echo "Il est : ".$Date->format('H\hi');



?>