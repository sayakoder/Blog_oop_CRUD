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
	}
	
}

?>