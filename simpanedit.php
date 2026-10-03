<?php
	include "connect.php";

	//Membuat database MySQL
	$nama_tbl = "gejala";
	$nama_db = "sispak_cb";
	
	mysqli_select_db($connect,$nama_db) or die("Koneksi ke $nama_db gagal");

	$update_data = "UPDATE $nama_tbl SET `Nama`='$_POST[namanya]' WHERE `Kode`='$_POST[nimnya]'";

	$qtbl = mysqli_query($connect, $update_data);
	if($qtbl)
	{
		echo "<br>Update Data tabel $nama_tbl berhasil";
		echo "<br><a href='index'>Kembali</a>";
	}
	else
	{
		echo "<br>Update Data tabel $nama_tbl gagal ";
		echo "<br><a href='index'>Kembali</a>";
	}
?>