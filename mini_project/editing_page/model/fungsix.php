<?php  
namespace Model;
include 'database.php';
use DB\Database as Database;
/**
* 
*/
class fungsi extends Database
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getEmbohLList($search = ''){
		$sql = 'select
		siswa.id_siswa, 
		siswa.nama,
		siswa.alamat,
		siswa.kelamin,
		nilai.nilai,
		matpel.nama_pelajaran
		from 
		siswa,nilai,matpel
		where
		siswa.id_siswa=nilai.id_siswa
		and 
		matpel.id_matpel=nilai.id_matpel';
		if (@$search) {
			$search =$search;
			$sql = $sql ." and (siswa.nama like '%{$search}%' or
			nilai.nilai like '%{$search}%')";
		}

		$result = mysql_query($sql);

		return $result;
	}

	function getNilai($id = '') {
		$sql_nilai = "select * from nilai where id_siswa= $id ";
		$result_nilai = mysql_query($sql_nilai);
		$data_nilai = mysql_fetch_array($result_nilai);

		return $data_nilai;
	}

	public function getPelajaran()
	{
		$sql_pelajaran = "select * from matpel";
		$result_pelajaran = mysql_query($sql_pelajaran);

		return $result_pelajaran;
	}

	public function getSiswa($id='')
	{
		$sql_siswa = "select * from siswa where id_siswa= $id";
		$result_siswa = mysql_query($sql_siswa);
		$data_siswa = mysql_fetch_array($result_siswa);

		return $data_siswa;
	}


	public function updateSiswa($param='')
	{
		$nama = $param['nama'];
		$alamat = $param['alamat'];
		$kelamin = $param['kelamin'];
		$id = $param['id'];
		
		$sql=mysql_query("update siswa set nama = '$nama', alamat = '$alamat', kelamin='$kelamin' 
			where id_siswa =$id");
	}

	public function updateNilai($param='')
	{
		$mata_pelajaran = $param['mata_pelajaran'];
		$nilai = $param['nilai'];
		$id = $param['id'];
		$id2 = $param['id2'];
		$sql2=mysql_query("update nilai set id_matpel='$mata_pelajaran',nilai='$nilai' where id_siswa=$id and id_nilai=$id2");
	}

	public function tambah_data_siswa($param='')
	{
		$nama = $param['nama'];
		$alamat = $param['alamat'];
		$kelamin = $param['kelamin'];

		$sql = "insert into
		siswa(nama,alamat,kelamin)
		values
		('$nama','$alamat','$kelamin')";
		mysql_query($sql);

		$id_siswa = mysql_insert_id();
		return $id_siswa;	
	}

	public function tambah_data_nilai($param='')
	{
		$mata_pelajaran = $param['mata_pelajaran'];
		$nilai = $param['nilai'];
		$id_siswa = $param['id_siswa'];
		

		$sql2 = "insert into
		nilai(id_siswa,id_matpel,nilai)
		values
		($id_siswa,'$mata_pelajaran','$nilai')";
		mysql_query($sql2);

	}

	public function penjelasan()
	{
		$id = $_GET['id'];
		$sql = "select 
		siswa.nama,
		siswa.alamat,
		siswa.kelamin,
		nilai.nilai,
		matpel.nama_pelajaran
		from 
		siswa,nilai,matpel
		where
		siswa.id_siswa='$id' and
		siswa.id_siswa=nilai.id_siswa
		and 
		matpel.id_matpel=nilai.id_matpel
		";
		return $result = mysql_query($sql);
		
	}

	public function delete()
	{
		$id = $_GET['id'];
		$sql = "delete from siswa where id_siswa = '$id'";
		$qql = "delete from nilai where id_siswa = '$id'";


		mysql_query($sql);
		mysql_query($qql);
	}

	public function upload()
	{
		// echo "<pre>";
		// print_r ($_FILES);
		// echo "</pre>";
		$uploaddir = 'file/';
		$namafile = '_wawan.png';
		$uploadfile = $uploaddir . $namafile;
		// echo '<pre>';
		if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploadfile)) {
			echo "file anda berhasil di upload.<br>";
			echo "<a href=upload_image.php>kembali</a>";
		} else {
			echo "Possible file upload attack!<br>";
		}

		header("location:upload_image.php");
		// ___________________untuk menghapus file
		// unlink($uploadfile);
		// unlink('file/18.jpg');
	}
}


?>