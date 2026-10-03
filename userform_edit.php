<html>
	<head>
		<title>Formulir Edit Data</title>
	</head>
	<body>
		<?php
			include "connect.php";
			$nama_tbl = "user";

			$tampil = "SELECT * FROM $nama_tbl where `id`='$_GET[id]'";
			$sql = mysqli_query($connect, $tampil);

			while($data = mysqli_fetch_array($sql))
			{
				$nimnya  = $data['id'];
				$namanya = $data['nama'];
			}
		?>
		<h1>Masukkan Data Anda</h1>
		<form method='post' action='usersimpanedit'>
			<table border="1" cellspacing="0" cellpadding="4">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type='text' name='nimnya'  value="<?=$nimnya;?>" readonly></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type='text' name='namanya'  value="<?=$namanya;?>" required></td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="submit" value="Simpan Edit">
					</td>
				</tr>
			</table>
		</form>
		<a href='daftar_data.php'>Kembali</a>
	</body>
</html>