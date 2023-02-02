<?php


function checkString($inputString){

  $stringArray = explode(" ", $inputString);
  $emailsFound = [];
  for ($i=0; $i < count($stringArray) ; $i++) {
    if (strpos($stringArray[$i], "@") !== false && strpos($stringArray[$i], ".") !== false) {
      // echo $stringArray[$i];
      array_push($emailsFound ,$stringArray[$i]);
    }
  }

  return $emailsFound;
}

$userString = "This is a string that contains an email address, and it has to be found, find the email find@me.com in it, also find mekgwele@gmail.com how about just mekgwele@gmail or mekgwele.com";

echo implode(", ",checkString($userString))


 ?>
