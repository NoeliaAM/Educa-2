<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path7=$_GET['dow'];

	$res7 =mysql_query("SELECT * FROM ingles WHERE path='$path7'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path7).'"');
	header('Content-Length: ' . filesize($path7));
	readfile($path7);

}

?> 