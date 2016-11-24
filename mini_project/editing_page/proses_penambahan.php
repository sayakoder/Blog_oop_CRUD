<?php 
require_once('model\fungsix.php');

use Model\fungsi as fungsi;

$fungsi = new fungsi;

$param = array(
	'nama' => $_POST['jeneng'],
	'alamat' => $_POST['alamat'],
	'kelamin' => $_POST['kelamin'],
	'mata_pelajaran' => $_POST['pelajaran'],
	'nilai' => $_POST['nilai']
);

//________________________________________query dibawah
$siswa = $fungsi->tambah_data_siswa($param);

$param['id_siswa'] = $siswa;

$fungsi->tambah_data_nilai($param);

header("location: indexx.php");
?>