 <?php
	$educados_host="localhost";
	$educados_user="root";
	$educados_pass="";
	$educados_db="educa-2";

	$conexion=mysqli_connect($educados_host,$educados_user,$educados_pass);
		
		if(mysqli_connect_errno())
		{
			echo '<script> alert("ERROR: No se logro conectar con el host.");</script>';
      		echo '<script> window.location="../index.php";</script>';	
		}
		mysqli_set_charset($conexion,"UTF8");

		mysqli_select_db($conexion,$educados_db) or die ("Error al conectar con la base de datos");  
?>