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
    <blockquote><h3>Ley de Gauss</h3></blockquote>
        <h5>Líneas de campo eléctrico </h5> 
        <p>Las líneas de campo eléctrico se emplean para describir el campo eléctrico en una región del espacio. Para dibujar las líneas de campo eléctrico se deben seguir los siguientes criterios:</p>
        <p>1. Las líneas deben de empezar en cargas positivas y terminar en cargas negativas.</p>
        <p>2. El número de líneas que salen de una carga positiva o que se aproximan a una carga negativa es proporcional al valor de la carga eléctrica.</p>
        <p>3. Las líneas de campo no se pueden cruzar ni tocar</p>
        <p>4. El vector intensidad de campo eléctrico es tangente a las líneas de campo eléctrico en cualquiera de los puntos.</p>
        <h5>Flujo eléctrico</h5>            
        <p>Es una medida del número neto de líneas de campo eléctrico que atraviesan una superficie.<br>En general se define por:</p>
        <center><img src="images/eym/1/e1.png"></center>
        <p>Siendo dA el vector perpendicular a la superficie.</p>
        <p>El flujo eléctrico se mide en<img src="images/eym/1/e2.png">en el S.I.</p>            
        <p>Cuando el campo eléctrico K es uniforme tanto en magnitud como en dirección, las líneas de campo eléctrico que penetran perpendicularmente a una superficie de área A, es proporcional al producto EA, es decir, el flujo eléctrico ∅ se obtiene de:</p>         
        <center><img src="images/eym/1/e3.png"></center>
        <p>Si la superficie a considerar no es perpendicular al campo de manera que forma un ángulo ∅ con la normal a la superficie del área A, el flujo eléctrico a través de la superficie se obtiene:</p>
        <center><img src="images/eym/1/e4.png"></center>
        <p>En estas dos expresiones se resumen si el flujo eléctrico se define como el producto escalar de E y A, es decir:</p>
        <center><img src="images/eym/1/e5.png"></center>
        <p>Esta ley establece que el flujo eléctrico neto, ∅, a través de cualquier superficie  gaussiana(superficie cerrada), es igual a la carga neta dentro de la superficie dividida por <img src="images/eym/1/e6.png">:</p>
        <center><img src="images/eym/1/e7.png"></center>
        <p>Donde <img src="images/eym/1/e8.png"> = carga eléctrica encerrada por la superficie gaussiana. La ley de Guas se utiliza para determinar la intensidad de campo eléctrico debido a distribuciones de carga eléctrica con alto grado de simetría. Esta ley es una de las ecuaciones fundamentales del electromagnetismo.</p>   
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