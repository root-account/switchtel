<?php


function checkString($inputString){

  $stringArray = explode(" ", $inputString);

  // For multitple emails if need be.
  $emailsFound = [];

  for ($i=0; $i < count($stringArray) ; $i++) {
    if (strpos($stringArray[$i], "@") !== false && strpos($stringArray[$i], ".") !== false) {
      // For more than 1 email push to array
      array_push($emailsFound ,$stringArray[$i]);

      // If only 1 email return here
      return $stringArray[$i];
    }
  }
  // If checking for more than one email return array instead
  // return $emailsFound;
}

$userString = "This is a string that contains an email address, and it has to be found, find the email find@me.com in it, also find mekgwele@gmail.com how about just mekgwele@gmail or mekgwele.com";

// If checking for more than 1 email use below code
// echo implode(", ",checkString($userString))

// If only 1 email use below code
echo checkString($userString)

 ?>
