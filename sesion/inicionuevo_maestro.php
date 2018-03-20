<?php
  session_start();
  require("conexion.php");
  if(!$_SESSION['inicio_sesion']){
    echo '<script> alert("Inicie Sesion o Registrese para acceder a todo el contenido.");</script>';
    echo '<script> window.location="../index.php";</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Educa-2 | Inicio</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>
</nav>
<center><h3>Los profesores tambien son bienvenidos a la familia Educa-2</h3></center>
<div class="container">
 <p align="center">Ahora que ya eres parte de Educa-2 puedes disfrutar de todos los beneficios que esto tiene para ti, puedes disfrutar de todo el contenido. <br><br></p>
</div>
<div class="container">
<div class="row">
<div class="col s12 m12 l12">
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <a href="../temas/ingles.php" class="black-text"><i class="large material-icons">video_library</i></a>
                <p class="promo-caption">Videos</p>
                <p class="light center">No todo es texto, puedes ver los videos que tenemos para ti ¡existen muchas formas de aprender!</p>
                <a class="waves-effect waves-light btnred lighten-2" href="../temas/ingles.php"><i class="material-icons right">trending_flat</i>Ir</a>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <a href="../archivos/subirarchivo.php" class="black-text"><i class="large material-icons">perm_media</i></a>
                <p class="promo-caption">Archivos</p>
                <p class="light center">Descarga los archivos que los estudiantes comparten, ¡Tu tambien puedes compartir archivos con ellos!</p>
                <a class="waves-effect waves-light btn red lighten-2" href="../archivos/subirarchivo.php"><i class="material-icons right">trending_flat</i>Ir</a>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <a href="../temas/menu_temas.php" class="black-text"><i class="large material-icons">view_quilt</i></a>
                <p class="promo-caption">Consultar infomación</p>
                <p class="light center">Contamos con una serie de 6 materias que te puedes resultar muy interesantes.</p>
                <a class="waves-effect waves-light btn red lighten-2" href="../temas/math_a1.php"><i class="material-icons right white-text">trending_flat</i>Ir</a>
              </div>
            </div>
</div>
</div>
<div class="row">
<div class="col s12 m12 l12">
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <a href="../temas/math_a1.php" class="black-text"><i class="large material-icons" class="black-text">done</i></a>
                <p class="promo-caption">Examenes en linea</p>
                <p class="light center">Despues de consultar nuestra infomacion y videos, puedes realizar los examenes que tenemos para ti.</p>
                <a class="waves-effect waves-light btn red lighten-2" href="../temas/math_a1.php"><i class="material-icons right">trending_flat</i>Ir</a>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <a href="../simuladores/simuladores.php" class="black-text"><i class="large material-icons">equalizer</i></a>
                <p class="promo-caption">Simuladores en linea</p>
                <p class="light center">Explora la serie de simuladores de series de Fourier que tenemos para ti.</p>
                <a class="waves-effect waves-light btn red lighten-2" href="../simuladores/menu.php"><i class="material-icons right">trending_flat</i>Ir</a>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                <i class="large material-icons">send</i>
                <p class="promo-caption">Chat en linea</p>
                <p class="light center">¿Necesitas ayuda? ¿Tienes alguna duda sobre el funcionamiento de la pagina? Consulta a nuestros asesores de una forma facil y rapida.</p>
              </div>
            </div>
</div>
</div>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>