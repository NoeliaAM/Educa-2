<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path5=$_GET['dow'];

	$res5 =mysql_query("SELECT * FROM estructura WHERE path='$path5'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path5).'"');
	header('Content-Length: ' . filesize($path5));
	readfile($path5);

}

?> 