<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path3=$_GET['dow'];

	$res3 =mysql_query("SELECT * FROM mathdis WHERE path='$path3'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path3).'"');
	header('Content-Length: ' . filesize($path3));
	readfile($path3);

}

?>