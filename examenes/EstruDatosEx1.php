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

  res[1]="a";
  res[2]="b";
  res[3]="c";
  res[4]="d";
  res[5]="d";
  res[6]="b";
  res[7]="d";
  res[8]="a";
  res[9]="a";
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
      window.location="../temas/edd_1.php";

  }
</script>

  <meta charset="UTF-8">
  <title> Educa-2 | Examen Estructura de Datos</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
<?php include('../includes/scrips.php'); ?>    
<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-4"><center>
<center><i class="medium material-icons">view_list</i><h4>Autoevaluación</h4></center>
<center><h4>Materia: Estructura de datos</h4></center>
<center><h5>Lee la pregunta y selecciona la respuesta que creas correcta, cuando estes seguro de tus respuestas da clic en el boton resultados.</h5></center>
</div>  
</div>
<div class="container">
<p>1.- ¿Qué es el ordenamiento quicksort?</p>
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) Este método consiste en acomodar el vector moviendo el mayor hasta la última casilla comenzando desde la casilla cero del vector hasta haber acomodado el número más grande en la última posición.</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) Es un vector.</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) Es un algoritmo basado en la técnica de divide y vencerás, que permite, en promedio, ordenar n elementos en un tiempo proporcional.</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) Es una lista ordinal o estructura de datos en la que el modo de acceso a sus elementos es de tipo LIFO.</label></p>

<p>2.-¿Qué son las colas? </p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">A) Es una secuencia de elementos.</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">B) Es una secuencia de nodos que guardan campos de datos.</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">C) Un nodo.</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">D) Es una estructura de datos caracterizada por ser una secuencia de elementos.</label></p>

<p>3.- ¿Qué es un algoritmo? </p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">A) Es un programa para hacer algoritmos.</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">B) Es una serie de pasos que permite dar solución a un problema.</label></p>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">C) Es una colección de datos que permite organizar.</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">D) Ninguna de las anteriores.</label></p>

<p>4. - ¿Qué son estructuras de datos? </p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) Es un programa que permite hacer algoritmos.</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) Es una colección de datos que permite organizar y operar con fines determinados.</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) Es una serie de números que permite organizar para realizar una tarea.</label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D)  Ninguna de las anteriores.</label></p>

<p>5. -¿Qué es un problema? </p>
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) Es una situación en la cual es complicada.</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) Son datos con información altamente relacionada.</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) Es un enunciado el cual tiene una incógnita el cual tiene una solución.</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) Todos los anteriores.</label></p>

<p>6. -¿Qué se entiende por codificación? </p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) Plantear un problema y resolverlo mediante algoritmos.</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) Plantear la solución a un problema.</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) Mucho código.</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) Plasmar un algoritmo en un lenguaje de programación.</label></p>

<p>7. -¿Cuántos y cuáles son los tipos de ordenamientos? </p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) 2, Entrada y de salida.</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) 2, internos y externos.</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) 3, internos , externos , alternativos.</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) b y c.</label></p>

<p>8. -¿Para qué sirve la operación Pop? </p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) Para extraer un elemento.</label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) Para importar un elemento.</label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) Para exportar un elemento.</label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) Para insertar un elemento.</label></p>

<p>9. -¿En qué consiste los métodos de recolección de datos? </p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) Desarrollar algoritmos con métodos.</label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) Desarrollar representaciones con elementos diferenciados .</label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) En solicitar el nuevo dato y seleccionar donde desee insertar.</label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) A y B.</label></p>

<p>10. -¿Para qué sirve la operación Push? </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) Para importar un elemento.</label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) Para insertar un elemento.</label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) Para extraer un elemento.</label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) Para exportar un elemento.</label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>