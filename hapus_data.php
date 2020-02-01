<?php
	//Ambil koneksi.php
	include "koneksi.php";

	//ambil parameter url : id
	$judul = $_GET['judul'];

	//1. koneksi server database
	//$koneksi = new mysqli($host, $user, $pass, $db) or die("Koneksi Database Gagal");

	//2. buat sql
	$sql = " DELETE FROM `properti` WHERE `properti`.`judul` = '$judul' ";

	//3. mmebuat query
	$hasil = $koneksi->query($sql);


	if($hasil)
	{
		echo "<script type='text/javascript'>alert('Property data successfully deleted!');
		window.location='tampil_semua_properti.php';
		</script>";
	}

	else
	{
		echo "<script type='text/javascript'>alert('Property data failed to delete, please try again!');
		window.location='tampil_semua_properti.php';
		</script>";
	}
	
?>