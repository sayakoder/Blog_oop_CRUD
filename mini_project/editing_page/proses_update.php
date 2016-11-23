<?php 
require_once('model/fungsix.php');

use Model\fungsi as fungsi;

$fungsi = new fungsi;

$param = array(
	'id' => $_POST['id'],
	'id2' => $_POST['id_nilai'],
	'nama' => $_POST['jeneng'],
	'alamat' => $_POST['alamat'],
	'kelamin' => $_POST['kelamin'],
	'mata_pelajaran' => $_POST['pelajaran'],
	'nilai' => $_POST['nilai']
);

$fungsi->updateSiswa($param);
$fungsi->updateNilai($param);

header("location: indexx.php");

?>
