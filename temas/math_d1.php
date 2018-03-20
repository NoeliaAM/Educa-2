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
    <blockquote><h3>Análisis Combinatorio</h3></blockquote>
    <p>Los elementos de un conjunto, sin tener en cuenta la naturaleza de estos elementos. Los problemas de arreglos y combinaciones pueden parecer aburridos y quizá se piense que no tienen utilidad pero los teoremas del análisis combinatorio son la base del cálculo de la probabilidad. La probabilidad se encarga de los arreglos y las combinaciones que determinan el número de formas diferentes en que un acontecimiento puede suceder. El análisis combinatorio tiene aplicaciones en el diseño y funcionamiento de la tecnología computacional así como también en las ciencias. La teoría combinatoria se aplica en las áreas en donde tengan relevancia las distintas formas de agrupar elementos. El origen del análisis combinatorio se le atribuye a los trabajos de Pascal (1596 – 1650) y Fermat (1601 - 1665) que fundamentan el cálculo de probabilidades. Leibiniz (1646 – 1716) publicó en 1666 “Disertatio de Arte Combinatoria”. El mayor impulsor de esta rama fue Bernulli quien en sus trabajos incluye una teoría general de permutaciones y combinaciones. Resumiendo, El objeto del Análisis combinatorio o Combinatoria es el estudio de las distintas ordenaciones que pueden formularse con los elementos de un conjunto, de los distintos grupos que pueden formarse con aquellos elementos y de las relaciones entre unos y otros grupos.</p>
    <h5>Principio Fundamental del Análisis Combinatorio</h5>
    <p>Una persona tiene 2 formas de ir de una ciudad A a otra ciudad B; y una vez llegada a B, tiene 3 maneras de llegar a otra ciudad C, ¿De cuántas maneras podrá realizar el viaje de A a C pasando por B?</p>
    <center><img src="images/math_d/1/d1.png"></center>
    <p>Si empezó a pie, podrá tomar luego avión, carro o trasatlántico, y si empezó en bicicleta, también podrá tomar avión, carro o trasatlántico. La persona tuvo 6 formas diferentes de realizar el viaje que son: (iniciales) pa, pc, pt, ba, bc, bt. (2 x 3 = 6).</p>
    <p> Por lo que el principio fundamental del análisis combinatorio, puede expresarse así:</p>
    <p>Si una primera decisión, operación o acción puede efectuarse de a formas diferentes, una segunda acción puede efectuarse de b formas diferentes, una tercera acción puede efectuarse de c formas diferentes y así sucesivamente hasta la enésima acción que puede efectuarse de z formas diferentes, entonces el número total de formas diferentes que pueden efectuarse estas n acciones es igual con: a x b x c x ... x z. Este principio también se llama principio de conteo ó principio multiplicativo.</p>
    <h5>Técnicas de contar </h5></p>
    <p>Diez estudiantes decidieron celebrar la terminación de sus estudios en la escuela secundaria con un almuerzo en un restaurante. Una vez reunidos, se entabló entre ellos una discusión sobre el orden en que habían de sentarse a la mesa. Unos propusieron que la colocación fuera por orden alfabético; otros, con arreglo a la edad; otros, por los resultados de los exámenes; otros, por la estatura, etc. La discusión se prolongaba, la sopa se enfrió y nadie se sentaba a la mesa. Los reconcilió el camarero, dirigiéndoles las siguientes palabras:
    <p>- Jóvenes amigos, dejen de discutir. Siéntense a la mesa en cualquier orden y escúchenme.</p>
    <p>Todos se sentaron sin seguir un orden determinado. El camarero continuó:</p>
    <p>- Que uno cualquiera anote el orden en que están sentados ahora. Mañana vienen a comer y se sientan en otro orden. Pasado mañana vienen de nuevo a comer y se sientan en orden distinto, y así sucesivamente hasta que hayan probado todas las combinaciones posibles. Cuando llegue el día en que ustedes tengan que sentarse de nuevo en la misma forma que ahora, les prometo solemnemente, que en lo sucesivo les convidaré a comer gratis diariamente, sirviéndoles los platos más exquisitos y escogidos.</p>
    <p>La proposición agradó a todos y fue aceptada. Acordaron reunirse cada día en aquel restaurante y probar todos los modos distintos, posibles, de colocación alrededor de la mesa, con el objeto de disfrutar cuanto antes de las comidas gratuitas.</p>
    <p>Sin embargo, no lograron llegar hasta ese día. Y no porque el camarero no cumpliera su palabra sino porque el número total de combinaciones diferentes alrededor de la mesa es extraordinariamente grande. Éstas son exactamente 3’628,800. Es fácil calcular, que este número de días son casi 10,000 años.</p>         
    <h5>Principios fundamentales de conteo:</h5>
    <h5>Principio de adición: </h5></p>
    <p>Si un evento E puede ocurrir en m formas y un segundo evento F puede ocurrir en n formas y ambos eventos no pueden ocurrir en forma simultánea entonces E o F pueden ocurrir en m + n formas. </p>
    <strong><p>Ejemplos:</p></strong>
    <p>a) Existen 3 profesores y 2 profesoras que imparten la materia de cálculo. Un estudiante puede escoger un profesor de 3 + 2 = 5 formas.</p>
    <p>b) En una biblioteca hay 3 libros de novelas de misterio diferentes, 5 novelas de romance y 4 novelas de aventura diferentes. Existen 3 + 5 + 4 = 12 formas de escoger una novela.</p>
    <p>c) Cinco empresas de transporte terrestre tienen servicio diario entre Mérida y México. Tres empresas de aviación tienen vuelo diario entre Mérida y México. En consecuencia, hay 5+3 maneras de ir de Mérida a México en avión o en autobús. En los problemas de conteo, la palabra "o" se traduce en suma.</p>
    <p>Si tengo un billete de $50, uno de $100, uno de $200 y un billete de $1000, ¿Cuál es el número total de precios que puedo pagar usando algún o todos mis billetes?</p>
    <p>Este es un buen ejemplo de una situación en la que se necesita un listado sistemático. Como tenemos 4 billetes de denominación diferente, debemos considerar 4 casos. Éstos son, los precios que podemos cubrir con un billete, con 2 billetes, con 3 billetes y con 4 billetes. Se debe de examinar cada uno de estos casos y luego aplicar el principio de adición. </p>
    <ul><li>• Con 1 billete podemos tener 4 precios: $50, $100, $200 y $1000.</li></ul>
    <ul><li>• Con 2 billetes, podemos listar sistemáticamente las combinaciones:</li></ul>
    <ol>
        <li>Las que tienen $50 son: $50 + $100 = $150, $50+$200 = $250, $50 + $1000 = $1050 </li>
        <li>Las que tienen $100 y no hemos listado aún: $100 + $200 = $300, $100+$1000 = 1100 </li>
        <li>Y las que tienen $200 y tampoco hemos listado: $200 + $100 = $1200</li>
    </ol>
    <ul><li>• Con 3 billetes, las combinaciones son(una para cada billete que falta):</li></ul>
    <ol>
        <li>$50 + $100 + $200 = $350 (falta la de $1000)</li>
        <li>$100 + $200 + $1000 = $1300 (falta la de $50)</li>
        <li>$50 + $200 + $1000 = $1250 (falta la de $100)</li>
        <li>$50 + $100 + $1000 = $1150 (falta la de $200)</li>
    </ol>
    <ul>• Con los cuatro billetes: $ 50 + $100 + $200 + $1000 = $1350 </li></ul>
    <h5>Principio de multiplicación:</h5>
    <p>Si un evento puede efectuarse de 1 n formas diferentes y si continuando el procedimiento, un segundo evento puede realizarse de 2 n formas diferentes y si después de efectuados, un tercer elemento puede realizarse de 3 n formas diferentes, entonces el número de formas en que los eventos puede realizarse será 1 2 3 n × n × n maneras diferentes </p>
    <p><strong>Ejemplos:</strong></p>
    <p>1. El menú de un restaurante ofrece 3 platos calientes y 4 postres. ¿De cuántas maneras se puede elegir un almuerzo de 1 plato caliente y 1 postre?</p>
    <p>Se puede hacer una lista de todas las posibilidades, pero es mucho más cómodo aplicar el principio de la multiplicación: Hay 3 maneras de elegir el plato caliente y para cada una de ellas hay 4 maneras de elegir el postre. Por lo tanto, hay 3⋅ 4 =12 comidas posibles. </p>
    <p>¿Cuántos códigos de una letra y un número de un dígito se pueden formar con las 26 letras del alfabeto y los números 0, 1, 2,...,9? Listando todas las posibilidades: </p>
    <p>• A0 A1 .... A9</p>
    <p>• B0 B1 .... B9</p>
    <p>• Z0 Z1 .... Z9</p>
    <p>hasta obtener 26 filas de 10 códigos en cada una: 26 ⋅10 = 260. Es más simple utilizar el principio de multiplicación: hay 26 maneras de elegir la letra y para cada una de ellas hay 10 maneras de elegir el número, de modo que son 26 ⋅10 = 260 códigos. </p>
    <p>Nota que en los 2 ejemplos hay total libertad de elegir el segundo elemento, no importa cómo se eligió el primero. Es decir, el segundo elemento es independiente del primero. Elegido el plato caliente, podemos elegir cualquiera de los 4 postres. Elegida la letra podemos agregarle cualquiera de los 10 números. Este principio es útil cuando se puede descomponer el proceso de recuento en pasos independientes.</p>
    <h5>Permutaciones</h5>
    <h5>Permutaciones Simples</h5>
    <p>Se llama permutación simple de n elementos tomados de k en k (k < n) a los distintos grupos formados por k elementos de forma que:</p>
    <p>• Los k elementos que forman el grupo son distintos (no se repiten).</p>
    <p>• Dos grupos son distintos si se diferencian en algún elemento o en el orden en que están colocados (influye el orden).</p>
    <p>• No se utilizan todos los elementos. Al elegir un primer elemento, lo podemos hacer de n formas. Quitamos el elemento elegido y elegimos otro de entre los n-1 que quedan. Esto podrá hacerse Ngj/v2008 6 Análisis Combinatorio 10 Matemáticas Discretas Tc1003 Análisis Combinatorio de n-1 formas. Quitamos también este elemento y nos quedamos con n-2, de entre los que elegimos el tercero. Esto lo podremos hacer de n-2 formas...</p>
    <p>Según la regla del producto, las maneras de escoger k elementos de entre un total de n según un determinado orden, será igual al producto de: n ⋅( )( ) n −1 ⋅ n − 2 ⋅...⋅(n − k +1)</p>
    <p> Notación: Pn,k , n Pk y P( ) n, k denotan el número de permutaciones de n elementos distintos tomados de k en k. Para llegar a una versión simplificada se opera así:</p>
    <center><img src="images/math_d/1/d2.png"></center>
    <center><img src="images/math_d/1/d3.png"></center>
    <strong><p>Ejemplos</p></strong>
    <p> P(10,4) son las permutaciones de 10 elementos agrupándolos en subgrupos de 4 elementos: </p>
    <center><img src="images/math_d/1/d4.png"></center>
    <p>Entonces podemos formar 5,040 subgrupos diferentes de 4 elementos a partir de los 10 elementos. </p>
    <p> ¿Cuántas banderas diferentes, de tres franjas horizontales de igual ancho y decolores distintos, pueden confeccionarse a partir de siete colores diferentes? </p>
    <center><img src="images/math_d/1/d5.png"></center>
    <p>¿Cuántos números de tres cifras distintas se pueden formar con las nueve cifras significativas del sistema decimal? Al tratarse de números el orden importa y además nos dice "cifras distintas" luego no pueden repetirse: P9,3 = 9⋅8⋅7 = 504</p>
    <p>Por tanto, se pueden formar 504 números. </p>
    <h5>Combinaciones</h5>
    <p>En las combinaciones no importa el orden pero se pueden repetir elementos</p>
    <p>Tomamos las n ⋅( )( ) n −1 ⋅ n − 2 ⋅...⋅(n − k +1) posibilidades y las partimos en clases, de forma que en cada clase estén aquellas elecciones que sean la misma salvo el orden. Para k elementos, la forma de ordenarlos será k! y, así, en cada tipo se tienen exactamente k! casos. Por tanto, el número de tipos, es decir, el número de posibilidades de escoger k elementos sin importar el orden y sin repetir es </p>
    <center><img src="images/math_d/1/d6.png"></center>
    <p>Este número suele conocerse como el número de combinaciones de n elementos tomadas de k en k y se denota por: </p>
    <center><img src="images/math_d/1/d7.png"></center>
    <p>Se llama combinaciones de n elementos tomados de k en k (k ≤ n) atodas las clases posibles que pueden hacerse con los n elementos de forma que:</p>
    <p>• Cada agrupación está formada por n elementos distintos entre sí.</p>
    <strong><p>Ejemplos</p></strong>
    <p>Un alumno decide rendir tres de los cinco exámenes finales ¿De cuántas maneras distintas puede elegir esas tres pruebas? </p>
    <center><img src="images/math_d/1/d8.png"></center>
    <p>¿Cuántas combinaciones de 6 aciertos existen en la lotería primitiva? </p>
    <center><img src="images/math_d/1/d9.png"></center>
    <p>Es decir, que tendríamos que echar 13’983,816 apuestas de 6 números para tener la seguridad al 100% de que íbamos a acertar. </p>
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