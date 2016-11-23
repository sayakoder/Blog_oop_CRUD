<?php 
require_once('model/fungsix.php');

use Model\fungsi as fungsi;

$fungsi = new fungsi;

$data2 = $fungsi->delete();

header('location: indexx.php');
?>