<?php
	$lampu = "on";
	
	switch($lampu){
		case "on":
			echo "Lampu sedang menyala";
			break;
		case "off":
			echo "Lampu sedang mati";
			break;
		default:
			echo "Status tidak valid";
			break;
	}
?>