<?php 
	//contoh explode 1
	$equipment = "Tali, Sepatu, Tas, Logistik";
	print_r($equipment);
	$isi_equipment = explode(",", $equipment);
	echo '<pre>';print_r($isi_equipment);echo'</pre>';
	echo "_____________________________________________________";
	echo "<br>"."<br>";

	//contoh explode 2
	$tgl="2019-03-24";
	print_r($tgl);
	$isi_tgl = explode("-", $tgl);
	echo '<pre>';print_r($isi_tgl);echo'</pre>';
	$thn=$isi_tgl[0];
	$bln=$isi_tgl[1];
	$tgl=$isi_tgl[2];
	
	echo $tgl."-".$bln."-".$thn."<br>";
	echo "_____________________________________________________";
	echo "<br>"."<br>";


	//contoh explode 3
	$hp = "Samsung, Lenovo, Asus, Oppo, Vivo";
	print_r($hp);
	$isi_hp = explode(" ", $hp);
	echo'<pre>';print_r($isi_hp);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	//contoh explode 4
	$jurusan = "Teknik_Informatika, Sistem_Informatika, Ilmu_Komputer, Bisnis_Ekonomi";
	print_r($jurusan);
	$isi_jurusan = explode(" ", $jurusan);
	echo'<pre>';print_r($isi_jurusan);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	//contoh explode 5
	$jam = "10:28:01";
	print_r($jam);
	$isi_jam = explode(":", $jam);
	echo'<pre>';print_r($isi_jam);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
?>
