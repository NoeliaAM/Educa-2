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
  res[3]="a";
  res[4]="a";
  res[5]="c";
  res[6]="b";
  res[7]="a";
  res[8]="a";
  res[9]="d";
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
        answertext=answertext+"Correcto\n";
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
      window.location="../temas/math_d1.php";

  }
</script>

  <meta charset="UTF-8">
  <title> Educa-2 | Examen Matemáticas Discretas</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
<?php include('../includes/scrips.php'); ?>    
<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-4"><center>
<center><i class="medium material-icons">polymer</i><h4>Autoevaluación</h4></center>
<center><h4>Materia: Matematicas Discretas</h4></center>
<center><h5>Lee la pregunta y selecciona la respuesta que creas correcta, cuando estes seguro de tus respuestas da clic en el boton resultados.</h5></center>
</div>  
</div>
<div class="container">
<p>1.- ¿De cuantas formas diferentes puede contestar un alumno 4 preguntas de falso y verdadero?</p>
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) 34.</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) 32.</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) 31.</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) 36.</label></p>

<p>2.-¿En una clase de 35 alumnos se quiere elegir un comité formado por tres alumnos. ¿Cuántos comités diferentes se pueden formar?</p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">A) 6545 .</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">B) 6408 .</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">C) 6546 .</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">D) 6544 .</label></p>

<p>3.- ¿A una reunión asisten 10 personas y se intercambian saludos entre todos. ¿Cuántos saludos se han intercambiado? </p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">A) 45.</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">B) 47.</label></p>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">C) 46.</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">D) 43.</label></p>

<p>4. - En una bodega hay cinco tipos diferentes de botellas. ¿De cuántas formas se pueden elegir cuatro botellas </p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) 60.</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) 50.</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) 70.</label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D) 40.</label></p>

<p>5. -¿De cuántas formas pueden colocarse los 11 jugadores de un equipo de fútbol teniendo en cuenta que el portero no puede ocupar otra posición distinta que la portería? </p>
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) 3590085.</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) 3629800.</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) 3628800.</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) 3628900.</label></p>

<p>6.-De cuántas formas distintas pueden sentarse ocho personas en una fila de butacas?</p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) 40325.</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) 40320.</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) 41320.</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) 40322.</label></p>

<p>7. -Se ordenan en una fila 5 bolas rojas, 2 bolas blancas y 3 bolas azules. Si las bolas de igual color no se distinguen entre sí, ¿de cuántas formas posibles pueden ordenarse?  </p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) 2320.</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) 2210.</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) 2115.</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) 2520.</label></p>

<p>8. -Calcular las permutaciones de 6 elementos.  </p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) 720.</label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) 810.</label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) 630.</label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) 590.</label></p>

<p>9. -Calcular el número de combinaciones de 10 elementos tomados de 4 en 4 . </p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) 211.</label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) 250.</label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) 240.</label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) 210.</label></p>

<p>10. -En una clase de 35 alumnos se quiere elegir un comité formado por tres alumnos. ¿Cuántos comités diferentes se pueden formar?  </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) 6545.</label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) 6544.</label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) 6523.</label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) 6589.</label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>