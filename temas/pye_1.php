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
    <title>Educa-2 | Probabilidad y Estadistica</title>
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
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">equalizer</i><h4>Probabilidad y Estadistica</h4></center></div>   
    <div class="col s12 m12 l10">
    <blockquote><h3>Distribución Binomial</h3></blockquote>
    <p>Si <i>p</i> es la probabilidad de que ocurra un suceso en un solo intento(llamada probabilidad de exito) y <i>q = 1 - q</i> es la probabilidad de que no ocurra en un solo intento (llamada probabilidad de fracaso), entonces la probabilidad de que el proeso ocurra exactamente <i>X</i> veces en <i>N</i> intentos (o sea, <i>X</i> exitos y <i>N - X</i> fracasos) viene nadad por<br>
    <center><img src="images/pye/1/p1.png"></center>
    <p>• El experimento consiste en que <i>n</i> ensayos no se repiten.</p>
    <p>• Cada ensayo produce un resultado que puede ser clasificado como exito o fracaso.</p>
    <p>• La probabilidad de un exito, que se denota como <i>p</i>, permanece constante de un ensayo a otro.</p>
    <p>• Los ensayos que se repiten son independientes.</p>
    <p>Donde su media y varianza se calculan como:</p>
    <p><strong>Media</strong></p>
    <center><img src="images/pye/1/p2.png"></center><br>
    <p><strong>Varianza</strong></p>
    <center><img src="images/pye/1/p2.png"></center>
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="pye_1.php" class="collection-item">Distribucion Binomial</a>
    <a href="pye_2.php" class="collection-item">Distribucion Hipergeometrica</a>
    <a href="pye_3.php" class="collection-item">Distribucion de Poisson</a>
    <a href="pye_4.php" class="collection-item">Desviacion Estandar</a>
    <a href="../simuladores/prob.php" class="collection-item">Simulador</a>
    <a onClick="this.href=aleatorio2()"; class="collection-item">Autoevaluación</a>
    </div>
    </div>
    </div>
</div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>