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
    <title>Educa-2 | Matematicas Avanzadas</title>
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
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">assessment</i><h4>Matematicas Avanzadas</h4></center></div>   
    <div class="col s12 m12 l10">
    <blockquote><h3>Series de Fourier</h3></blockquote>
        <p>Las Series de trigonométricas de Fourier, o simplemente series de Fourier fueron desarrolladas por el matemático francés Jean-Baptiste Joseph Fourier (21 de marzo de 1768 en Auxerre - 16 de mayo de 1830 en París). La idea que subyace en las series de Fourier es la descomposición de una señal periódica en términos de señales periódicas básicas (senos y cosenos) cuyas frecuencias son múltiplos de la señal original. La idea de descomposición es un proceso fundamental en el área científica en general: la descomposición permite el análisis de las propiedades y la síntesis de los objetos o fenómenos. Serie de Fourier La serie de Fourier de una función periódica f (x) de periodo T, también conocida como señal, definida en un intervalo de longitud T está dada por: 
        </p>
         <center><img src="images/math_a/1/m1.png"></center>
        <h5>Funciones periódicas en la serie de Fourier</h5>
        <p>La representación en series de Fourier de una función periódica, representa la función periódica como la suma de componentes senusoidales que tienen diferentes frecuencias. La componente senusoidal de frecuencia ωn = n ω0 se denomina la enésima armonica de la función periódica. La primera armonica comúnmente se conoce como la componente fundamental porque tiene el mismo periodo de la función y ω0 =2πfo = 2π/T se conoce como la frecuencia angular fundamental. Los coeficientes Cn y los angulos  θn se conoces como amplitudes armónicas y de angulos de fase respectivamente.</p>
        <h5>Series trigonométricas y series de Fourier. Coeficientes de Fourier</h5>
        <center><img src="images/math_a/1/m2.png"></center>
        <p>Toda serie funcional que se pueda expresar en la forma donde T ∈ R+, a0, a1, a2,...,b1, b2,... son constantes reales, se denomina serie trigonométrica y los an, bn son los coeficientes de la misma. Dado un número real x0, observemos que si en la serie se sustituye la variable x por cualquier número de la forma x0 + kT con k ∈ Z, la serie numérica obtenida es la misma cualquiera que sea k, puesto que:</p>
        <center><img src="images/math_a/1/m3.png"></center>
        <p>Por esta razón, se puede afirmar que si la serie trigonométrica converge en el punto x0, entonces también converge en todo punto de la forma x0 + kT, y que su suma es la misma en cualquiera de dichos puntos. En consecuencia, si la serie trigonométrica converge, su suma será una función periódica, de período T.
        Sea f una función integrable en [0, T]. Se llaman coeficientes de Fourier de f a los números</p>
        <center><img src="images/math_a/1/m4.png"></center>
        <p> La serie trigonométrica que tiene estos coeficientes se denomina serie de Fourier de f en [0, T]. Cuando la función f es además periódica de período T, la serie citada se denomina simplemente serie de Fourier de f.</p> 
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="math_a1.php" class="collection-item">Serie de Fourier</a>
    <a href="math_a2.php" class="collection-item">Transformada de Fourier</a>
    <a href="math_a3.php" class="collection-item">Transformada Z</a>
    <a href="../simuladores/menu.php" class="collection-item">Simulador</a>
    <a onClick="this.href=aleatorio()"; class="collection-item">Autoevaluación</a>
    </div>
    </div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>