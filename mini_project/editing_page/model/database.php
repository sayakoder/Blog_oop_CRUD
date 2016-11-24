<?php  
namespace DB;

class Database
{
	
	function __construct()
	{
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$conn = mysql_connect($host,$user,$pass);
		mysql_select_db('mini_project');

		// mysql_connect("localhost","root","") or die("error koneksi");
		// mysql_select_db("twd_ajaxsearch") or die("error pilih db");
	}
	
}

?>