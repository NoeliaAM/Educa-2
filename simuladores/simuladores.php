<?php
  session_start();
  require("../sesion/conexion.php");
  if(!$_SESSION['inicio_sesion']){ 
    echo '<script> alert("Inicie Sesion o Registrese para acceder a todo el contenido.");</script>';
    echo '<script> window.location="../index.php";</script>';
  }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simuladores | Educa-2</title>
    <?php include('../includes/links.php'); ?>
</head>
<body>
    <?php include('../includes/scrips.php'); ?>
    <?php include('../includes/navbar.php'); ?>

  <div class="row">
         		<div class="row container">
      			<h3 align="center" class="header">Simuladores</h3>
      				<p class="grey-text text-darken-3 lighten-3" align="center">Practica lo aprendido con nuestros simuladores.</p>
     		</div>
    </div>

<div class="container">
<div class="row">
	<div class="col s12 m6 l6">
		<div class="card">
        <div class="card-image">
          <img src="fourier.png">
          <span class="card-title">Series de Fourier</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="menu.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>7 Series de Fourier con Periodo, Amplitud y Armonicos modificables.</p>
        </div>
		</div>
	
		<div class="card">
        <div class="card-image">
          <img src="rubik.jpg">
          <span class="card-title">Permutaciones y Combinaciones</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="math_d.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Calculos para permutaciones, combinaciones, factorial y sucesion Fibonacci.</p>
        </div>
		</div>	
	</div>

<div class="col s12 m6 l6">
		<div class="card">
        <div class="card-image">
          <img src="tables.jpg">
          <span class="card-title">Distribucion de frecuencia</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="prob.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Tabla de distribucion de frecuencia, histograma y grafica circular de frecuencias, con datos modificables.</p>
        </div>
		</div>

		<div class="card">
        <div class="card-image">
          <img src="circuits.jpg">
          <span class="card-title">Circuitos</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="electricidad_menu.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Visualizacion de un circuito electrico, y calculo de corriente en las resistencias.</p>
        </div>
	</div>
		
</div>
</div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>