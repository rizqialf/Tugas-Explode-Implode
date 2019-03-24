<?php 
	// Contoh Implode 1
	echo "Tanggal"."<br>"."<br>";
	$hari_tanggal = array("Hari"=>"Minggu",
						"Tanggal"=>"24",
						"Bulan"=>"Maret",
						"Tahun"=>"2019");
	print_r($hari_tanggal);
	$tanggal = implode(" ", $hari_tanggal);
	echo '<pre>';print_r($tanggal);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";

	
	// Contoh Implode 2
	echo "Kategori Souvenir"."<br>"."<br>";
	$kategori_souvenir = array("Kategori ke-1"=>"Plakat Akrilik",
								"Kategori ke-2"=>"Plakat Resin",
								"Kategori ke-3"=>"Plakat Kayu",
								"Kategori ke-4"=>"Miniatur");
	print_r($kategori_souvenir);
	$souvenir = implode(" , ", $kategori_souvenir);
	echo '<pre>';print_r($souvenir);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	// Contoh Implode 3
	echo "Cara Pemesanan Produk"."<br>"."<br>";
	$cara_pesan = array("Pertama"=>"Hubungi Marketing Melalui Kontak Yang Tertera",
						"Kedua"=>"Pilih Produk",
						"Ketiga"=>"DP Minimal 20%",
						"Keempat"=>"Barang Dikirim");
	print_r($cara_pesan);
	$pesanan = implode(" -> ", $cara_pesan);
	echo '<pre>';print_r($pesanan);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	// Contoh Implode 4
	echo "Alamat"."<br>"."<br>";
	$alamat = array("Daerah"=>"Jl.Pramuka no 34",
					"Kecamatan"=>"Pandeyan",
					"Kelurahan"=>"Umbulharjo",
					"Kode Pos"=>"55161",
					"Kota"=>"Yogyakarta");
	print_r($alamat);
	$hasil_alamat = implode(", ", $alamat);
	echo'<pre>';print_r($hasil_alamat);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	// Contoh Implode 5
	echo "Jam"."<br>"."<br>";
	$wkt = array("Jam"=>"10",
				 "Menit"=>"29",
				 "Detik"=>"30");
	print_r($wkt);
	$waktu = implode(":", $wkt);
	echo '<pre>';print_r($waktu);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
?>
