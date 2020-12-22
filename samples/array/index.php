<?php 
    require_once('../../includes/helpers.php');
    require_once('../../includes/header.php');
    
    // Il existe des tableaux simples :
    $arr = [1,2,3,4,5,6];
    // Un tableau commence toujours pas 0 :
    $arr[0]; // vaut 1

    // Un tableau (array) peut se déclarer de deux manière
    $arr1 = [1,2,3];
    $arr2 = array(1,2,3);

    if ($arr1 === $arr2) {
        echo "<br>Ces tableaux sont identiques<br>";
    }

    // Un array peut contenir différents type, y compris d'autres array :

    $arr = [1, 'abc', 1.5, false, array(1,2,'abc'), 'def'];

    // Pour afficher un tableau proprement, print "readable"
    print_r($arr);


    // Opération de mutation des tableaux :
    unset($arr[0]); // Supprime la première entrée
    $arr[0] = 2; // Affecte 2 à la première entrée
    $abc = array_shift($arr); // Supprime la première entrée mais la stocke en variable
    $def = array_pop($arr); // Pareil avec la dernière entrée

    $rra = array_reverse($arr); // Inverse les entrées du tableau

    // Opération de filtre des tableaux
    // Le premier paramètre est le tableau à filtrer, 
    // le second est une closure (une function anonyme) qui prend elle même pour paramètre une entrée du tableau
    // celle ci sera exécutée pour chaque entrée du tableau,
    // le corps de la méthode retourne un booléen, pour chaque true renvoyé, l'entrée du tableau est préservée
    // sinon elle est supprimée. Ici, le tableau ne garde que les entrée de type array ou float
    $filtered_arr = array_filter($arr, function($entry){
        return is_array($entry) || is_float($entry);
    });

    hr('Tableau associatif');

    // Un array peut être "associatif", et fonctionner avec un système de clef/valeur,
    // c'est dès lors une structure complexe qui nous sera très utile
    // la clef et la valeur sont séparés par "=>"
    $arr = [
        'clef1' => 'valeur',
        'autreclef' => [
            5 => ['a', 'b', 'c']
        ],
        8 => 'une valeur peut être de nombreux type'
    ];

    // Lorsque l'on veut passer ce tableau en tant que chaîne de caractère,
    // pour l'envoyer en paramètre dans une requête GET par exemple
    // il est commun de le sérialiser, donc le transformer en string, via JSON (JavaScript Object Notation)
    $string_arr = json_encode($arr);

    // On peut le récupérer en array en le décodant
    $arr = json_decode($string_arr, true); // Le second paramètre sert au tableau associatifs

    // un foreach sur un array associatif fonctionne avec clef et valeur,
    // la syntaxe suit ces règles :
    foreach ($arr as $key => $value) {
        echo "clef : " . $key . '<br>';
        echo "valeur : " . $value . '<br>';
    }

    require_once('../../includes/footer.php');
?>
