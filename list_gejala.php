<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="stylesheet" href="header.css">
</head>
<body>
<a href="index.php" class="menu">BERANDA</a> ||
<a href="form_input.html" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#1abc9c">
  <td>NIK</td>
  <td>Nama</td>
  <td>Aksi</td>
  </tr>
  <?php
    include "connect.php";
  	$query = mysqli_query($connect, "SELECT * FROM gejala ") or die (mysqli_error());
    if(mysqli_num_rows($query) == 0)
    {
    echo "<b>Tidak ada data yang tersedia</b>";
    }
    else
    {
    while($data = mysqli_fetch_array($query)):     ?>

 		<tr style="text-align:center">
 		<td><?php echo $data['Kode'] ?></td>
  		<td><?php echo $data['Nama'] ?></td>
  		<td><a href="gejalaform_edit.php?Kode=<?=$data['Kode'];?> ">Edit</a> | <a href="delete.php?Kode= <?=$data['Kode'];?> " 
      onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  		</td>
 		</tr>
 <?php
  	endwhile;
  	}

 ?>
 <a href="forminputuser">Diagnosis</a>

</table>
</form>
</body>
</html>