<?php 
 	
 	$muutuja = "Praegu on ta �iget pidi";
 	$uus = "";
 	
 	for($i=1; $i<strlen($muutuja)+1; $i++){
 		$uus .= $muutuja[strlen($muutuja)-$i];
 	}
 	echo $uus;
 ?> 