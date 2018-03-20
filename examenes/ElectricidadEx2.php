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

  res[1]="c";
  res[2]="b";
  res[3]="d";
  res[4]="a";
  res[5]="d";
  res[6]="c";
  res[7]="a";
  res[8]="b";
  res[9]="d";
  res[10]="d";

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
      window.location="../temas/eym_1.php";

  }
</script>

  <meta charset="UTF-8">
  <title> Educa-2 | Examen Electricidad y Magnetismo</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
<?php include('../includes/scrips.php'); ?>    
<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-4"><center>
<center><i class="medium material-icons">settings_input_composite</i><h4>Autoevaluación</h4></center>
<center><h4>Materia: Electricidad y Magnetismo</h4></center>
<center><h5>Lee la pregunta y selecciona la respuesta que creas correcta, cuando estes seguro de tus respuestas da clic en el boton resultados.</h5></center>
</div>  
</div>
<div class="container">
<p>1.-estas define algunas caracteristicas fisicas</p>
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) masa</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) tiempo</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) dimension</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) corriente electrica</label></p>

<p>2.-es un estandar o referencia mediante la cual una dimension se expresa en forma numerica</p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">A) corriente electrica</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">B) unidad</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">C) tiempo</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">D) longitud</label></p>

<p>3.-la cantidad basica de electricidad es la carga</p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">A) K</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">B) G</label></p>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">C) J</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">D) Q</label></p>

<p>4. -cualquier superficie cerrada, real o imaginaria puede ser denominada</p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) superficie gaussiana</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) superficie definida</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) superficie integrada</label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D) superficie irreal</label></p>

<p>5. - Son muy utilizadas para obtener los valores de la corriente y el potencial en cada punto de un circuito eléctrico</p>
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) leyes de newton</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) leyes de exponentes</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) leyes de kepler</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) leyes de kirchhoff</label></p>

<p>6.- Este método es muy utilizado para resolver circuitos resistivos (circuitos con sólo resistencias) lineales (este método, un poco más ampliado, se aplica a también a circuitos resistivos – reactivos). </p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) series de fourier</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) analisis de circuitos</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) analisis de mallas</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) integracion</label></p>

<p>7.- 7.- Esta unidad de medida se representa con el símbolo o letra griega Ω (omega). </p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) ohm</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) amperes</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) newton</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) voltios</label></p>

<p>8.-Es el trabajo que debe realizar un campo electrostático para mover una carga positiva desde dicho punto hasta el punto de referencia, dividido por unidad de carga de prueba: </p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) movimiento</label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) potencial electrico</label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) trabajo electrico</label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) energia potencial</label></p>

<p>9.-Se define como la resistencia que ofrece al paso de la corriente eléctrica una columna de mercurio (Hg) de 106,3 cm de alto, con una sección transversal de 1 mm2, a una temperatura de 0º Celsius. </p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) voltios</label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) amperios</label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) hertz</label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) ohmios</label></p>

<p>10.-Se define como el campo eléctrico multiplicado por el área de la superficie proyectada sobre un plano perpendicular al campo: </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) trabajo</label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) fuerza</label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) vector</label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) flujo electrico</label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>