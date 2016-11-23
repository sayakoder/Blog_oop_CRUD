<?php $host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "mini_project"; 
$konek = mysql_connect($host, $user, $pass) 
or die ('Koneksi Gagal! '); 
mysql_select_db($db); ?>
