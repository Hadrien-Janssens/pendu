<?php
require_once (__dir__."/recupTableau.php");

function choisir_unMot() {
    
    $chemin = "../../data/dictionnaire.json";
    $data = recupTableau($chemin);


$tableauDesMotsDEDomaines = array_keys($data);

$phrase ='';
foreach($tableauDesMotsDEDomaines as $key => $value) {
   $phrase.=$value.PHP_EOL;
}

$choixDuMode = readline('mode :  aletaoire ou choisir  (a)/(c)');

if ($choixDuMode == "a") {
    $domaine =  array_rand($data);
    $motIndex = array_rand($data[$domaine]);
    $mot = $data[$domaine][$motIndex];
    system('clear');
    return $mot;
   
} else if ($choixDuMode == "c") {
$domaine = readline("choisisez votre domaine :".PHP_EOL."$phrase");
$motIndex = array_rand($data[$domaine]);
$mot = $data[$domaine][$motIndex];
system('clear');
return $mot ;
};
}

?>