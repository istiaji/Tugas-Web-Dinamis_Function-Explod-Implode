<?php 
	echo "<b>"."Tugas Web Dinamis 	: Function Explode"."<b>";
	echo "<br>";
	echo "Nama Mahasiswa            : Danang Isti Aji";
	echo "<br>";
	echo "NIM                       : 12181632";
	echo "<br>"."<br>";
	//contoh explode 1
	$warna = "Merah, Kuning, Hijau, Biru, Hitam";
	print_r($warna);
	$pilih_warna = explode(", ", $warna);
	echo '<pre>';print_r($pilih_warna);echo'</pre>';
	echo "_________________________________________________________________________________";
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
	echo "_________________________________________________________________________________";
	echo "<br>"."<br>";


	//contoh explode 3
	$jurusan = "Akuntansi, Jasa_Boga, Multimedia, Animasi, Perbankan_Syariah, Farmasi, Teknik_Otomotif";
	print_r($jurusan);
	$plh_jurusan = explode(", ", $jurusan);
	echo'<pre>';print_r($plh_jurusan);echo'</pre>';
	
	echo "_________________________________________________________________________________";
	echo "<br>"."<br>";
	
	//contoh explode 4
	$kehadiran_siswa = "Hadir, Bolos, Alpha, Ijin, Sakit";
	print_r($kehadiran_siswa);
	$isi_kehadiran = explode(", ", $kehadiran_siswa);
	echo'<pre>';print_r($isi_kehadiran);echo'</pre>';
	
	echo "_________________________________________________________________________________";
	echo "<br>"."<br>";
	
	//contoh explode 5
	$jam = "08:59:19";
	print_r($jam);
	$isi_jam = explode(":", $jam);
	echo'<pre>';print_r($isi_jam);echo'</pre>';
	
	echo "_________________________________________________________________________________";
	echo "<br>"."<br>";
?>
