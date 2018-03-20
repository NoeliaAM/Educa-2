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
    <blockquote><h3>Ley de Ohm</h3></blockquote>
    <p>Corriente eléctrica es un flujo de carga eléctricas.</p>
    <p>Intensidad de corriente eléctrica es la cantidad de carga eléctrica que atraviesa la sección transversal de un conductor por unidad de tiempo:</p>
    <center><img src="images/eym/2/m1.png"></center>
    <p>La unidad de la intensidad de corriente eléctrica en el S.I es el ampere(A) y está relacionada con el número de portadores de carga eléctrica y su velocidad de arrastre por la relación:</p>
    <center><img src="images/eym/2/m2.png"></center>
    <p>Donde n es la densidad de portadores de carga, q es su carga, v_d es la velocidad de arrastre y A es el área de la sección transversal del conductor.</p>
    <h5>Resistencia Electrica</h5>
    <p>Resistencia eléctrica es toda oposición que encuentra la corriente a su paso por un circuito eléctrico cerrado, atenuando o frenando el libre flujo de circulación de las cargas eléctricas o electrones. Cualquier dispositivo o consumidor conectado a un circuito eléctrico representa en sí una carga, resistencia u obstáculo para la circulación de la corriente eléctrica.</p>
    <p>Normalmente los electrones tratan de circular por el circuito eléctrico de una forma más o menos organizada, de acuerdo con la resistencia que encuentren a su paso. Mientras menor sea esa resistencia, mayor será el orden existente en el micromundo de los electrones; pero cuando la resistencia es elevada, comienzan a chocar unos con otros y a liberar energía en forma de calor. Esa situación hace que siempre se eleve algo la temperatura del conductor y que, además, adquiera valores más altos en el punto donde los electrones encuentren una mayor resistencia a su paso.</p>
    <p>La resistencia electrica también variará inversamente en función del área transversal, R α 1/A. La cantidad de correinte debe depender de E, y E a su vez depende de V; cuando el voltaje es mayor. Por consiguiente, I α AV; entonces de acuerdo con la ley de Ohm, R α 1/A. En cualquier caso, Ohm encontró  experimentalmente fue que R α L/A, e introdujo una constante de proporcionalidad dependiente del material que es la resistividad. Para transformar esta afirmación en ecuacion,</p>
    <center><img src="images/eym/2/m3.png"></center>
    <h5>Asociacion de resistencias</h5>
    <p>Nuevamente, se presentan dos maneras de establecer asociaciones entre resistencias: en serie y en paralelo. Tambien, hay que calcualar el valor de una resistencia equivalente correspondiente a la asociacion de resistencias.</p>
    <p>En una asociacion en serie, en un circuito como el siguiente:</p>
    <center><img src="images/eym/2/m4.png"></center>
    <p>por las resistencias R1, R2 y R3 circula la energia con una misma intensidad I. La Diferencia de potencial en los extremos del generador (a y d) es igual a la suma de los potenciales presentes en cada resistencia.</p>
    <center><img src="images/eym/2/m5.png"></center>
    <p>Entonces segun Ohm:</p>
    <center><img src="images/eym/2/m6.png"></center>
    <p>De donde obtenemos que la resitencia equivalente a un conjunto de resistencias asociadas en serie es la suma de todas ellas.</p>
    <center><img src="images/eym/2/m7.png"></center>
    <p>  En una asociación en paralelo, la diferencia de potencial entre cada extremo de las resitencias y los del generador es la misma. La intensidad total se dividirá en tres, una por cada resitencia, I1,I2,I3, de manera que I = I1 + I2 + I3</p>
    <center><img src="images/eym/2/m8.png"></center>
    <p>Segun la ley de Ohm</p>
    <center><img src="images/eym/2/m9.png"></center>
    <p>Mientras que <img src="images/eym/2/m10.png"></p>
    <p>Resultando, <img src="images/eym/2/m11.png"></p>
    <p>De aqui se deduce que la inversa de la resistencia equivalente en una asociación en paralelo es igual a la suma de los inversos de las resistencias asociadas.</p>
    <center><img src="images/eym/2/m12.png"></center> 
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