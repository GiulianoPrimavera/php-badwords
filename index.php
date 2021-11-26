<?php 

$testo = "<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>";

$_GET["parolaDaCensurare"];

/* var_dump($_GET); */

$testoDue = str_replace($_GET, "***", $testo);

echo $testoDue;

echo "<br> questo paragrafo è lungo ", strlen($testo), " lettere";

?>
