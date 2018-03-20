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
    <blockquote><h3>Transformada Z</h3></blockquote>
        <h5>Definicion</h5>
        <p>La definición matemática de la transformada Z es la siguiente:</p>
        <center><img src="images/math_a/3/m1.png"></center>   
        <h5>Definicion y relación de la transformada de Fourier en tiempo discreto</h5>
        <p>Como se ha mencionado en los temas anteriores, la transformada de ourier tiene una importancia fundamental en la representación y análisis de señales y sistemas discretos. Una generalización de ella es la transformada Z. El motivo principal para tratar con la transformada Z consiste en que la transformada de Fourier no converge para todas las secuencias; lo que hace necesario plantear una transformación que cubra una más amplia gama de señales. Adicionalmente, la transformada Z presenta la ventaja de que, en problemas analíticos, el manejo de su notación, expresiones y álgebra es con frecuencia más conveniente. El empleo de la transformada Z en señales discretas tiene su equivalente en la transformada de Laplace para señales continuas y cada una de ellas mantiene su relación correspondiente con la transformada de Fourier.</p>
        <p>• Transforma una señal en tiempo discreto x(n) en una función polinómica compleja de variable compleja.</p>
        <p>• Forma alternativa de representar la señal. Los valores de la señal pasan a ser los coeficientes de un polinomio en la variable compleja z.</p>
        <center><img src="images/math_a/3/m2.png"></center> 
        <p>Para realizar la transformación no hay que realizar ningún cálculo si tenemos que almacenar la señal almacenaremos los mismos valores. Usando este punto de vista (polinomios complejos en lugar de listas de números) el tratamiento matemático de los sistemas LTI se simplifica.</p>
        <h5>Transformada Z: Principales propiedades</h5>
        <p>La transformada Z cumple tres propiedades interesantes:</p>
        <p>• Linealidad</p>
        <p>ya que <img src="images/math_a/3/m3.png"></p>
        <p> • Desplazamiento en el tiempo: <img src="images/math_a/3/m4.png"> </p>
        <p> • Convolucion: <img src="images/math_a/3/m5.png"> </p>
        <h5>Transformada Z: aplicación a sistemas LTI</h5>
        <p>Si utilizamos las transformadas Z de las señales entrada, salida respuesta a impulso</p>
        <center><img src="images/math_a/3/m6.png"></center> 
        <center><h5>Transformada Z: convergencia</h5></center>
        <center><img src="images/math_a/3/m7.png"></center> 
        <center><h5>Transformada Z: convergencia</h5></center>
        <center><img src="images/math_a/3/m8.png"></center> 
        <center><h5>Transformada Z: otras propiedades</h5></center>
        <center><img src="images/math_a/3/m9.png"></center>
        <center><h5>Transformada Z: forma compacta racional</h5></center> 
        <p>A veces, la transformada Z puede escribirse en forma compacta como un cociente de 2 polinomios en z de orden finito.</p>
        <center><img src="images/math_a/3/m10.png"></center>
        <p>¡Ojo! Señales distintas pueden tener la misma expresión X(z) en forma compacta. En ese caso tendrán distinta ROC y es necesario especificarla.</p>
        <center><h5>Transformada Z: forma compacta y convergencia</h5></center>
        <center><img src="images/math_a/3/m11.png"></center>
        <center><h5>Algunos pares de transformadas Z</h5></center>
        <center><img src="images/math_a/3/m12.png"></center>
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