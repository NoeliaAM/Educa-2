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
    <blockquote><h3>Desviación Estándar</h3></blockquote>
    <p>La desviación estándar es un índice numérico de la dispersión de un conjunto de datos (o población). Mientras mayor es la desviación estándar, mayor es la dispersión de la población. La desviación estándar es un promedio de las desviaciones individuales de cada observación con respecto a la media de una distribución. Así, la desviación estándar mide el grado de dispersión o variabilidad. En primer lugar, midiendo la diferencia entre cada valor del conjunto de datos y la media del conjunto de datos. Luego, sumando todas estas diferencias individuales para      dar el total de todas las diferencias. Por último, dividiendo el resultado por el número total de observaciones (normalmente representado por la letra “n”) para llegar a un promedio de las distancias entre cada observación individual y la media. Este promedio de las distancias es la desviación estándar y de esta manera representa dispersión. </p>
    <p>Matemáticamente, la desviación estándar podría, a primera vista, parecer algo complicada. Sin embargo, es en realidad un concepto extremadamente simple. En realidad no importa si usted no sabe calcular con exactitud la desviación estándar, siempre y cuando usted comprenda claramente el concepto.</p>
    <p>La desviación estándar es un indicador en extremo valioso con muchas aplicaciones. Por ejemplo, los estadísticos saben que cuando un conjunto de datos se distribuye de manera “normal”, el 68% de las observaciones de la distribución tiene un valor que se encuentra a menos de una desviación estándar de la media. También saben que el 96% de todas las observaciones tiene un valor no es mayor a la media más o menos dos desviaciones estándar. </p>  
    <center><img src="images/pye/4/p1.png"></center>
    <p>La desviación estándar de una población es normalmente representada por la letra griega (sigma), cuando se calcula sobre    la base de toda la población; por la letra s (minúscula) cuando se infiere de una muestra; y por la letra S (mayúscula)cuando simplemente corresponde a la desviación estándar de una muestra.</p> 
    <p>La fórmula de la desviación estándar es: <center><img src="images/pye/4/p2.png"></center></p>
    <p>Donde representa la suma de las diferencias al cuadrado entre cada observación y la media y N representa el número total de observaciones. La aparente complicación de la fórmula surge del hecho de que al restar la media a los valores de cada observación individual para calcular las diferencias, los valores de las observaciones que están bajo la media producirán diferencias negativas, mientras que los valores de las observaciones que son mayores que la media proporcionarán valores positivos.</p>
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