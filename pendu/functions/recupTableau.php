<?php

function recupTableau($chemin){

    $dataChemin = (__DIR__.DIRECTORY_SEPARATOR.$chemin);
    $dataJSON = file_get_contents($dataChemin);
    $data = json_decode($dataJSON,true);
    
    return $data;
}
?>