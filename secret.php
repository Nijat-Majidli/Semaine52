<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();


    //Ici grâce à la variable superglobale $_POST on récupère les valeurs de login/password saisie dans la formullaire dans la page exercide.php

    $username = htmlspecialchars($_POST['login']);   // La fonction "htmlspecialchars" nous aide d'éviter la faille XSS
    
    $code = htmlspecialchars($_POST['password']);



    if ($_SESSION['login'] == $username  &&  $_SESSION['password'] == $code) 
    {
        // Si login et password sont bon, donc on affiche la page 
        echo "<h1> Voici les codes d'accès : </h1>";
        echo "<p> <strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong> </p>";   
        echo "<p> Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes 
        d'accès sont changés toutes les semaines.<br />  La NASA vous remercie de votre visite. </p>";
    }
    
    else 
    {
        // Sinon, on affiche un message d'erreur et redirige l'utilisateur sur la page de connexion. 
        header ("refresh:1; url=exercice.php");  // refresh:1 signifie que après 1 seconde l'utilisateur sera redirigé sur la page de connexion. 
        echo "La connexion a échoue !";

        // On peut faire le meme chose en utilisant les codes Javascript comme suite:
        // echo ("<script> alert('La connexion a échoué !') </script>");
        // echo ("<script> window.location='exercice.php'; </script>");
    }
?>

