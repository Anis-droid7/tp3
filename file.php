<?php
// declare all the fileds from the form

$name = $_POST['nom'];
$prenom = $_POST['prenom'];
.
.
.


function verifier() {

	$arrors = [];
  
  if (empty($name)) {

	array_push($arrors, $name);

  }

  .
  .
  .
  .
  

  // do the same check for all the filds

  return $arrors;

}

?>

