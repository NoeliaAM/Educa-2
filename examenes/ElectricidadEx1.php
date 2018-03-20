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
  res[2]="c";
  res[3]="c";
  res[4]="a";
  res[5]="d";
  res[6]="a";
  res[7]="c";
  res[8]="c";
  res[9]="d";
  res[10]="b";

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

<div class="container">
<p>1.- ¿Cual es el flujo electrico atravez de una esfera que tenga un radio de 1m y porta una carga de 1Mc en el centro? </p>
<img src="">
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) 112.88x10^3</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) 121.78x10^3</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) 225.38x10^3</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) 182.58x10^3</label></p>

<p>2.-dos cargas q1= 4Mc y q2= -8Mc están separadas una distancia de 4mm.
Con que fuerza se atraen?</p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">18400 N</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">18300 N</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">18000 N</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">18200 N</label></p>

<p>3.- determinar la fuerza que actúa sobre las cargas eléctricas q1= 1x10^(-6) C y q2= 2.5x10^(-6)C.que se encuentran en reposo y en el vacío a una distancia de 5 cm. </p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">7 N</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">8 N</label></p></a>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">9 N</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">10 N</label></p>

<p>4. -determine la fuerza que actúa sobre las cargas eléctricas q1=-1.25x10^(-9 ) C y q1=2x10^(-5 ) C. Que se encuentran reposando y en el vacio de una distancia de 10 cm</p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) 2.25x10^(-2 ) N</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) 2x10^(-2 ) N</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) 1.25x10^(-2 ) N </label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D) 2.10x10^(-2 ) N</label></p>

<p>5. -Una carga de 3×10^-6 C se encuentra 2 m de una carga de -8×10^-6 C, ¿Cuál es la magnitud de la fuerza de atracción entre las cargas?</p>
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) 0.053 N</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) 0.059 N</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) 0.055 N</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) 0.054 N</label></p>

<p>6. -Una carga de -5×10^-7 C ejerce una fuerza a otra carga de 0.237 N a una distancia de 3.5 metro, ¿cuál es el valor de la segunda carga? </p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) -0.644x10^(-3 ) C</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) -0.645x10^(-3 ) C</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) -0.674x10^(-3 ) C</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) -0.634x10^(-3 ) C </label></p>

<p>7. -Una carga de 2Mc se localizan del origen y una carga de -6Mc se encuentran en el punto (0,3) como se muestra en la figura. 
Encuentre el potencial eléctrico total debido a estas cargas en el punto p(4,0).</p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) 6245.89 Mc</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) 6542.21 Mc</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) 6291.42 Mc</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) 5989.95 Mc</label></p>

<p>8. -Encuentre el cambio d energía potencial de una carga de 3Mc que se mueve desde el infinito hasta el punto P.</p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) 0.017894 Mc</label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) 0.018895 Mc</label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) 0.018874 Mc</label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) 0.017876 Mc</label></p>

<p>9. -un capacitor de placas paralelas tienen un área de 2x10^(-4)m y una separación de placa de 1mm. Encuentre su capacitancia</p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) 1.79pf</label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) 1.48pf</label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) 1.89pf</label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) 1.77pf</label></p>

<p>10. -¿Cual es la capacitancia para una separación de placas de 3mm?  </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) 0.954pf</label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) 0.590pf</label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) 0.789pf</label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) 0.890pf</label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>