<?php
require_once (__dir__."/recupTableau.php");
require_once (__DIR__."/nombreDeVie.php");
require_once (__DIR__."/checkVictoire.php");
require_once (__DIR__."/dessinPendu.php");


function recupLettre ($mot, $vie=7,$nom){
  
  $lettreTapee =   readline(' ➡️ Taper une lettre pour trouver le mot : ');
  system('clear');
  $lettreTapee= strtolower($lettreTapee);

  $tableauDeLettresCorrectes = [];
  $tableauDeLettresIncorrectes = [];
 
    if (strpos($mot,$lettreTapee)===false) {
        // plus retirer une vie apres 
       $tableauDeLettresCorrectes = recupTableau("../../data/TableauDeLettresCorrectes.json");
      $tableauDeLettresIncorrectes = recupTableau("../../data/TableauDeLettresIncorrectes.json");


      //test//
     if (is_array($tableauDeLettresIncorrectes)) {
      # code...
    
      if (in_array($lettreTapee,$tableauDeLettresIncorrectes)==false) {
        # code...
        $tableauDeLettresIncorrectes[]=$lettreTapee;
        $tableauDeLettresIncorrectesFormatJson = json_encode($tableauDeLettresIncorrectes, JSON_PRETTY_PRINT);
        file_put_contents(__DIR__."/../../data/TableauDeLettresIncorrectes.json",$tableauDeLettresIncorrectesFormatJson);
      }
    } else {
      $tableauDeLettresIncorrectes[]=$lettreTapee;
      $tableauDeLettresIncorrectesFormatJson = json_encode($tableauDeLettresIncorrectes, JSON_PRETTY_PRINT);
      file_put_contents(__DIR__."/../../data/TableauDeLettresIncorrectes.json",$tableauDeLettresIncorrectesFormatJson);
    }


        //fin test
        $vie--;
        if (nombreDeVie($vie,$mot)==false) {
          
          return;
         }
        if ($vie == 2) {
          echo "💀 LA FIN EST PROCHE 😈 ...TU VAS PERDRE MOUAHAHAHAH 🤣 !!".PHP_EOL.PHP_EOL;
      dessinPendu($vie);

        }
        elseif ($vie ==1) {
          echo 'Tu pues la défaite 💩'.PHP_EOL.PHP_EOL;
          dessinPendu($vie);
        }
         else {

          echo '🤒 🤕 Non, cette lettre ou ce mot ne correspond pas au mot à trouver, tu as perdu une vie ❤️‍🩹, recommence'.PHP_EOL.PHP_EOL;
      dessinPendu($vie);

        }
      
      
        underscrore($mot,$lettreTapee,$tableauDeLettresCorrectes);
        recupLettre($mot, $vie,$nom);
        
    } else  {
    
      $tableauDeLettresCorrectes = recupTableau("../../data/TableauDeLettresCorrectes.json");
      


      $tableauDeLettresCorrectes[]=$lettreTapee;
      $tableauDeLettresCorrectesFormatJson = json_encode($tableauDeLettresCorrectes, JSON_PRETTY_PRINT);
      file_put_contents(__DIR__."/../../data/TableauDeLettresCorrectes.json",$tableauDeLettresCorrectesFormatJson);
      
     

      nombreDeVie($vie,$mot);
        echo " 🎯 Mouais, t'as eu de la chance 🤓 ... ".PHP_EOL.PHP_EOL;
      
      dessinPendu($vie);
      underscrore($mot,$lettreTapee,$tableauDeLettresCorrectes);
      // checkVictoire($mot, $tableauDeLettresCorrectes);
        if (checkVictoire($mot , $tableauDeLettresCorrectes, $vie,$nom,$lettreTapee)===true) {
        return;
        }
        else if (checkVictoire($mot , $tableauDeLettresCorrectes, $vie,$nom,$lettreTapee)===false) {
          return ;
        }
      recupLettre($mot, $vie,$nom);
    }
  return [$tableauDeLettresCorrectes, $tableauDeLettresIncorrectes];
}


?>