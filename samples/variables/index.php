<?php
    $title = "Les variables";
    require_once('../../includes/helpers.php');
    require_once('../../includes/header.php');


    hr('Valorisation en destructuring');
    // Valorisation en destructuring
    $str = 'Bonjour, ça va, vous ?';
    // Si on explode() la chaine avec ",", on obtiens un tableau de 3 entrées : 'Bonjour' - 'ça va' - 'vous'

    // En php, on peut initialiser plusieurs variable en une ligne, en valorisant un tableau avec un autre.
    // On applique des opérations finalement sur chaque élément d'une structure, ce pourquoi on nomme ça le "destructuring"
    [$a, $b, $c] = explode(', ', $str);

    printc('$a', $a);
    printc('$b', $b);
    printc('$c', $c);
    // https://stitcher.io/blog/array-destructuring-with-list-in-php

    require_once('../../includes/footer.php');
?>