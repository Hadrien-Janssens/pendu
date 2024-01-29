<?php
require_once __DIR__.'/functions/choisir_unMot.php';
require_once __DIR__.'/functions/underscrore.php';
require_once __DIR__.'/functions/recupLettre.php';

function pendu() {

    system("clear");
    echo "Alors, tu veux faire une petite partie avec moi au jeu du Pendu 🙂?".PHP_EOL.PHP_EOL;
    $nom = readline(" si oui, commence par me donner ton nom, ".PHP_EOL. "➡️ Nom : ");
    $motATrouver = choisir_unMot();
    
    
    underscrore($motATrouver);
    recupLettre($motATrouver,$vie=7,$nom);
}

?>