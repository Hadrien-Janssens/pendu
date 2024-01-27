<?php


function recupLettre ($mot){
    $tableauDeLettresCorrectes = [];
    $tableauDeLettresIncorrectes = [];
    
    $lettreTapee =   readline('Taper une lettre pour trouver le mot : ');

    if (strpos($mot,$lettreTapee)===false) {
        // plus retirer une vie apres 
        $tableauDeLettresIncorrectes[]=$lettreTapee;
        echo 'Non cette lettre n\'appartient pas au mot à trouver, tu as perdu une vie, recommence'.PHP_EOL;
       recupLettre($mot);
        
    } else  {
      $tableauDeLettresCorrectes[]=$lettreTapee;
        underscrore($mot,$lettreTapee,$tableauDeLettresCorrectes);
    }
  return [$tableauDeLettresCorrectes, $tableauDeLettresIncorrectes];
}


?>