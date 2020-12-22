<?php 
    require_once('../../includes/header.php');
    
    $integer = 8;
    // Différence entre simple et double quotes
    $string_simple_quotes = 'ceci est une chaîne de caractère';
    $string_double_quotes = "ceci est une chaîne de caractère";

    echo $string_double_quotes . '<br>';
    echo $string_double_quotes . '<br>';
    
    $string_simple_quotes = 'l\'interprétation de la variable $integer';
    $string_double_quotes = "l'interprétation de la variable $integer";
    
    echo $string_simple_quotes . '<br>';
    echo $string_double_quotes . '<br>';

    // Concaténation
    $first_part = 'Le début';
    $last_part = ' la fin';

    echo $first_part . $last_part . '<br>';
    
    $first_part .= $last_part;

    echo $first_part . '<br>';

    // Méthodes sur string

    echo strlen($string_double_quotes) . '<br>';

    var_dump(strpos($string_double_quotes, 'inconnue'));
    echo '<br>';
    echo strpos($string_double_quotes, 'variable') . '<br>';
    
    // PHP8
    // str_contains('cette chaine contient', 'chaine'); # vaut true
    // str_starts_with('cette chaine contient', 'cette'); # vaut true
    // str_ends_with('cette chaine contient', 'contient'); # vaut true

    // Une chaîne de caractère, c'est une sorte de tableau :
    $abc = "abc";
    echo $abc[0]; // a
    echo $abc[1]; // b
    echo $abc[2]; // c
    


    require_once('../../includes/footer.php');
?>
