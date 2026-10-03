<?php
 /************************************************
 Source code by : Name : Ahmad Zaelani
                  Blog : http://root93.blogspot.com
                  Thanks for using code :)
 **************************************************/
include"connect.php";
#jika ditekan tombol login
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "sispak_cb");
$sql = mysqli_query($conn,"SELECT * FROM admin WHERE id='$id' AND password='$password'");
$num = mysqli_num_rows($sql);

if(isset($_POST['Login'])) {
$id = $_POST['id'];
$password = $_POST['password'];
$sql = mysqli_query("SELECT * FROM admin WHERE id='$id' &&
password=('$password')");
$num = mysqli_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['id'] = $id;
$_SESSION['password'] = $password;
?>
<script language="JavaScript">alert('LOGIN SUKSES');
document.location=('halamanadmin.php')</script>
<?php
}
else {
// jika login salah //
echo "<script>
eval(\"parent.location='loginpakar.php '\");
alert (' Maaf Login Gagal, Silahkan Isi id dan Password Anda Dengan Benar');
</script>";
}
}
?>