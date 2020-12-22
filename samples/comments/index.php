<?php 
    require_once('../../includes/header.php');
    
    // Commentaire sur une ligne

    /*
      Commentaire sur plusieurs lignes
    */

    /**
     * Descriptif de la fonction
     *
     * @param string $parametre               Commentaire sur paramètre
     * @param int    $parametre_valeur_defaut Commentaire sur second paramètre
     *
     * @return bool Commentaire sur le retour de la fonction
     */
    function fonction(string $parametre, int $parametre_valeur_defaut = 1) : bool
    {
        return strpos($parametre, $parametre_valeur_defaut) !== false;
    }

    require_once('../../includes/footer.php');
?>
