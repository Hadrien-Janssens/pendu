<?php

function choisir_unMot() {
    
    $dataChemin = (__DIR__.DIRECTORY_SEPARATOR."../../data/dictionnaire.json");
    $dataJSON = file_get_contents($dataChemin);
    $data = json_decode($dataJSON,true);

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
    echo $mot ;
    return $mot;
   
} else if ($choixDuMode == "c") {
$domaine = readline("choisisez votre domaine :".PHP_EOL."$phrase");
$motIndex = array_rand($data[$domaine]);
$mot = $data[$domaine][$motIndex];
echo $mot ;
return $mot ;
};
}

?>