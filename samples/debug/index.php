<?php 
    require_once('../../includes/header.php');
    
    $date = time();

    // echo la variable, valeur et type
    var_dump($date);

    // Constantes pour récupérer la ligne, le fichier
    echo '<br>' . __FILE__ . ':' . __LINE__ . '<br>';

    // Affichage de la pile d'appel
    a();
    
    function a() {
        b();        
    }
    
    function b() {
        c();
    }
    
    function c() {
        debug_print_backtrace();
    }

    require_once('../../includes/footer.php');
?>
