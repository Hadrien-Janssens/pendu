<?php
require_once './functions/choisir_unMot.php';
require_once './functions/underscrore.php';
require_once './functions/recupLettre.php';

$motATrouver = choisir_unMot();

underscrore($motATrouver,[]);
recupLettre($motATrouver);
underscrore($motATrouver, recupLettre($motATrouver)[0])

?>