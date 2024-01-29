<?php
require_once (__DIR__."/dessinPendu.php");
require_once (__DIR__."/nombreDeVie.php");

function underscrore($mot, $lettreTapee = null , $tableauDeLettresCorrects=[],$vie=7){
    $tableauMot= str_split($mot);



    if ($lettreTapee == null) {
        nombreDeVie($vie,$mot);
        dessinPendu(7);
        echo PHP_EOL;

        echo ' Le mot à trouver : ';
        for ($i=0 ; $i < count($tableauMot) ; $i++) { 
            echo '_ ';
        }
        

    }

        elseif (is_array($tableauDeLettresCorrects)) {
           
        echo ' Le mot à trouver : ';
                
                foreach ($tableauMot as $key => $value) {
                
                if (in_array($value,$tableauDeLettresCorrects)) {
                    echo "$value ";
                }
                else {
                    echo "_ ";
                }
            }
        }
        else {
        echo ' Le mot à trouver : ';

            for ($i=0 ; $i < count($tableauMot) ; $i++) { 
                echo '_ ';
            }
        }
        echo PHP_EOL.PHP_EOL;
        }
 






?>