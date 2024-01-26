<?php


function recupLettre ($mot){
    
    $tableauDeLettresCorrectes=[];
    $tableauDeLettresIncorrectes=[];

    $lettreTapee =   readline('Taper une lettre pour trouver le mot : ');
    if (strpos($mot,$lettreTapee)===false) {
        // plus retirer une vie apres 
        $tableauDeLettresIncorrectes[] = $lettreTapee;
        
    } else  {
        $tableauDeLettresCorrectes[] = $lettreTapee;

    }
    return [ $tableauDeLettresCorrectes , $tableauDeLettresIncorrectes] ;
}


?>