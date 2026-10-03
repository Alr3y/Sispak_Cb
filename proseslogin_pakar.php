<?php
include "connect.php";

$id = $_POST['id'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM pakar WHERE id = '$id' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['id'] == $id AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['id'] = $row['id'];
  $_SESSION['password'] = $row['password'];
  header('location:dashboardp.php');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        id atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";

}
?>