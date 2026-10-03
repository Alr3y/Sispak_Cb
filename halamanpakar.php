<?php session_start();
if(!ISSET($_SESSION['username'])){

include"koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
 <title>HALAMAN ADMIN</title>

</head>
<body>
   <p align="center">
Login Succses</p>
<a href="logout.php">Logout</a>
<?php
}else{
?>
<script language="JavaScript">alert('Anda tidak boleh mengakses halaman ini, Silahkan login dahulu');
document.location=('index.php')</script>
<?php
}
?>
</body>
</html>
