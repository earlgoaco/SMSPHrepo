<?php

  require_once("receive.php");
    $receiver = exploder();

    $strings = explode(" ", $messageValue);
   	$emergencyCode = $strings[0];
   	$emergencyLocation = $strings[1];

   	echo $emergencyCode;
   	echo $emergencyLocation;


?>
