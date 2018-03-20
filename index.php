<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="images/icon.ico"/>
  <title>Educa-2 | Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="css/materialize.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?php include('includes/scrips.php'); ?>

<div class="navbar-fixed">
<nav class="nav-extended">
     <div class="nav-wrapper green darken-2">
     <div  class="container">
          <a href="index.php" class="brand-logo"><i class="material-icons prefix">class</i>Educa-2</a> 
          <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>  
            <ul class="right hide-on-med-and-down">
              <li class="active"><a href="sesion/log_in.php">Iniciar Sesion</a></li>
            </ul>
</div>
</div>
</div>
            <ul class="side-nav" id="mobile-demo">
            <li><a href="sesion/log_in.php">Iniciar Sesion <i class="material-icons">launch</i></a></li> 
            </ul>
</nav>
     
<div class="slider" id = "slider">
    <ul class="slides">
        <li>
        	<img src="images/math.jpg" href="temas/math_a1.php">
        		<div class="caption center-align" href="temas/math_a1.php">
          			<a href="temas/math_a1.php" ><h3 class="black-text">Pasa de la teoria a la practica.</h3></a>
          			<a href="temas/math_a1.php"><h5 class="black-text">¡Prueba nuestros simuladores para Series de Fourier!</h5></a>
        		</div>
     	</li>
        <li>
        	<img src="images/estadistica.jpg" href="temas/pye_1.php">
        		<div class="caption left-align" href="temas/pye_1.php">
         			<a href="temas/pye_1.php"><h3 class="black-text">Calculos de estadistica.</h3></a>
          			<a href="temas/pye_1.php"><h5 class="black-text">¡No perderas un numero nunca mas!</h5></a>
      			</div>
        </li>
        <li>
        	<img src="images/flags.png" href="temas/ingles.php">
       			<div class="caption right-align" href="temas/ingles.php">
          			<a href="temas/ingles.php"><h3 class="white-text">Que el idioma no te limite.</h3></a>
          			<a href="temas/ingles.php"><h5 class="white-text">Contamos con examenes, y videos que ayudan a tu pronunciacion.</h5></a>
        		</div>
        </li>
        <li>
       		<img src="images/applewatch.jpg" href="archivos/subirarchivo.php">
                <div class="caption right-align" href="archivos/subirarchivo.php">
         			<a href="archivos/subirarchivo.php"><h3 class="white-text">¿Sin conexion a internet?</h3></a>
          			<a href="archivos/subirarchivo.php"><h5 class="white-text">¡Descarga los archivos PDF y llevalos a todos lados!</h5></a>
       			</div>
      	</li>
      	<li>
        	<img src="images/people.jpg">
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
       			<h3 align="center">¡Siempre al dia!</h3>
      				<p class="grey-text text-darken-3 lighten-3" align="center">Pagina creada por estudiantes y para estudiantes Educa-2, donde puede encontrar las herramientas necesarias para ese tema que no logras comprender, ademas de poner a prueba tus conocimientos con nuestros test.<br/>Contamos con simuladores en linea, ya puedes evitar pasar horas en la resolucion de un problema, con unos cuantos clics tendras la respuesta.<br/>Inicia sesion o registrate para que puedas disfrutar de todo lo que se te ofrese, chat en linea, sistema de examenes en linara, interaccion, profesor/alumno ¡y mas!<br/>¡Comienza ya!
					</p>

     		</div>
	<div class="container">
	<div class="row">

        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
              <img src="images/teach.jpg">
              <span class="card-title">Profesor</span>
            </div>
            <div class="card-content">
            <p>Registrate como profesor para compartir archivos con tus alumnos.<br><br></p>
            </div>
            <div class="card-action">
            <center><a href="sesion/registrarse_maestros.php" class="waves-effect waves-light btn red lighten-2">Profesores</a></center>
            </div>
          </div>
        </div>

        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
              <img src="images/writte - copia.jpg">
              <span class="card-title">Estudiante</span>
            </div>
            <div class="card-content">
              <p>Registrate como estudiante para realizar examenes diagnosticos, subir y descargar archivos y mucho mas.</p>
            </div>
            <div class="card-action">
            <center><a href="sesion/registrarse.php" class="waves-effect waves-light btn red lighten-2">Alumnos</a></center>
            </div>
          </div>
        </div>
	</div>
	</div>

  		</div>

<div class="parallax-container">
    <div class="parallax"><img src="images/note.jpg"></div>

  		</div>
 		</div>
</div>
</section>

<footer class="page-footer green darken-2">
    <div class="container">
    <div class="row">
      <div class="col l6 s12">
          <h5 class="white-text">Educa-2</h5>
          <a href="http://portal.ucol.mx/fie/" target="_blank"><p class="grey-text text-lighten-4">Facultad de Ingenieria Electromecanica.</p></a>  
          <a href="http://portal.ucol.mx/fie/c-15.htm" target="_blank"><p class="grey-text text-lighten-4">Ingenieria en Sistemas Computacionales.</p></a>
      </div>
        <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
                <ul>
                 	<li><img src="images/instagram.png"><a class="grey-text text-lighten-3" href="#!">  Instagram</a></li>
                 	<li><img src="images/facebook.png"><a class="grey-text text-lighten-3" href="#!">  Facebook</a></li>
                    <li><img src="images/twitter.png"><a class="grey-text text-lighten-3" href="#!">  Twitter</a></li>
                </ul>
        </div>
    </div>
    </div>
    <div class="footer-copyright">
    <div class="container" align="center">
    © 2017 UdC. FIE.
    </div>
    </div>
</footer>

</body>
</html>