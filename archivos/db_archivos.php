<?php
	$educados_host="localhost";
	$educados_user="root";
	$educados_pass="";
	$educados_db="educa-2";

$con= mysql_connect($educados_host,$educados_user,$educados_pass) or die ("Error");
mysql_select_db($educados_db,$con) or die ("Error");

?>