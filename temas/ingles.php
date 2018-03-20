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
    <title>Educa-2 | Inglés</title>
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
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">translate</i><h4>Inglés</h4></center></div>   
        
        <div class="col s0 m1 l1"></div>
        
        <div class="col s12 m10 l10">
            <blockquote><h3>Must and have to</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/w5vVaWgUcZ0" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>Cómo usar YET, STILL y ALREADY</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/w5vVaWgUcZ0" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>Cómo usar: For, Since, Ago</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6RQL7KLaycU" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>Condicionales</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OyxF4grou0Y" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>La voz pasiva</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/080leytixWE" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>Verbos modales: Could, Should, Would</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/M_Qqcp_DoUI" frameborder="0" allowfullscreen></iframe>
            </div>
            <blockquote><h3>Will vs going to</h3></blockquote>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nJX7QKFexoA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col s0 m1 l1"></div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>