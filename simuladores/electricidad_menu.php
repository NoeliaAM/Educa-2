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
	<title>Simulador Electricidad y Magnetismo | Educa-2</title>
    <?php include('../includes/links.php'); ?>
</head>
<body>
    <?php include('../includes/scrips.php'); ?>
    <?php include('../includes/navbar.php'); ?>

  <div class="row">
            <div class="row container">
            <h3 align="center" class="header">Electricidad y Magnetismo</h3>
              <p class="grey-text text-darken-3 lighten-3" align="center">Practica lo aprendido, practicando tus respuestas en nuestros ejercios dinamicos, tambien diviertete explorando los simuladores.</p>
        </div>
    </div>
	
<div class="container">
<div class="row">
  <div class="col s12 m6 l6">
    <div class="card">
        <div class="card-image">
          <img src="proto1.png">
          <span class="card-title">Simuladores interactivos</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="menu_sim1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Interactua con con los simuladores que tenemos para ti, ningun conocimiento esta completo sin la parte visual.</p>
        </div>
    </div>
    </div>
    <div class="col s12 m6 l6">
    <div class="card">
        <div class="card-image">
          <img src="resistencias.png">
          <span class="card-title">Ejercicios con circuitos.</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="electricidad.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Serie de circuitos y como se resuelven, tu mismo puedes ingresar los valores y ver el procedimiento.</p>
        </div>
    </div>  
  </div>
  </div>
  </div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>