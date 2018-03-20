<?php
  session_start();
  require("conexion.php");

 if (isset($_POST['registrarse']) && $_POST['Unombre']!="" && ['Uapellido']!="" && ['Uemail']!="" && ['Upassword']!="") {
 	$nombre_usuario1=$_POST['Unombre'];
 	$apellido_usuario1=$_POST['Uapellido'];
 	$email_usuario1=$_POST['Uemail'];
 	$password_usuario1=$_POST['Upassword'];
 	//$Hash=password_hash($password_usuario1, PASSWORD_BCRYPT);

 	$sqlverify="SELECT * FROM registro_alumnos WHERE email_alumno='$email_usuario1'";

 	$verify=mysqli_query($conexion,$sqlverify);

 	$contar=mysqli_num_rows($verify);

 	if($contar==1){
 		echo '<script> alert("Cuenta de correo ya reguistrada.");</script>';
      	echo '<script> window.location="registrarse.php";</script>';	
 	}else{
        $sql="INSERT INTO registro_alumnos( id, nombre_alumno, apellido_alumno, email_alumno, password_alumno) VALUES ('', '$nombre_usuario1','$apellido_usuario1','$email_usuario1','$password_usuario1')";

 	    $resultado=mysqli_query($conexion,$sql);
        $_SESSION['inicio_sesion']=$nombre_usuario1;
        $_SESSION['nombre']=$nombre_usuario1;
      	echo '<script> window.location="inicionuevo.php";</script>';
 	}
 }else{
	echo '<script> alert("Llena todos los campos.");</script>';
    echo '<script> window.location="registrarse.php";</script>';	
 }
?>