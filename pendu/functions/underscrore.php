<?php

function underscrore($mot, $lettreTapee = null , $tableauDeLettresCorrects=[]){
    $tableauMot= str_split($mot);

//pour l'avoir en dur et recommencer une partie apres avoir eteind l'ordi , il faut stocker les tableaux et mot dans un fichier JSON

    if ($lettreTapee == null) {
        for ($i=0 ; $i < count($tableauMot) ; $i++) { 
            echo '_ ';
        }
    }

        else {
            foreach ($tableauMot as $key => $value) {
               if (in_array($value,$tableauDeLettresCorrects)) {
                echo "$value ";
               }
               else {
                echo "_ ";
               }
            }
        }
   
    }






?>