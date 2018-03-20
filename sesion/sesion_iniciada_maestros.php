<?php
  session_start();
  require("conexion.php");

if(isset($_POST['inicio_sesion']))
{
  if($_POST['Uemail']!="" && $_POST['Upassword']!="")
  {
      $mail=$_POST['Uemail'];
      $pass=$_POST['Upassword'];
     // $passhash=password_hash($pass, PASSWORD_BCRYPT);

      $consulta="SELECT * FROM registro_alumnos WHERE email_alumno='$mail' AND password_alumno='$pass'";

      $resultado2=mysqli_query($conexion,$consulta);
      $contar2=mysqli_num_rows($resultado2);

      if($contar2==1)
      {
      $_SESSION['inicio_sesion']=$mail;
        echo '<script> window.location="pagina_principal.php";</script>';
      }
      else
      {
      echo '<script> alert("Correo o contraseña incorrectos");</script>';
      echo '<script> window.location="log_in.php";</script>';
      }

  }
  else
  {
    echo '<script> alert("Llene los campos");</script>';
    echo '<script> window.location="log_in.php";</script>';
  }
}
?>