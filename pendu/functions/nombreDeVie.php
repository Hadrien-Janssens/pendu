<?php
require_once __DIR__."/recupTableau.php";
require_once __DIR__."/dessinPendu.php";

function nombreDeVie($vie,$mot){
    if ($vie>1) {
        echo "------------".PHP_EOL;
        echo "|❤️ VIES : $vie|".PHP_EOL;
        echo "------------".PHP_EOL.PHP_EOL;
       $tableauDeLettresIncorrectes =  recupTableau("../../data/TableauDeLettresIncorrectes.json");
       if (is_array($tableauDeLettresIncorrectes)) {
  
        $tableauDeLettresIncorrectesEnString = implode(", ",$tableauDeLettresIncorrectes);
         echo "Lettres incorrectes : [ $tableauDeLettresIncorrectesEnString ]".PHP_EOL.PHP_EOL;
       }

        return true ; 
    }
    elseif ($vie==1) {
        echo "------------".PHP_EOL;
        echo "|❤️ VIE : $vie |".PHP_EOL;
        echo "------------".PHP_EOL.PHP_EOL;
       $tableauDeLettresIncorrectes =  recupTableau("../../data/TableauDeLettresIncorrectes.json");
       if (is_array($tableauDeLettresIncorrectes)) {
  
        $tableauDeLettresIncorrectesEnString = implode(", ",$tableauDeLettresIncorrectes);
         echo "Lettres incorrectes : [ $tableauDeLettresIncorrectesEnString ]".PHP_EOL.PHP_EOL;
       }

        return true ; 
    }

        unlink(__DIR__."/../../data/TableauDeLettresCorrectes.json");
        fopen(__DIR__."/../../data/TableauDeLettresCorrectes.json","w");
        unlink(__DIR__."/../../data/TableauDeLettresIncorrectes.json");
        fopen(__DIR__."/../../data/TableauDeLettresIncorrectes.json","w");
        dessinPendu(0);
        echo "Tu as perdu !!! 💩💩💩" .PHP_EOL;
        echo "Le mot à trouver était $mot 🙃" .PHP_EOL;
        return false;
    }
    


?>