<?php session_start();
if(!isset($_SESSION['username'])) {
	header('location:index_utama.php'); }
	else { $username = $_SESSION['username']; }
	require_once("koneksi.php");
	$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
	$hasil = mysql_fetch_array($query);
	?>

	<center>
		<?php echo 
		"<h2>
		Selamat Datang, 
		$username
	</h2>"; 
	?>
	<a href="../editing_page/indexx.php">
		<b>
			Lanjutkan
		</b>
	</a>
	<br>
	<a href="logout.php">
		<b>
			Logout
		</b>
	</a>
</center>