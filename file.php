<?php
// declare all the fileds from the form

$name = $_POST['nom'];
$prenome = $_POST['prenome'];
.
.
.


function virifier() {

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

