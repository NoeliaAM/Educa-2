<?php

include('db_archivos.php');

if(isset($_GET['dow'])){
	
	$path2=$_GET['dow'];

	$res2 =mysql_query("SELECT * FROM mathav WHERE path='$path2'");

	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path2).'"');
	header('Content-Length: ' . filesize($path2));
	readfile($path2);

}

?>