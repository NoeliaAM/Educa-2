<?php
  session_start();
  require("conexion.php");

 if (isset($_POST['registrarse']) && $_POST['Unombre']!="" && ['Uapellido']!="" && ['Uemail']!="" && ['Upassword']!="") {
 	$nombre_usuario2=$_POST['Unombre'];
 	$apellido_usuario2=$_POST['Uapellido'];
 	$email_usuario2=$_POST['Uemail'];
 	$password_usuario2=$_POST['Upassword'];
 	//$Hash=password_hash($password_usuario1, PASSWORD_BCRYPT);

 	$sqlverify="SELECT * FROM registro_alumnos WHERE email_alumno='$email_usuario1'";

 	$verify=mysqli_query($conexion,$sqlverify);

 	$contar=mysqli_num_rows($verify);

 	if($contar==1){
 		echo '<script> alert("Cuenta de correo ya reguistrada.");</script>';
      	echo '<script> window.location="registrarse.php";</script>';	
 	}else{
        $sql="INSERT INTO registro_profesores( id_profesor, nombre_profesor, apellido_profesor, email_profesor, password_profesor) VALUES ('', '$nombre_usuario2','$apellido_usuario2','$email_usuario2','$password_usuario2')";

 	    $resultado=mysqli_query($conexion,$sql);
        $_SESSION['inicio_sesion']=$nombre_usuario2;
        $_SESSION['nombre']=$nombre_usuario2;
      	echo '<script> window.location="inicionuevo_maestro.php";</script>';
 	}
 }else{
	echo '<script> alert("Llena todos los campos.");</script>';
    echo '<script> window.location="registrarse.php";</script>';	
 }
?>