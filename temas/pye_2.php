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
    <blockquote><h3>Distribución Hipergeometrica</h3></blockquote>
    <p>La distribution hipergeometrica es una distribución discreta que modela el número de eventos en una muestra de tamaño fijo cuando usted conoce el número total de elementos en la población de la cual proviene la muestra. Cada elemento de la muestra tiene dos resultados posibles (o es un evento o un no evento). Las muestras no tienen reemplazo, por lo que cada elemento de la muestra es diferente. Cuando se elige un elemento de la población, no se puede volver a elegir. Por lo tanto, la probabilidad de que un elemento en particular sea seleccionado aumenta con cada ensayo, suponiendo que aún no ha sido seleccionado.
    <center><img src="images/pye/2/p1.jpg"></center>
    <p>Utilice la distribución hipergeométrica para muestras obtenidas de poblaciones relativamente pequeñas, sin reemplazo. Por ejemplo, esta distribución se utiliza en la prueba exacta de Fisher para probar la diferencia entre dos proporciones y en muestreos de aceptación por atributos cuando se toman muestras de un lote aislado de tamaño finito.</p> 
    <p>La distribución hipergeométrica es descrita por 3 parámetros: tamaño de la población, conteo de eventos en la población y tamaño de la muestra.</p>
    <p>Por ejemplo, usted recibe un envío de pedido especial de 500 etiquetas. Supongamos que el 2% de las etiquetas tiene defectos. El conteo de eventos en la población es de 10 (.02 * 500). Usted toma una muestra de 40 etiquetas y desea determinar la probabilidad de que haya 3 o más etiquetas defectuosas en esa muestra. </p> 
    <center><img src="images/pye/2/p2.png"></center>
    <p>La probabilidad de que haya 3 o más etiquetas defectuosas en la muestra es de 0.0384.</p>
    <p>El numero de exitos en una muestra aleatoria de tamaño <strong>n</strong> que se selecciona de <strong>N</strong> articulos en los que <strong>K</strong> se denomina exito y <strong>N-K</strong> fracaso es: </p>
    <center><img src="images/pye/2/p3.png"></center>
    <p>para<p/>
    <center><img src="images/pye/2/p4.png"></center>
    <p>Donde su media y varianza son:</p>
    <p><strong>Media</strong></p>
    <center><img src="images/pye/2/p5.png"></center>
    <p><strong>Media</strong></p>
    <center><img src="images/pye/2/p6.png"></center>
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