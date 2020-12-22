<?php
    $title = "Les globales";
    require_once('../../includes/helpers.php');
    require_once('../../includes/header.php');

    // Une constante déclarée et valorisée n'est pas modifiable : ce n'est pas une variable
    const CONSTANTE = 'constante';

    echo 'const = ' . CONSTANTE . '<br>';

    global $variable_globale;
    $variable_globale = 'cette variable est accessible de n\'importe ou dans le code';

    // En php, il existe des variables, propres à l'environnement, qu'on nomme des super globales
    // ces variables sont disponible à n'importe quel endroit du code, 
    $GLOBALS; // C'est un array dans lequel on place des données pour les rendres accessible dans tout le code. Le fonctionnement est similaire au mot clef "global"
    $_COOKIE; // C'est un array dans lequel on retrouve les cookies (ces données stockées localement dans un navigateur)
    $_ENV; // On y trouve les variables d'environnement système
    $_SERVER; // On y trouve les variables serveur : HOST, URI... etc.
    $_GET; // Ici sont stockés les paramètres passés dans l'URL
    $_POST; // Ici sont stockés les paramètres envoyés en POST, via un formulaire    

    require_once('../../includes/footer.php');
?>
