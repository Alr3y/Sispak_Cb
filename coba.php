<?php
	include "connect.php";

	
	$nama_tbl = "user";
	$nama_db = "sispak_cb";
	$nim_pas = $_GET['id'];
	
	mysqli_select_db($connect,$nama_db) or die("Koneksi ke $nama_db gagal");
	echo $nim_pas;
?>
<html>
	<head>
		<title>Formulir Input Data</title>
	</head>
	<body>
		<h1>Masukkan Data Anda</h1>
		<form method=post action=insertuser.php>
			<table>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type=text name=namanya size=50 required></td>
				</tr>
				<tr>
					<td align=center>
						<input type=submit name=submit value=Simpan>
					</td>
					<td align=center>
						<input type=reset name=reset value=Ulangi>
					</td>
				</tr>
			</table>
		</form>
		<a href='readuser.php'>Kembali</a>
	</body>
</html>