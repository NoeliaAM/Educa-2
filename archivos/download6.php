<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path6=$_GET['dow'];

	$res6 =mysql_query("SELECT * FROM electricidad WHERE path='$path6'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path6).'"');
	header('Content-Length: ' . filesize($path6));
	readfile($path6);

}
 
?>