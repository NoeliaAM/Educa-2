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
    <blockquote><h3>Distribución de Poisson</h3></blockquote>
    <p>La distribución de probabilidad discreta</p>
    <center><img src="images/pye/3/p1.png"></center>
    <p>donde<img src="images/pye/3/p2.png"> y λ es una constante dada, se llama la distribución de Possion en honor de Siméon-Denis Poisson, que la descubrió a principios del siglo XIX. La distribución de Poisson es definida por un parámetro: lambda (λ). Este parámetro es igual a la media y la varianza. A medida que lambda aumenta, la distribución de Poisson se acerca a una distribución normal. la distribución de Poisson  puede ser utilizada para encontrar el número de veces que un evento ocurre en un espacio finito de observación. Por ejemplo, una distribución de Poisson puede describir el número de defectos en el sistema mecánico de un avión o el número de llamadas a un centro de llamadas. La distribución de Poisson se utiliza con frecuencia en el control de calidad, los estudios de fiabilidad/supervivencia y los seguros. Una variable sigue una distribución de Poisson si se cumplen las siguientes condiciones:</p>
    <p>• Los datos son conteos de eventos (enteros no negativos, sin límite superior).</p>
    <p>• Todos los eventos son independientes.</p>
    <p>Donde la media y la varianza se calcula como:</p>
    <p><strong>Media y Varianza</strong></p>
    <center><img src="images/pye/3/p3.png"></center>
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