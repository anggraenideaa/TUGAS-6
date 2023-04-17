<?php
date_default_timezone_set("Asia/Jakarta");
//N -> urutan hari, Sabtu, 1=> Senin, 2=> Selasa, 6=> Sabtu
$waktu = date('N j/n/Y H:i:s');
function tanggal_indonesia($waktu){
	$nama_hari = array(1=> 'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
	$nama_bulan = array(1=>'Januri','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

	$pisah_waktu = explode(" ",$waktu);
	$hari = $pisah_waktu[0];
	$tanggal = $pisah_waktu[1];
	$jam = $pisah_waktu[2];

	$hari_baru = $nama_hari[$hari];
	$pisah_tanggal = explode("/", $tanggal);
	$tanggal_baru = $pisah_tanggal[0]." ".$nama_bulan[$pisah_tanggal[1]]." ".$pisah_tanggal[2];
	return $hari_baru.", ".$tanggal_baru. " pukul ". $jam. " WIB";
}

$aktivitas = tanggal_indonesia($waktu);
?>