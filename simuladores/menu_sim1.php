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
	<title>Simuladores E. y Magnetismo | Educa-2 </title>
    <?php include('../includes/links.php'); ?>

</head>
<body>
    <?php include('../includes/scrips.php'); ?>
    <?php include('../includes/navbar.php'); ?>
	
<div class="row">
	<div class="col s12 m8 l8">
	<center><h3><strong>Simulador Ley de Ohm</strong></h3></center>
		<div class="card-panel green lighten-2">
			<iframe src="https://phet.colorado.edu/sims/html/ohms-law/latest/ohms-law_es.html" height="500" width="100%" allowfullscreen></iframe>
		</div>
	</div>
	
	<div class="col s12 m4 14">
		<div class="card-panel green darken-2">
			<div class="card-panel green lighten-3">
			<div class="card-panel  red lighten-2">
				<a href="menu_sim2.php"><img class="responsive-img" src="bateria.png"></a>
			</div>
				<center><h5><strong>Voltaje de Bateria</strong></h5></center>
			</div>
			<div class="card-panel green lighten-3">
			<div class="card-panel red lighten-2">
				<a href="menu_sim3.php"><img class="responsive-img" src="resistencia.png"></a>
			</div>
				<center><h5><strong>Resistencia en un alambre</strong></h5></center>
			</div>
			<div class="card-panel green lighten-3">
			<div class="card-panel red lighten-2">
				<a href="menu_sim4.php"><img class="responsive-img" src="campo.png"></a>
			</div>
				<center><h5><strong>Campo Electrico</strong></h5></center>
			</div>
			<div class="card-panel green lighten-3">
			<div class="card-panel red lighten-2">
				<a href="menu_sim5.php"><img class="responsive-img" src="iman.png"></a>
			</div>
				<center><h5><strong>Generador</strong></h5></center>
			</div>
		</div>
	</div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>