<?php session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
	echo "Username Belum Terdaftar!";
	echo "<a href='index_utama.php'>Back</a>";
}else{
	if($pass == $hasil['password']){
		$_SESSION['username'] = $hasil['username'];
		header('location:index.php');
	} else {
		echo "Password Salah!
		";
		echo "<a href='index_utama.php'>&amp;amp;laquo; Back</a>";
	}
}
?>
