
<?php

  // Une année est bissextile (qui à 366 jours)  si :
  // 	1. l'année est divisible par 4 mais non divisible par 100
  // 	2. l'années divisible par 400

  // A partir de ces conditions on a juste à vérifier si les conditions 1 & 2 renvoient un entier (integer).

  function bissextile($annee) 
  {
    if( (is_int($annee/4) && !is_int($annee/100)) || is_int($annee/400)) 
    {
    echo "$annee est bissextile";
    } 
    else 
    {
    echo "$annee n'est pas bissextile";
    }
  }

  bissextile(2024);

?>

     




