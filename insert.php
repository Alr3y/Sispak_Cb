<?php
	include "connect.php";

	//Membuat database MySQL
	$nama_tbl = "gejala";
	$nama_db = "sispak_cb";
	
	mysqli_select_db($connect,$nama_db) or die("Koneksi ke $nama_db gagal");

	$insert_data = "INSERT into $nama_tbl (Kode,Nama) VALUES ('$_POST[nimnya]','$_POST[namanya]')";

	$qtbl = mysqli_query($connect, $insert_data);
	if($qtbl)
	{
		echo "<br>Insert Data ke tabel $nama_tbl berhasil";
		echo "<a href='index.php'>Lihat Data</a>";
	}
	else
	{
		echo "<br>Insert Data ke tabel $nama_tbl gagal ";
		echo "<a href='index.php'>Lihat Data</a>";
	}
?>