<?php 
    $title = "Les Fonctions";
    require_once('../../includes/helpers.php');
    require_once('../../includes/header.php');
    // Une fonction possède cette syntaxe :
    function nomDeLaFonction() {
        echo 'fonction appelée<br>';
    }
    // et s'appelle avec les parenthèse pour signifier que c'est une fonction :
    nomDeLaFonction();

    // Un fonction peut avoir une valeur de retour
    function fonctionAvecRetour() : string {
        return 'retour de fonction<br>';
    }

    echo  fonctionAvecRetour();
    
    hr('Visibilité des variables');
    // Une variable déclarée hors du scope de la fonction
    // et dans le scope de celle ci n'ont pas la même visibilité
    // Une variable déclarée en global est visible de n'importe où
    $variable = 'a';
    function visibiliteVariable() {
        var_dump($variable); // NULL
        $intra_fonction_var = 'b';
        global $global_variable;
        $global_variable = 'c';
    }
    visibiliteVariable();
    var_dump($intra_fonction_var); // NULL
    echo 'global = ' . $global_variable . '<br>';

    // Une variable initialisée en static n'est init qu'une fois

    function double() {
        $a = 1;
        $a = $a*2;
        echo 'double : ' . $a . '<br>';
    }

    // Aucune évolution
    double() . '<br>';
    double() . '<br>';
    double() . '<br>';

    // En revanche, si on déclare a "static"

    function double_static() {
        static $a = 1;
        $a = $a*2;
        echo 'double_static : ' . $a . '<br>';
    }

    // $a est initialisé, et une fois fait, elle conserve sa valeur au fil du déroulé du script
    double_static() . '<br>';
    double_static() . '<br>';
    double_static() . '<br>';

    hr('Paramètres de fonctions');
    // On passe un paramètre à une fonction comme suit
    function fonctionAvecParam($param) {
        echo $param . '<br>';
    }
    fonctionAvecParam('paramètre');
    
    // On peut définir une valeur par défaut
    // ainsi, si on ne fourni pas de paramètre, il prendra
    // la valeur assigné dans la signature de la fonction
    function fonctionAvecDefautParam($param = 'défaut') {
        echo $param . '<br>';
    }
    fonctionAvecDefautParam();
    
    // On peut typer le paramètre d'une fonction,
    // Si on lui passe un autre type, ou tout du moins un type
    // que l'on ne peut pas caster (transtyper), cela provoquera une Fatal error
    function fonctionAvecParamType(int $integer) {
        echo $integer . '<br>';
    }
    //fonctionAvecParamType('param'); // Fatal Error
    
    // Un appel avec un paramètre classique fonctionne
    // avec un clone du paramètre dans le scope de la fonction
    function fonctionSansPassageParReference($array) {
        // La fonction s'occupe de supprimer le premier et le dernier élément du tableau
        array_pop($array);
        array_shift($array);
        echo "<br>";
    }
    $array = ['a', 'b', 'c', 'd'];
    fonctionSansPassageParReference($array);
    print_r($array); // Le tableau est inchangé
    
    // La même fonction avec un passage par référence,
    // c'est une référence vers la variable que l'on passe,
    // la variable est donc mutée
    function fonctionAvecPassageParReference(&$array) {
        // La fonction s'occupe de supprimer le premier et le dernier élément du tableau
        array_pop($array);
        array_shift($array);
        echo "<br>";
    }
    fonctionAvecPassageParReference($array);
    print_r($array); // Le tableau est modifié
    
    hr('Fonctions anonymes');
    // Une fonction anonyme est une fonction sans nom,
    // on peut la stocker dans une variable et/ou la passer en paramètre d'une autre fonction
    // Le use() en fait une closure, une fonction anonyme qui prend un contexte au moment de sa déclaration
    $use_var = ['a','d','c','d','e','f'];
    $correspondance = function (int $param) use ($use_var){
        return $use_var[$param];
    };

    echo $correspondance(2) . '<br>';
    echo $correspondance(5) . '<br>';

    // L'utilisation d'une closure, par exemple dans une fonction de tri,
    // qui prend une closure en paramètre
    $mots = ['mot', 'présomption', 'table', 'chat', 'ouvrage', 'étendoir', 'abracadabrantesque', 'lac'];
    usort ($mots, function ($mot1 , $mot2) {
        // Ici, on va trier les mots par leur longueur
        return strlen($mot1) > strlen($mot2);
    });

    print_r($mots) ;
    echo '<br>';


    // yield : générateur
    function majusculeSansYield(array $array) : array
    {
        $retour = [];
        foreach ($array as $entry) {
            $retour[] = strtoupper($entry);
        }
        return $retour;
    }
    // On affiche le résultat
    $retour = majusculeSansYield($mots);
    foreach ($retour as $entry) {
        echo $entry . '<br>';
    }
    
    hr('Yield');
    
    // On utilise le mot clef yield, qui stocke ce qu'on lui passe dans un "générateur"
    // ce générateur est propre à une fonction, et en est le retour
    function majusculeAvecYield(array $array) : Iterator
    {
        foreach ($array as $entry) {
            yield strtoupper($entry);
        }
    }
    
    // On affiche le résultat
    $retour = majusculeSansYield($mots);
    foreach ($retour as $entry) {
        echo $entry . '<br>';
    }

    // PHP 8 : les named arguments

    function argumentsNommes(int $count = null, string $name = null, array $options = null, string $category = null) {
        // Do something
    }

    argumentsNommes(5, null, null, 'cinema');

    // en PHP8 : argumentsNommes(count: 5, category: 'cinema');
    // En plus d'être plus rapide et plus lisible, si la fonction évolue avec plus de paramètres, et leur ordre change, notre appel lui reste inchangé

    // PHP8 : Union types
    // Le typage des arguments prend plus de souplesse, il interprète un "ou" logique, afin que l'on puisse passer,
    // dans cet exemple, soit un integer, soit une string, et en la valeur de retour soit un array, soit un integer

    // function unionType(int|string $arg): array|int
    // {

    // }

    require_once('../../includes/footer.php');
?>
