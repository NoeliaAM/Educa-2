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

<script type="text/javascript">
  var res=new Array;
  var no=new Array;
  var tures=new Array;
  var explicares=new Array;
  var calif=0;

  res[1]="d";
  res[2]="a";
  res[3]="c";
  res[4]="d";
  res[5]="b";
  res[6]="c";
  res[7]="c";
  res[8]="b";
  res[9]="b";
  res[10]="a";

  explicares[1]="Respuesta incorrecta";
  explicares[2]="Respuesta incorrecta";
  explicares[3]="Respuesta incorrecta";
  explicares[4]="Respuesta incorrecta";
  explicares[5]="Respuesta incorrecta";
  explicares[6]="Respuesta incorrecta";
  explicares[7]="Respuesta incorrecta";
  explicares[8]="Respuesta incorrecta";
  explicares[9]="Respuesta incorrecta";
  explicares[10]="Respuesta incorrecta";

  function Engine(question,answer)
  {
    tures[question]=answer;
  }

  function Score()
  {
    var answertext="Resultados: \n";
    calif=0;
    for(i=1;i<=10;i++)
    {
      answertext=answertext+"Pregunta "+i+": ";
      if(res[i]!=tures[i])
      {
        answertext=answertext+explicares[i]+"\n";
      }else{
        answertext=answertext+"Correcto \n";
        calif++;
      }
    }
    answertext=answertext+"\nCalificación: "+calif+"\n";
    answertext=answertext+"\nDiagnostico: ";
    if(calif<=5)
    {
      answertext=answertext+"Reprobado";
    }

    if (calif>5)
    {
      answertext=answertext+"Aprobado";
    }
    
      alert(answertext)
      window.location="../temas/pye_1.php";

  }
</script>

  <meta charset="UTF-8">
  <title> Educa-2 | Examen Probabilidad y Estadistica</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
<?php include('../includes/scrips.php'); ?>    
<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-4"><center>
<center><i class="medium material-icons">equalizer</i><h4>Autoevaluación</h4></center>
<center><h4>Materia: Probabilidad y Estadistica</h4></center>
<center><h5>Lee la pregunta y selecciona la respuesta que creas correcta, cuando estes seguro de tus respuestas da clic en el boton resultados.</h5></center>
</div>  
</div>
<div class="container">
<p>1.- La probabilidad de que una industria americana se ubique en Shanghái China es 0.7; la probabilidad de que se ubique en Beijin China es 0.4 y la probabilidad de que se ubique en shanghai o bejín en ambas es 0.8 ¿Cuál es la probabilidad de que la industria se ubique?</p>
<p>a.- en ambas ciudades</p>
<p>b.- en ninguna de esas ciudades </p>
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) 0.5 y 0.4.</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) 0.8 y 0.2.</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) 0.7 y 0.3.</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) 0.3 y 0.7.</label></p>

<p>2.-De experiencias pasadas un agente bursátil considera que las condiciones económicas actuales un cliente invertirá en bonos libres de impuestos con una probabilidad del 0.6 que invertirá en fondos mutualistas con una probabilidad del 0.3 y que invertirá en ambos con una probabilidad del 0.15. Encuentre la probabilidad de que un cliente invierta:
a.- en bonos libres de impuestos o fondos mutualistas
b.- en ninguno de esos instrumentos</p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">A) 0.75 y 0.25.</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">B) 0.35 y 0.65.</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">C) 0.75 y 0.40.</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">D) 0.45 y 0.65.</label></p>

<p>3.- Se conjetura que hay impurezas en el 30% del total de pozos de agua potable de cierta comunidad para obtener algún conocimiento del problema se determina que debería realizarse cierto tipo de prueba todos los pozos del área por lo que se eligieron 10 aleatoriamente para una prueba.
Utilizando la distribución binomial ¿Cuál es la probabilidad de que exactamente 3 pozos tengan impurezas considerando que la conjetura es correcta?</p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">A) 0.45.</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">B) 0.86.</label></p>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">C) 0.26.</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">D) 0.24.</label></p>

<p>4. - ¿Cuál es la probabilidad de que más de 3 pozos tengan impurezas? </p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) 0.20.</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) 0.32.</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) 0.15.</label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D) 0.07.</label></p>

<p>5. -¿Calcule su media y su varianza? </p>
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) 4.2 y 2.1 .</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) 3 y 2.1.</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) 4 y 6.</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) 5 y 3.</label></p>

<p>6.-Un fabricante de automóviles está preocupado por el posible retiro de su sedan de 4 puertas con mayor venta. Si hubiera un retiro; existe una probabilidad de 0.25 de que haya un defecto en el sistema de frenos de 0.18 en la transmisión de 0.17 en el sistema de combustible y de 0.40 en alguna otra área.
¿Cuál es la probabilidad de que el defecto este en los frenos o en el sistema de combustible si la probabilidad de defectos simultáneos en ambos sistemas es 0.15?
</p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) 20%.</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) 56%.</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) 43%.</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) 30%.</label></p>

<p>7. -Lotes de 40 componentes cada uno se denominan aceptables si no contienen mas de 3 defectuosos. El procedimiento para muestrear el lote consiste en seleccionar 5 componentes al azar y rechazar el lote si se encuentra un componente defectuoso.
¿Cuál es la probabilidad de que se encuentre exactamente 1 defectuoso en la muestra, si hay 3 defectuosos en todo el lote?</p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) 0.40</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) 0.50</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) 0.30.</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) 0.60.</label></p>

<p>8. -Una compañía está interesada en evaluar el procedimiento de inspección actual de embarques de 50 artículos. El procedimiento consiste en tomar una muestra de 5 y pasar el embarque si no se encuentra más de 2 defectuosos
¿Qué porción de embarques con 20% de defectuosos aceptará?</p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) 0.029 .</label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) 0.036.</label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) 0.042.</label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) 0.27.</label></p>

<p>9. -En ciertas instalaciones los accidentes ocurren con muy poca frecuencia. Se sabe que la probabilidad de un accidente en cualquier día es 0.005 y los accidentes son dependientes entre si.
¿Cuál es la probabilidad de que en cualquier periodo dado de 400 días habrá un accidente en un día?</p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) 0.029.</label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) 0.27.</label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) 0.042.</label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) 0.036.</label></p>

<p>10.- Durante un experimento de laboratorio el numero promedio de partículas radioactivas que pasan atreves de un contador en un milisegundo es 4
¿Cuál es la probabilidad de que 6 partículas entren al contador en un milisegundo dado? </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) 0.10.</label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) 0.40.</label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) 0.32.</label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) 0.15.</label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>