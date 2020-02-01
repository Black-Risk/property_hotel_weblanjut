<?php
	include "koneksi.php";

	$judul = $_POST['judul'];
    $alamat = $_POST['alamat'];
    $spesifikasi = $_POST['spesifikasi'];
    $jenis_properti = $_POST['jenis_properti'];         
    $harga = $_POST['harga'];
    $foto_rmh = $_POST['foto_rmh'];
    $jml_kamartdr = $_POST['jml_kamartdr'];
    $jml_wc = $_POST['jml_wc'];
    $email_agen = $_POST['email_agen'];

	$sql = " UPDATE `properti` SET `judul` = '$judul', `alamat` = '$alamat', `spesifikasi` = '$spesifikasi', `jenis_properti` = '$jenis_properti', `harga` = '$harga', `foto_rmh` = '$foto_rmh', `jml_kamartdr` = '$jml_kamartdr', `jml_wc` = '$jml_wc' WHERE `pemadam`.`judul` = '$judul' ";

	$hasil = $koneksi->query($sql);

	if($sql)
	{
		echo "<script type='text/javascript'>alert('Property data has been successfully changed')
		window.location='tampil_semua_properti.php';</script>";
		//header('Location: home.php'); 
	}

	else
	{
		echo "<script type='text/javascript'>alert('Property data failed to change, please try again later!')
		/*window.location='tampil_semua_properti.php'*/;</script>";
		//history.go(-1);
	}


?>