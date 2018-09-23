<?php
	//param1 deklarasi
	//param2 kondisi
	//param3 iterasi
	//kuncinya lihat kondisi param2
	for($i=0; $i<5; $i++){
		echo "Tommy For<br>";
	}
	
	echo "<hr>";
	
	$i=0; //param1 deklarasi
	while($i<5){ //param2 kondisi
		echo "Tommy While<br>";
		$i++; //param3 iterasi
	}
	
	echo "<hr>";
	
	$i=0; //param1 deklarasi
	do{
		echo "Tommy Do While<br>";
		$i++; //param3 iterasi
	}while($i<5); //param2 kondisi
?>