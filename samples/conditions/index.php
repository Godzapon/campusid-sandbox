<?php 
    require_once('../../includes/header.php');
   
    $bool_true = true;
    $bool_false = false;

    // PHP s'appuie sur des conditions classiques : IF, ELSE, et le SWITCH CASE

    if ($bool_true == true) {
        echo '<br>IF<br>';
    } else {
        echo '<br>ELSE<br>';
    }

    // On peut enchaine des block de condition

    if ($bool_false == true) {
        echo '<br>IF<br>';
    } else {
        if ($bool_true == true) {
            echo '<br>IFIF<br>';
        } else {
            echo '<br>IFELSE<br>';
        }
    }

    // On peut améliorer ce genre de conditions avec le ELSEIF
    // L'effet de ce code est identique à celui au dessus

    if ($bool_false == true) {
        echo '<br>IF<br>';
    } elseif ($bool_true == true) {
        echo '<br>IFIF<br>';
    } else {
        echo '<br>IFELSE<br>';
    }

    // Comparaisons strictes : plus que la valeur, c'est également le type que l'on vérifie
    // Elle s'opposent aux comparaisons larges (loose comparison)
    // https://www.php.net/manual/en/types.comparisons.php
    0 == false; // retourne vrai
    0 === false; // retourne faux
    "" == false; // retourne vrai
    "" === false; // retourne faux
    // Il faut faire attention à ne pas être surpris par le résultat d'une comparaison
    // Il est conseillé de faire des comparaisons strictes par défaut

    // Switch case : déclenche le code selon la valeur de la variable
    $var = 'b';
    switch ($variable) {
        case 'a':
            # ne s'execute pas
        break;
        case 'b':
            # s'execute
        break;
        case 'c':
            # ne s'execute pas
            break;
        
        default:
            # Se produit si aucun case au dessus n'a été résolu
            break;
    }

    require_once('../../includes/footer.php');
?>
