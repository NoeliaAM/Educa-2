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
    <blockquote><h3>Métodos de Ordenación</h3></blockquote>
        <p>Ordenar significa reagrupar o reorganizar un conjunto de datos u objetos en una serie de secuencia especifica. La ordenación es una actividad fundamental y relevante en la vida. Formalmente la se define ordenación de la siguiente manera:<br> Sea A una lista de N elementos:</p>
        <center><img src="images/edd/3/e1.png"></center>
        <p>Ordenar significa permutar estos elementos de tal forma que queden de acuerdo con una distribución preestablecida.</p>        
        <p><strong>• Ascendente:</strong><img src="images/edd/3/e2.png"></p>
        <p><strong>• Descendente:</strong><img src="images/edd/3/e3.png"></p>
        <p>En el procesamiento de datos a los métodos de ordenación se les clasifica en dos grandes categorías, según donde hayan sido almacenados:</p>
        <p>• Ordenación de Arreglos</p>
        <p>• Ordenación de Archivos</p>
        <p>La primera categoría se denomina también ordenación interna, ya que los elementos o componentes del arreglo se encuentran en la memoria principal de la computadora. La segunda categoría se llama ordenación externa, ya que los elementos se encuentran en archivos almacenados en dispositivos de almacenamiento secundario, como cintas, discos, USB, etc.</p>
        <h5>Ordenación Interna</h5>
        <p>Los métodos de ordenación interna a su vez se dividen en dos:</p>
        <p>• Métodos Directos</p>
        <p>• Métodos Logaritmicos</p>
        <p>Los métodos directos tienen la característica de que su implementación es relativamente sencilla y son fáciles de comprender, aunque son ineficientes cuando los elementos del arreglo son medianos o grandes. Los métodos  logarítmicos por su parte son más complejos que los directos. Su elaboración es más sofisticada y, al ser menos intuitivos su comprensión resulta complicada. Sin embargo son más eficientes ya que requieren de menos comparaciones y movimientos para ordenar sus elementos. Es importante destacar que una buena medida de la eficiencia es el tiempo que tarda el algoritmo en ordenar los elementos. Como conclusión se puede destacar que se puede utilizar métodos directos cuando el número de elementos es pequeño y logarítmicos cuando N es un número muy grande. Los métodos directos más conocidos son:</p>
        <p>• Ordenación por intercambio</p>
        <p>• Ordenación por inserción</p>
        <p>• Ordenación por seleccion</p>
        <h5>Ordenación por Intercambio Directo</h5>
        <p>El método de intercambio directo, conocido coloquialmente como burbuja. Uno de los más simples, es tan fácil como comparar todos los elementos de una lista contra todos, si se cumple que uno es mayor o menor a otro, entonces los intercambia de posición. Este método puede trabajar de dos maneras diferentes:<br> Llevando los datos más pequeños hacia la parte izquierda o trasladando los elementos grandes a su parte derecha.<br>Ejemplo:<br> A= [50, 16, 7, 9, 15, 27]</p>            
        <center><img src="images/edd/3/e4.png"></center>
        <p>Este ejemplo de ordenación por el método de intercambio directo transporta en cada pasada el menor elemento hacia la parte izquierda del arreglo.<br>Algoritmo:</p>
        <center><img src="images/edd/3/e5.png"></center>   
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