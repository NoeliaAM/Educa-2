<?php
  require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Educa-2 | Registro</title>
<?php include('../includes/links.php'); ?>
</head>
<body>
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper green darken-2">
      <a href="../index.php" class="brand-logo center"><i class="material-icons prefix">class</i>Educa-2</a>      
        </ul>
    </div>
</nav>
</div>

<div class="row">
      <h3 align="center" class="header">¿Quieres tener acceso a todo el con tenido?</h3>
      <h6 align="center">Registrate o Inicia sesion para poder disfrutar de todas las opcines de aprendizaje que te ofrecemos, ¡Es totalmente gratis!</h6>
      <h5 align="center"><i class="small material-icons prefix">supervisor_account</i> Registrate como alumno</h5>
</div>

<div class="container">
<div class="col s12">
    <div class="card horizontal green lighten-4">
      <div class="card-image"><img src="../images/java.jpg"></div>
      <div class="card-stacked">
        <div class="card-content">
            <form action="registro.php" method="POST">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input name="Unombre"  type="text" class="validate"> 
                    <label for="nombreU">Nombre(s)</label>
                  </div>
                  <div class="input-field col s12">
                    <input name="Uapellido" type="text" class="validate">
                    <label for="apellidoU">Apellidos</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input name="Uemail" type="email" class="validate">
                    <label for="emailU" data-error="wrong" data-success="right">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input name="Upassword" type="password" class="validate">
                    <label for="passwordU">Password</label>
                  </div>
                  <div class="card-action center">
                    <button class="btn waves-effect waves-light red lighten-2" type="submit" name="registrarse">Enviar<i class="material-icons right">send</i></button>
                  </div>
                  <p class="center">¿Ya tienes cuenta con nosotros? <a href="log_in.php">Inicia Sesion</a></p>
                  <p class="center">¿Eres profesor? <a href="registrarse_maestros.php">Registrate aqui</a></p>
            </form>
        </div>
      </div>
    </div>
</div>
</div>
<?php include ('../includes/scrips.php'); ?>
<?php include ('../includes/footer.php'); ?>
</body>
</html>
