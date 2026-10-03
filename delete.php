<?php
	include "connect.php";

	
	$nama_tbl = "gejala";
	$nama_db = "sispak_cb";
	$nim_pas = $_GET['Kode'];
	
	mysqli_select_db($connect,$nama_db) or die("Koneksi ke $nama_db gagal");

	$delete_data = "DELETE FROM $nama_tbl WHERE `Kode`='$nim_pas'";

	$qtbl = mysqli_query($connect, $delete_data);
	if($qtbl)
	{
		echo "<br>delete Data tabel $nama_tbl berhasil";
		echo "<br><a href='index.php'>Kembali</a>";
	}
	else
	{
		echo "<br>delete Data tabel $nama_tbl gagal ";
		echo "<br><a href='index.php'>Kembali</a>";
	}
?>