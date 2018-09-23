<?php
	$angka1 = 5;
	$angka2 = 5;
	
	if($angka1 != $angka2){
		echo "Angkanya tidak sama";
	}else{
		echo "Angka sama";
	}
	
	echo "<br/>";
	
	$nama = "Tommy";
	$cekNama = "Tommy";
	
	if($nama == $cekNama){
		echo "Orang itu benar Tommy!";
	}
	
	echo "<br/>";
	
	$angka1 = 5;
	$angka2 = 10;
	
	if($angka1 > $angka2){
		echo "Angka 1 lebih besar dari angka 2";
	}else{
		echo "Angka 2 lebih besar dari angka 1";
	}
	
	echo "<br/>";
	
	$angka1 = 50;
	//salah satu kondisi harus terpenuhi
	if($angka1 == 10 || $angka1 == 20){
		echo "Boleh masuk";
	}else{
		echo "Tidak boleh masuk";
	}
	
	echo "<br/>";
	
	$angka1 = 50;
	$angka2 = 20;
	$angka3 = 30;
	
	//semua kondisi harus terpenuhi
	if($angka1 == 10 && $angka2 == 20 && $angka3 == 30){
		echo "Masuk pak eko!";
	}else{
		echo "Tidak masuk pak eko!";
	}
	
	echo "<br/>";
	
	$nama1 = "Tommy ";
	$nama2 = "Handoko";
	
	echo "$nama1 $nama2";
?>