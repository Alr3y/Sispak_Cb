<?php
/**
 * Namafile : connect.php 
 * ----------------------------*/
$dbhost = getenv('MYSQL_HOST') ?: 'localhost'; 
$dbuser = getenv('MYSQL_USER') ?: 'root';     // ini berlaku di xampp
$dbpass = getenv('MYSQL_PASSWORD') ?: '';     // ini berlaku di xampp
$dbname = getenv('MYSQL_DATABASE') ?: 'sispak_cb';
// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
else
{
	echo "";
}