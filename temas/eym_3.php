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
    <blockquote><h3>Ley de Coulomb</h3></blockquote>
    <p>El científico francés Charles Coulomb formuló en 1878 la ley que lleva su nombre. Coulomb investigó la magnitud de la fuerza de interacción entre pequeñas esferas cargadas eléctricamente. Coulomb investigó la magnitud de la fuerza de interacción entre pequeñas esferas cargadas eléctricamente. En aquella época nada se sabía acerca de la constitución interna de los átomos y para la mayoría de los científicos la existencia de los mismos era sólo una hipótesis. Pero lo que si se conocía era que en condiciones especiales ciertos cuerpos experimentaban fuerzas de atracción o de repulsión sin necesidad de estar en contacto. En la época de Coulomb, la investigación acerca de este tipo de fuerzas había conducido a los científicos a la elaboración de una sencilla teoría que se basaba fundamentalmente en las siguientes ideas fundamentales:</p>
    <p>• Existen dos tipos de carga eléctrica: la positiva y la negativa.</p>
    <p>• Las cargas eléctricas del mismo signo se repelen, y las cargas de signos opuestos se atraen.</p>
    <p>• La carga eléctrica no puede ser creada ni destruida. Sólo es posible transferirla de un cuerpo a otro. Esta idea se conoce como Principio de conservación de la carga eléctrica y su enunciado formal es el siguiente: En un sistema eléctricamente aislado, la suma algebraica de las cargas eléctricas positivas y negativas es constante.</p>
    <p>• Respecto al comportamiento eléctrico existen dos tipos de materiales. Lo conductores en los que la carga eléctrica se puede mover con facilidad, puede fluir, es decir trasladarse por todo el material. Los aislantes o dieléctricos que se pueden cargar, pero la carga queda localizada en cierta región del material. La carga no puede fluir por ellos.</p>
    <p>La Ley de Coulomb, que establece la fuerza entre dos cargas eléctricas puntuales, constituye el punto de partida de la Electrostática como ciencia cuantitativa. Entendemos por carga puntual una carga eléctrica localizada en un punto geométrico del espacio. Evidentemente, una carga puntual no existe, es una idealización, pero constituye una buena aproximación cuando estamos estudiando la interacción entre cuerpos cargados eléctricamente cuyas dimensiones son muy pequeñas en comparación con la distancia que existen entre ellos. La fuerza electrostática entre dos cargas eléctricas puntuales y estacionarias q1 y q2 es proporcional al producto de sus cargas e inversamente proporcional al cuadrado de la distancia que la separa, y su dirección se determina con la recta que los une. La magnitud de esta fuerza se calcula de:</p>
    <center><img src="images/eym/3/for1.png"></center>
    <p>Donde la constante k (en el vacío) S.I</p>
    <center><img src="images/eym/3/for2.png"></center>
    <p>En muchos problemas se expresa la k en función de la permitividad del vacío,<img src="images/eym/3/for3.png">, es decir:</p>
    <center><img src="images/eym/3/for4.png"></center>
    <p>Donde:<img src="images/eym/3/for5.png">Cuando el medio que rodea a las cargas no es el vacío, disminuye la fuerza entre las cargas puntuales. Si el material tiene una constante dieléctrica se debe de reemplazar <img src="images/eym/3/for6.png"> por la permitividad del material.</p>
    <h5>Principio de superposición</h5>
    <p>En una distribución arbitraria de cargas eléctricas. La fuerza que ejerce una carga sobre otra. No depende de las fuerzas que ejercen las demás. De acuerdo con esto, la fuerza eléctrica total sobre una carga se determina al sumar vectorialmente las fuerzas que existen entre dicha carga y cada una de las otras cargas.</p>
    <center><img src="images/eym/3/for7.png"></center>
    <p>Donde:</p>  
    <p>• F: Fuerza total sobre la carga q.</p>
    <p>• <img src="images/eym/3/for8.png"></p>            
    <p>El principio de superposición es válido para todas las situaciones.</p>
    <h3>Intensidad del campo eléctrico</h3>
    <p>Se llama intensidad de campo eléctrico (en un punto) a la fuerza eléctrica que actúa sobre la unidad de carga eléctrica positiva (carga de prueba) que está colocada en dicho punto:</p>
    <center><img src="images/eym/3/for9.png"></center>
    <p>La unidad de la intensidad de campo eléctrico en el SI es el N/C. La intensidad de campo eléctrico E, es una magnitud vectorial que tiene la misma dirección que la fuerza eléctrica. La intensidad de campo eléctrico debido a una carga puntual que está a una distancia r de ella se calcula por:</p>
    <center><img src="images/eym/3/for10.png"></center>
    <p>Donde:</p>  
    <p>• <strong>r</strong>: Vector unitario que va de la carga eléctrica al punto considerado.</p>
    <p>• <strong>q</strong> Carga eléctrica que genera campo eléctrico.</p>        
    <h5>Condensadores</h5>
    <p>Otra forma de transmitir cargas electricas es por influecia. Aqui las cargas se transmiten sin que los cuerpos se toquen. Al acercar una carga a un conductor neutro, este se electriza por influecia con la carga opuesta a la carga acercada. Cuanto mayor es la carga que se acerca, mayor será el potencial que el conductor neutro adquiere. Se define capacidad de un conductor a la realacion entre la carga que se comunica al conductor y el potencial que este adquiere.</p>
    <center><img src="images/eym/3/for11.png"></center>
    <p>La unidad utilizada para dicha capacidad se llama faladio, y se define como la capacidad de un conductor que adquiere un potencial de 1V cuando tiene una carga de 1C. Un condensador es un dispositivo utilizado para almacenar cantidades de carga. Consiste consiste en dos conductores metalicos que están separados por un aislante. si uno de estos conductores esta cargado , el otro, inicialmente neutro, se cargará por influencia de manera tal que la carga total del condensador será nula. Así cada uno de los conductores presentaran potenciales diferentes. La capacidad de un conductor se difine como el cociente entre cualquiera de las dos cargas y la diferencia de potencial que existe entre ellos.</p>
    <p>Ya que existe distintos tipos de condensadores (palnos, cilindricos, esfericos) la capaciadad de los mismos tambien depende de la superficie de los conductores.</p>
    <p>Para conseguir un condensador de capacitad determinada, se procede asociando varios condensadores de una capacidad para lograr una llamada capacidad equivalente. Dicha asociacion se puede realizar de dos maneras: en serie y en paralelo.</p>
    <h5>Asociacion de condensadores en serie</h5>
    <p>Varios condensadores estan asociados en serie cuando un conductor de ellos está conectado con un conductor de otro condensador. Aquí, todos los condensadores tendrian la misma carga.</p>
    <p>Si se tienen 2 condensadores conectados en serie de capacidades C1 y C2 con potenciales  V1 y V2 el condensador equivalente de carga Q y capaciad C tendrá un potencial V equivalente a la suma de potenciales de los conductores que lo conforman.</p>
    <p>Como el potencial de cada condensador es:</p>
    <center><img src="images/eym/3/for12.png"></center>
    <p>Entonces, al sumar los potenciales, resulta que,</p>
    <center><img src="images/eym/3/for13.png"></center>
    <p>Entonces resulta,</p>
    <center><img src="images/eym/3/for14.png"></center>
    <p>Resultando que en este tipo de asociación, la inversa de la capacidad equivalente del sistema es igual a la suma de los inversos de las capacidades de cada uno de los condensadores asociados.</p>  
    <center><img src="images/eym/3/for15.png"></center>
    <h5>Asociacion de condensadores en paralelo</h5>
    <p>La asociacion en paralelo de condensadores se da como lo muestra la siguiente figura.</p>
    <center><img src="images/eym/3/for16.png"></center>
    <p>Aquí, todos los condensadores están en la misma diferencia de potencial. Considerando dos condensadores C1 y C2, con una diferencia potencial de V, las cargas que se almacenan resultan,</p>
    <center><img src="images/eym/3/for17.png"></center>
    <p>Sumando las cargas obtenemos,</p>
    <center><img src="images/eym/3/for18.png"></center>
    <p>El condensador equivalente en esta asociación tendrá una capacidad C y un potencial V (mismo que el de los condensadores asociados). Su carga Q = C * V será la suma de las cargas de los condensadores, resultando que,</p>
    <center><img src="images/eym/3/for19.png"></center>
    <p>Entonces, la capacidad equivalente a la asociación de los condensadores en paralelo es igual a la suma de las capacidades de los condensadores asociados.</p>  
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