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
<div class="slider" id = "slider">
    <ul class="slides">
        <li>
          <img src="../images/math.jpg" href="../temas/math_a1.php">
            <div class="caption center-align" href="../temas/math_a1.php">
                <a href="../temas/math_a1.php" ><h3 class="black-text">Pasa de la teoria a la practica.</h3></a>
                <a href="../temas/math_a1.php"><h5 class="black-text">¡Prueba nuestros simuladores para Series de Fourier!</h5></a>
            </div>
      </li>
        <li>
          <img src="../images/estadistica.jpg" href="../temas/pye_1.php">
            <div class="caption left-align" href="../temas/pye_1.php">
              <a href="../temas/pye_1.php"><h3 class="black-text">Calculos de estadistica.</h3></a>
                <a href="../temas/pye_1.php"><h5 class="black-text">¡No perderas un numero nunca mas!</h5></a>
            </div>
        </li>
        <li>
          <img src="../images/flags.png" href="../temas/ingles.php">
            <div class="caption right-align" href="../temas/ingles.php">
                <a href="../temas/ingles.php"><h3 class="white-text">Que el idioma no te limite.</h3></a>
                <a href="../temas/ingles.php"><h5 class="white-text">Contamos con examenes, y videos que ayudan a tu pronunciacion.</h5></a>
            </div>
        </li>
        <li>
          <img src="../images/applewatch.jpg" href="../archivos/subirarchivo.php">
                <div class="caption right-align" href="../archivos/subirarchivo.php">
              <a href="../archivos/subirarchivo.php"><h3 class="white-text">¿Sin conexion a internet?</h3></a>
                <a href="../archivos/subirarchivo.php"><h5 class="white-text">¡Descarga los archivos PDF y llevalos a todos lados!</h5></a>
            </div>
        </li>
        <li>
          <img src="../images/people.jpg">
            <div class="caption right-align">
                <h3 class="black-text" >¿Dudas sobre el tema de hoy?</h3>
                <h5 class="black-text">Usa nuestro chat para resolver tus preguntas.</h5>
            </div>
        </li>
    </ul>
</div>
<section>
  <div class="row">
    <div class="col s12">      
      <div class="section white">
        <div class="row container">
            <h2 align="center" class="header">Educa-2</h2>
            <h3 align="center">¡No repases mañana lo que puedes repasar hoy!</h3>
              <p class="grey-text text-darken-3 lighten-3" align="center">Pagina creada por estudiantes y para estudiantes Educa-2, donde puede encontrar las herramientas necesarias para ese tema que no logras comprender, ademas de poner a prueba tus conocientosn con nuestros test.<br/>Contamos con simuladores en linea, ya puedes evitar pasar horas en la resolucion de un problema, con unos cuantos clics tendras la respuesta.<br/>Inicia sesion o registate para que puedas disfrutar de todo lo que se te ofrese, chat en linea, sistema de examenes en linara, interaccion, profesor/alumno ¡y mas!<br/>¡Comienza ya!
          </p>
        </div>
  <div class="container">
  <div class="row">
        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
              <img src="../images/teach.jpg">
              <span class="card-title">Profesor</span>
            </div>
            <div class="card-content">
            <p>Registrate como profesor compartir archivos con tus alumnos.<br><br></p>
            </div>
            <div class="card-action">
            <center><a href="../sesion/registrarse_maestros.php" class="waves-effect waves-light btn red lighten-2">Profesores</a></center>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
              <img src="../images/writte - copia.jpg">
              <span class="card-title">Estudiante</span>
            </div>
            <div class="card-content">
              <p>Registrate como estudiante para realizar examenes diagnosticos, subir y descargar archivos y mucho mas.</p>
            </div>
            <div class="card-action">
            <center><a href="../sesion/registrarse.php" class="waves-effect waves-light btn red lighten-2">Alumnos</a></center>
            </div>
          </div>
        </div>
  </div>
  </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="../images/note.jpg"></div>
      </div>
    </div>
</div>
</section>

  <?php include('../includes/scrips.php'); ?>
<?php include('../includes/footer.php') ?>
</body>
</html>