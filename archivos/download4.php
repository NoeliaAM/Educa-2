<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path4=$_GET['dow'];

	$res4 =mysql_query("SELECT * FROM probayestadistica WHERE path='$path4'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path4).'"');
	header('Content-Length: ' . filesize($path4));
	readfile($path4);

}

?> 