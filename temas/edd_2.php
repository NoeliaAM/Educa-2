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
    <blockquote><h3>Arreglos Bidimensionales</h3></blockquote>
        <p>Un arreglo bidimensional es una estructura de datos, o más técnicamente, un espacio de memoria que permite almacenar una colección de elementos, todos del mismo tipo. La diferencia con los arreglos unidimensionales está en que, en los arreglos bidimensionales, los componentes no están organizados linealmente sino que su organización es bidimensional, es decir, en filas y columnas. Conviene imaginar un arreglo bidimensional como una organización de celdas de memoria, o casillas, en cada una de las cuales se puede guardar un elemento de la colección. Un arreglo bidimensional se representa como lo ilustra la siguiente figura:</p>
        <center><img src="images/edd/2/e1.jpg"></center>
        <p>Esta figura representa un matriz de cinco filas (numeradas verticalmente de 0 a 4) y cinco columnas (numeradas horizontalmente de 0 a 4). En cada una de las 25 celdas o casillas se puede guardar un dato. La dimensión o tamaño de una matriz es el número filas por el número de columnas. Debe ser claro entonces que la figura anterior es la gráfica de una matriz de dimensión 5x5. La numeración de las filas y las columnas determina que cada una de las casillas de una matriz tiene asociados dos números que la identifican de manera única. A estos números se les llama índice de fila e índice de columna, respectivamente.</p>       
        <h5>Declaración de arreglos bidimensionales</h5>
        <p>Los arreglos bidimensionales se declaran cuando se especifican el número de renglones y el número de columnas, junto con el tipo de dato de los componentes.</p>       
        <center><p>Id_arreglo=ARREGLO [liminfr…limsupr,liminfc…limsupc] DE tipo</p></center>
        <p>Con liminfr y limsupr se declara el tipo de dato del índice de los renglones y cuantos renglones tendrá el renglón. Asimismo, con liminfc  y flimsupc se declara el tipo del índice y cuantas columnas tendrá el arreglo. Con tipo se declara el tipo de datos de todos los componentes.</p>
        <h5>Lectura</h5>
        <p>Al igual que con los arreglos unidimensionales los arreglos bidimensionales se ayudan de los ciclos para poder leer los valores asignados en cada una de sus casillas. Sin embargo, como sus elementos deben de indicarse por medio de dos índices, normalmente se usan dos ciclos para logran la lectura de los elementos consecutivos. Suponga que se desea leer todos los elementos del arreglo bidimensional MATRIZ. Los pasos a seguir serian:</p> 
        <center><p>Repetir con I desde 1 hasta 10<br>Repetir con J desde 1 hasta 5 <br>Leer MATRIZ [I,J]</p></center>
        <h5>Asignación</h5>
        <p>La asignación de un arreglo bidimensional se puede realizar de diferentes formas, pero la más común es en la cual se asignan valores a todos los componentes involucrados en este caso se necesitan dos ciclos para recorrer todo el arreglo.</p>
        <center><p>Repetir con I desde 1 hasta 10<br>Repetir con J desde 1 hasta 5<br>MATRIZ [I,J]← 0</p></center>
        <p>Al variar los valores de I y J se asigna el 0 al elemento MATRIZ correspondiente a la posición indicada por los índices I y j.</p> 
    </div>

    <div class="col s12 m12 l2">
    <center><h5>Temas:</h5></center>
    <div class="collection">
    <a href="edd_1.php" class="collection-item">Arreglos Unidimensionales</a>
    <a href="edd_2.php" class="collection-item">Arreglos Bidimensionales</a>
    <a href="edd_3.php" class="collection-item">Metodos de Ordenación</a>
    <a onClick="this.href=aleatorio3()"; class="collection-item">Autoevaluación</a>
    </div>
    </div>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>

</body>
</html>