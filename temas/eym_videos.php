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
    <title>Educa-2 | Electricidad y Magnetismo</title>
    <?php include('../includes/links.php'); ?>
</head>

<body style="text-align: justify">
    <?php include('../includes/scrips.php'); ?>
    <?php include('../includes/navbar.php'); ?>

<div class="row">
    <div class="col s12 m12 l2">
    <center><h5>Materias:</h5></center>
    <div class="collection">
    <a href="math_a1.php" class="collection-item">Matematicas Avanzadas</a>
    <a href="pye_1.php" class="collection-item">Probabilidad y Estadistica</a>
    <a href="edd_1.php" class="collection-item">Estructura de Datos</a>
    <a href="math_d1.php" class="collection-item">Matematicas Discretas</a>
    <a href="eym_1.php" class="collection-item">Electricidad y Magnetismo</a>
    <a href="ingles.php" class="collection-item">Ingles</a>
    </div>
    </div>

    <div class="col s12 m12 l10">
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">settings_input_composite</i><h4>Electricidad y Magnetismo</h4></center></div>   
    <div class="col s12 m12 l10">
    <blockquote><h3>Experimentos Electromagneticos</h3></blockquote>
            <div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/SuTW1Lrcig4" frameborder="0" allowfullscreen></iframe>
            </div>
        
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="eym_1.php" class="collection-item">Ley de Gauss</a>
    <a href="eym_2.php" class="collection-item">Ley de Ohm</a>
    <a href="eym_3.php" class="collection-item">Ley de Coulomb</a>
    <a href="eym_videos.php" class="collection-item">Videos</a>
    <a href="../simuladores/electricidad_menu.php" class="collection-item">Simulador</a>
    <a onClick="this.href=aleatorio5()"; class="collection-item">Autoevaluación</a>
    </div>
    </div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>