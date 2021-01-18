<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On crée 2 variables de session dans $_SESSION 
$_SESSION['login'] = 'nijat';
$_SESSION['password'] = 'majidli';

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Page protégée par mot de passe </title>
    </head>

    <body>
        <p> Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central: </p>

        <form  action="secret.php"  method="post">
            <p> Login : <input type="text"  name="login"/>  </p>
            <p> Password : <input type="password"  name="password"/>  </p>
            <input type="submit"  value="Valider"/>
        </form>

    </body>
</html>