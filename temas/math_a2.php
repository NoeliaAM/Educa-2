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
    <blockquote><h3>Transformada de Fourier</h3></blockquote>
        <h5>De las series de Fourier a la Transformada de Fourier</h5>
        <p>Las series de Fourier son útiles para el estudio de señales periódicas pero, desafortunadamente,  este tipo de señales no son tan frecuentes en la práctica como las no-periódicas. Esta situación requiere el desarrollo de una teoría matemática más ambiciosa y a ello vamos a dedicar algún tiempo.  Sea x (t) una señal aperiódica  definida en todo el intervalo real y denotemos por xT (t) (T > 0) la señal  2T-periodica que se obtiene a partir de  x (t) haciendo xT (t) = x (t) para t ∈ (−T, T] y extendiendo periódicamente con periodo 2T. Si suponemos que x (t) es suficientemente suave, entonces tendremos la identidad.</p>                
        <center><img src="images/math_a/2/m1.png"></center>  
        <p>Evidentemente, si hacemos T → ∞ en el segundo miembro de la igualdad anterior, entonces la igualdad limite será   válida para todo ´ t ∈ R y su valor será igual al de la señal de partida x (t). Ahora, estudiemos que le sucede al segundo miembro si hacemos  T → ∞. Tomando ∆f = 1/(2T) y fk = k∆f, podemos reescribir  como:</p>                        
        <center><img src="images/math_a/2/m2.png"></center>
        <p> Ahora bien, |fk+1 − fk| = ∆f = 1/2T ( k ∈ Z ) y, por tanto, podemos interpretar los puntos {fk} como nodos equiespaciados de una partición de Riemann para la integral limite.</p>
        <center><img src="images/math_a/2/m3.png"></center>
        <p>Es decir, podemos concluir que (bajo ciertas condiciones restrictivas sobre la suavidad de la señal  aperiodica  x (t)) se satisface la siguiente identidad (llamada: Teorema integral de Fourier):</p>
        <center><img src="images/math_a/2/m4.png"></center>
        <p>Haciendo el cambio de variable ξ = 2πf, podemos reescribir la anterior formula como: </p>
        <center><img src="images/math_a/2/m5.png"></center>
        <h5>Teoremas básicos  sobre la transformada de Fourier</h5>
        <p>La palabra “transformada” indica que estamos trabajando con una herramienta para transformar un tipo determinado de problema en otro. De hecho, la transformada de Fourier será  útil (como veremos) para simplificar el estudio de la solución de cierto tipo de ecuaciones diferenciales, convirtiendo  el problema de la solución de una ED en un problema de solución de ecuaciones algebraicas. La motivación para dicho estudio está en el hecho de que la transformada de Fourier posee buenas propiedades  algebraicas cuando se aplica a las derivadas sucesivas de una señal, o al trasladar la señal, etc. En este  apartado estudiamos las propiedades más sencillas de la transformada de Fourier.  A continuación exponemos una lista de las propiedades elementales de F(x) (ξ) = ˆx(ξ) (Algunas de las demostraciones son muy sencillas y las dejamos como ejercicio). Linealidad La transformada de Fourier es un operador lineal. Mas precisamente, si ´ x1, x2 ∈ L 1 (R), y a, b ∈ R, entonces ax\1 + bx2(ξ) = axb1(ξ) + bxb2(ξ). Traslación en el tiempo. ´ Dado a ∈ R, se tiene que F[x(t − a)](ξ) = e −iaξF[x(t)](ξ) y F[e iaξx(t)](ξ) = F[x(t)](ξ − a) Demostración. En realidad, esta propiedad es trivial: basta hacer un cambio de variable, como se observa a continuación:</p>
        <center><img src="images/math_a/2/m6.png"></center>
        <p>La otra fórmula se demuestra de forma análoga.</p>
        <p>Cambios de escala. Si δ > 0 y xδ(t) = δ</p>
        <p>−1x(t/δ), entonces</p>
        <p>F[xδ](ξ) = F[x](δξ) y F[x(δt)](δξ) = F(x)δ(ξ).</p>
        <p>Demostración.  De nuevo un simple cambio de variable sirve para nuestros objetivos:</p>
        <center><img src="images/math_a/2/m7.png"></center>
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