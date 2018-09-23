<?php
	$kereta = array("gerbong0", "gerbong1", "gerbong2");
	
	echo $kereta[0]."<br>";
	
	$kumpulan_warna = array("biru", "merah", "kuning");
	
	echo $kumpulan_warna[2];
	
	echo "<hr>";
	
	//perulangan array
	foreach($kumpulan_warna as $warna){
		if($warna != "merah"){
			echo $warna."<br/>";
		}
	}
	
	echo "<hr>";
	
	//perulangan array
	for($i=0; $i<3; $i++){
		echo $kumpulan_warna[$i]."<br/>";
	}
	
	echo "<hr>";
	
	//array dengan string
	$orang = array("nama" => "Tommy", "umur" => 17);
	
	echo $orang["nama"]."<br>";
	echo $orang["umur"]."<br>";
?>