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
    <title>Educa-2 | Matematicas Discretas</title>
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
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">polymer</i><h4>Matematicas Discretas</h4></center></div>   
    <div class="col s12 m12 l10">
    <blockquote><h3>Relaciones y Funciones</h3></blockquote>
    <h5>Relación</h5>
    <p>El concepto de relación surge de manera natural en el análisis de un sistema. Un ejemplo, en los números Naturales se establece la relación “… es menor que ...”. Bajo esta relación R el número 2 se relaciona con el 3: 2 es menor que 3, pero no así al contrario (3 no es menor que 2). </p>
    <p>Una relación es binaria cuando se establece entre dos objetos. Un ejemplo: R : x < y . </p>
    <p>Una relación es un conjunto de pares ordenados. Un par ordenado (también llamada pareja ordenada) consta de dos elementos: (a, b) en donde el orden en que aparece (primero a, después b) indica la relación: a Rb de a con b. </p>
    <p>Una relación asocia un elemento de un conjunto A con un elemento de otro conjunto B o con un elemento del mismo conjunto A. </p>
    <strong><p>Ejemplo</p></strong>
    <p> Para A= {a, b, c} R1= {(a, a) (a, b) (a, c) (b, a) (b, b) (b, c) (c, a) (c, b) (c, c)} ⇒ R1 = A× A </p>
    <p> Para A = {España, Inglaterra, Italia}</p>
    <p>B= {Paris, Roma, Madrid}</p>
    <p>R2: (España, Paris) (Inglaterra, Roma) (Italia, Madrid) </p>
    <p>R3: (Pepe, María) (Pepe, Laura) (Pepe, Tere)</p>
    <h5>Relaciones de equivalencia</h5>
    <p>Reflexividad: xRx : ∀x ∈ S ⇒ xRx ( x está relacionada con x ) </p>
    <strong><p>Ejemplo</strong></p>
    <p> El conjunto de alumnos que se encuentra en su salón de clase </p>
    <p>S = {Pedro, Javier, Esteban}</p>
    <p>R : está en la misma habitación</p>
    <p> Simetría: ∀x, y ∈ S . Si x Ry ⇒ yRx </p>
    <p>Ejemplo: Pedro R Javier ⇒ Javier R Pedro </p>
    <p> Transitiva: ∀x, y,z ∈ S Si xRy y yRz ⇒ xRz</p>  
    <p>Pedro R Javier y Javier R Esteban ⇒ Pedro R Esteban </p>
    <h5>Definición:</h5>
    <p>Una relación R , definida sobre un conjunto S es una relación de equivalencia ⇔ tienen las tres propiedades: reflexiva, simétrica y transitiva</p>
    <h5>Relación de orden parcial </h5>
    <p>En matemáticas, una relación binaria R sobre un conjunto X es antisimétrica si se cumple que para todo a y b pertenecientes a X si a está relacionado con b y b está relacionado con a entonces a = b. </p>
    <p>En notación de conjuntos: <img src="images/math_d/2/d1.png"></p>
    <p>La relación ser más alto que es una relación antisimétrica dado que a es más alto que b y b es más alto que a no pueden cumplirse al mismo tiempo. </p>
    <strong><p>Ejemplo:</p></strong>
    <center><img src="images/math_d/2/d2.png"></center>
    <h5>Funciones</h5>         
    <p>Intuitivamente una función es una regla que asocia elementos de un conjunto A con elementos de un conjunto B de modo que el elemento del conjunto A se asocia con uno y sólo un elemento del segundo conjunto. En otras palabras, una función es una máquina que transforma elementos en otros elementos y cada elemento puede transformarse en un único elemento, no en dos o tres. </p>
    <strong><p>Definición:</p></strong>
    <p>Sean A y B dos conjuntos. Una función de A en B es un conjunto de pares ordenadas de A x B (a, b) con la propiedad de que cada elemento de A es el primer componente de una pareja ordenada y para todo a ∈ A, si (a, b) y (a, c) pertenece a f entonces b = c (porque a no se repite en otra pareja) A: Dominio de la función B: Codominio. Imagen son los elementos de B que forman el segundo componente de la pareja ordenada. </p>
    <h5>Tipos de funciones</h5>
    <strong><p>Función Inyectiva:</p><br></strong>
    <p>A una función en la que a cualquiera par de elementos diferentes del dominio les corresponde imágenes diferentes se le llama función inyectiva (significa uno a uno) </p>
    <center><img src="images/math_d/2/d3.png"></center>
    <p>Un ejemplo es la función cuadrática y = ax + bx + c cuyo dominio y cuyo codominio son los reales. Así, para y =  3x^2 +2x +1 cuya gráfica es </p>
    <center><img src="images/math_d/2/d4.png"></center>
    <p>la función no toma los valores menores a -2. </p>
    <strong><p>Función Suprayectiva:</p></strong>
    <p>Si todo elemento del codominio de una función f es imagen de al menos un elemento de su dominio, entonces f es una función suprayectiva</p>
    <center><img src="images/math_d/2/d5.png"></center>
    <p>Las funciones trigonométrica (seno, coseno, tangente, cotangente, secante y cosecante) son del tipo suprayectiva (o sobreyectiva). El dominio son los reales y el codominio es [-1, 1] por lo que para más de un valor de x le corresponde el mismo valor de y. </p>
    <center><img src="images/math_d/2/d6.png"></center>
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="math_d1.php" class="collection-item">Análisis Combinatorio</a>
    <a href="math_d2.php" class="collection-item">Relaciones y Funciones</a>
    <a href="../simuladores/math_d.php" class="collection-item">Simulador</a>
    <a onClick="this.href=aleatorio4()"; class="collection-item">Autoevaluación</a>   
    </div>
    </div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>