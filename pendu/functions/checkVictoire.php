<?php
require_once (__DIR__."/dessinPendu.php");
require_once (__DIR__."/nombreDeVie.php");

function checkVictoire($mot, $tableauDeLettresCorrectes , $vie, $nom,$lettreTapee ) {


    $tableauDuMot = str_split($mot);

    foreach ($tableauDeLettresCorrectes as $key => $value) {
      if ($value == $mot) {
        system("clear");
        nombreDeVie($vie,$mot);
        dessinPendu($vie);
      
        if ($vie==1) {
         $motVie = "vie";
        } else {
          $motVie= "vies";
        }
        
      
        echo "Bravo $nom 🎉, tu as gagné avec encore $vie $motVie !!! 😉";
        unlink(__DIR__."/../../data/TableauDeLettresCorrectes.json");
        fopen(__DIR__."/../../data/TableauDeLettresCorrectes.json","w");
        unlink(__DIR__."/../../data/TableauDeLettresIncorrectes.json");
        fopen(__DIR__."/../../data/TableauDeLettresIncorrectes.json","w");
        return true;
      }
    }


  foreach ($tableauDuMot as $key => $value) {
   
    if (in_array($value,$tableauDeLettresCorrectes)===false) {
        return ;
    }
  }
  system("clear");
  nombreDeVie($vie,$mot);
  dessinPendu($vie);

  if ($vie==1) {
   $motVie = "vie";
  } else {
    $motVie= "vies";
  }
  

  echo "Bravo $nom, tu as gagné avec encore $vie $motVie!!!";
  unlink(__DIR__."/../../data/TableauDeLettresCorrectes.json");
  fopen(__DIR__."/../../data/TableauDeLettresCorrectes.json","w");
  unlink(__DIR__."/../../data/TableauDeLettresIncorrectes.json");
  fopen(__DIR__."/../../data/TableauDeLettresIncorrectes.json","w");
  return true;


}

?>