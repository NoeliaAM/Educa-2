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
	<title>Series de Fourier | Educa-2</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>

  <div class="row">
         		<div class="row container">
      			<h3 align="center" class="header">Simuladores de Series de Fourier</h3>
      				<p class="grey-text text-darken-3 lighten-3" align="center"> Aqui puedes encontrar una lista con 7 Series de Fourier, elige la que necesites e interactua con ella.
					</p>
     		</div>
    </div>

<div class="container">
<div class="row">
<div class="col s12 m12 l12">
            <div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_1.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Tren de pulsos</strong></p>
        </div>
</div>
            </div>
            <div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_2.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim2.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Cuadrada</strong></p>
        </div>
</div>
            </div>
            <div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_3.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim3.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Triangular</strong></p>
        </div>
</div>
            </div>
</div>
</div>
<div class="row">
<div class="col s12 m12 l12">
            <div class="col s12 m3 l3">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_4.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim4.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Dientes de sierra</strong></p>
        </div>
</div>
            </div>
            <div class="col s12 m3 l3">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_5.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim5.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Triangular 2</strong></p>
        </div>
</div>
            </div>
            <div class="col s12 m3 l3">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_6.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim6.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Dientes de sierra 2</strong></p>
        </div>
</div>
            </div>
            <div class="col s12 m3 l3">
<div class="card">
        <div class="card-image">
          <img src="imagen_grafica_7.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="sim7.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Seno rectificado</strong></p>
        </div>
</div>
            </div>
            </div>
</div>
</div>

  <?php include('../includes/footer.php'); ?>
</body>
</html>