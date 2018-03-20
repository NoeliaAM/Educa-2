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
	<title>Educa-2 | Estructura de datos</title>
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
    <div class="card-panel green lighten-4"><center><i class="medium material-icons">language</i><h4>Estructura de Datos</h4></center></div>   
    <div class="col s12 m12 l10">
	  <blockquote><h3>Arreglos Unidimensionales</h3></blockquote>
		<h5>Arreglos</h5>
        <p>La importancia de las computadoras radica fundamentalmente en su capacidad para procesar información. Esta característica les permite realizar actividades que antes solo realizaban los humanos. Con el propósito de que la información sea procesada, se requiere que esta se almacene en la memoria de la computadora. De acuerdo con la forma en que los datos se organizan, se clasifican:</p>
        <p>• Tipo de datos simples.</p>
        <p>• Tipo de datos estructurados.</p>      
        <p>La principal característica de los datos simples consisten en que solo ocupan una casilla de memoria: por lo tanto una variable simple hace referencia a un único valor a la vez. En este grupo se encuentran los números enteros, reales, caracteres, booleanos, enumerados y subrangos. Por otra parte los datos estructurados se caracterizan por el hecho de que con un nombre (identificador de variable estructurada) se hace referencia a un grupo de casillas de memoria, es decir, un dato estructurado tiene varios componentes.</p>
		<h5>Arreglos Unidimensionales</h5> 
        <p>Un arreglo es una estructura de datos, o más técnicamente, un espacio de memoria que permite almacenar una colección de elementos, todos del mismo tipo. Un arreglo se puede imaginar como una secuencia contigua de celdas (espacios de memoria), o casillas, en cada una de las cuales se puede guardar un elemento de la colección. Es usual encontrarlos representados por la siguiente figura:</p>
        <p>Un arreglo es una estructura de datos, o más técnicamente, un espacio de memoria que permite almacenar una colección de elementos, todos del mismo tipo. Un arreglo se puede imaginar como una secuencia contigua de celdas (espacios de memoria), o casillas, en cada una de las cuales se puede guardar un elemento de la colección. Es usual encontrarlos representados por la siguiente figura: </p>
        <center><img class="img" src="images/edd/1/e1.jpg"></center>
        <p>Esta figura representa un arreglo de cinco casillas cada una de las cuales se puede utilizar para guardar un dato. La dimensión o tamaño de un arreglo es el número de casillas que lo conforman. Cada una de las casillas de un arreglo tiene asociado un número que la identifica de manera única. A este número se le llama índice o dirección. En la figura anterior, debajo de cada casilla, aparece su índice. Este tipo de arreglo se define como arreglo unidimensional el cual es una colección finita, homogénea y ordenada de elementos.</p>
        <p>• <strong>Finita:</strong> todo arreglo tiene un límite: es decir, se debe determinar cuál será el número máximo de elementos que formaran parte del arreglo.</p>
        <p>• <strong>Homogénea:</strong> todos los elementos de un arreglo son del mismo tipo, es decir, todos enteros, todos booleanos, nunca una combinación de distintos tipos.</p>
        <p>• <strong>Ordenada:</strong> se puede determinar cuál es el primero, el segundo, etc.</p>
        <h5>Declaración de arreglos unidimensionales</h5>
        <p>Usando pseudocódigo un arreglo unidimensional se declara de la siguiente manera:</p>           
        <center>Indent_arreglo=ARREGLO[liminf…limsup] DE tipo</center>
        <p>Con los valores liminf y limsup se declara el tipo de los índices, asi como el numero de elementos que tendrá el arreglo. Con el tipo se declara el tipo para todos los componentes del arreglo unidimensional.</p>
        <h5>Lectura</h5>
        <p>El proceso de lectura de un arreglo consiste en leer y asignar un valor a cada uno de sus componentes. Suponga que desea leer todos los elementos del arreglo unidimensional V en forma consecutiva. Esto se podría realizar de la siguiente manera:</p>
        <center><p>Leer V[0],<br>Leer V[1],<br>…Leer V[50]</p></center>
        <p>Pero este método de lectura resulta poco practico cuando se necesita un arreglo demasiado extenso. Por lo tanto, se usará un ciclo para leer todos los elementos de un arreglo unidimensional.</p>
        <center><p>Repetir con I desde 0 hasta 50<br>Leer V[I]</p></center>
        <p>Al variar el valor de I, cada elemento leído se asigna al lugar correspondiente del indice.</p>
        <h5>Asignación</h5>
        <p>En general, no se es posible asignar directamente un valor a todo el arreglo, sino que se debe asignar el valor deseado a cada componente. Enseguida se muestran algunos ejemplos de asignación. En los primeros dos se asigna un valor en una determinada casilla y en el tercer caso se asigna el 0 a todas las casillas.</p>
      	<center><p>CICLO[ene]←129.9<br>CICLO[mar]←CICLO[ene]/2<br>REPETIR con MES desde ene hasta dic<br>Hacer CICLO[MES]←0</p></center> 
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="edd_1.php" class="collection-item">Arreglos Unidimensionales</a>
    <a href="edd_2.php" class="collection-item">Arreglos Bidimensionales</a>
    <a href="edd_3.php" class="collection-item">Metodos de Ordenacion</a>
    <a onClick="this.href=aleatorio3()"; class="collection-item">Autoevaluación</a>
    </div>
    </div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>