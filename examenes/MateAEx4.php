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
  res[3]="a";
  res[4]="b";
  res[5]="d";
  res[6]="b";
  res[7]="b";
  res[8]="c";
  res[9]="b";
  res[10]="c";

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
      window.location="../temas/math_a1.php";

  }
</script>

  <meta charset="UTF-8">
  <title> Educa-2 | Examen Matematicas Avanzadas</title>
  <?php include('../includes/links.php'); ?>
</head>
<body>
<?php include('../includes/scrips.php'); ?>    
<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-4"><center>
<center><i class="medium material-icons">assessment</i><h4>Autoevaluación</h4></center>
<center><h4>Materia: Matematicas Avanzadas</h4></center>
<center><h5>Lee la pregunta y selecciona la respuesta que creas correcta, cuando estes seguro de tus respuestas da clic en el boton resultados.</h5></center>
</div>  
</div>
<div class="container">
<p>1.- Calcule el resultado de la siguiente integral por partes.</p>
<img src="imagesma/4-1.png">
<p><input type="radio" name="R1" id="a1" value="a" onClick="Engine(1,this.value)" /><label for="a1">A) 2X sen 2X + cos X +C.</label></p>
<p><input type="radio" name="R1" id="a2" value="b" onClick="Engine(1,this.value)" /><label for="a2">B) cos X + sen X +C.</label></p>
<p><input type="radio" name="R1" id="a3" value="c" onClick="Engine(1,this.value)" /><label for="a3">C) X sen X +cos X +C.</label></p>
<p><input type="radio" name="R1" id="a4" value="d" onClick="Engine(1,this.value)" /><label for="a4">D) – cos X + sen X + C.</label></p>

<p>2.- ¿Como se llama a una sumatoria infinita de ondas seno?</p>
<p><input type="radio" name="R2" id="b1" value="a" onClick="Engine(2,this.value)" /><label for="b1">A) Compoente senosoidal.</label></p>
<p><input type="radio" name="R2" id="b2" value="b" onClick="Engine(2,this.value)" /><label for="b2">B) Armonicos seno.</label></p>
<p><input type="radio" name="R2" id="b3" value="c" onClick="Engine(2,this.value)" /><label for="b3">C) Armonicos coseno.</label></p>
<p><input type="radio" name="R2" id="b4" value="d" onClick="Engine(2,this.value)" /><label for="b4">D) Simetria de cuarto de onda.</label></p>

<p>3.- ¿De que otra manera se le conoce a la serie de fourier?</p>
<p><input type="radio" name="R3" id="c1" value="a" onClick="Engine(3,this.value)" /><label for="c1">A) Señal.</label></p>
<p><input type="radio" name="R3" id="c2" value="b" onClick="Engine(3,this.value)" /><label for="c2">B) Polinomio.</label></p></a>
<p><input type="radio" name="R3" id="c3" value="c" onClick="Engine(3,this.value)" /><label for="c3">C) Binomio.</label></p>
<p><input type="radio" name="R3" id="c4" value="d" onClick="Engine(3,this.value)" /><label for="c4">D) Trinomio.</label></p>

<p>4.- ¿Si f (-x) = -f(x) para cualquier valor en x en el dominio de la función entonces f es una función? </p>
<p><input type="radio" name="R4" id="d1" value="a" onClick="Engine(4,this.value)" /><label for="d1">A) Par.</label></p>
<p><input type="radio" name="R4" id="d2" value="b" onClick="Engine(4,this.value)" /><label for="d2">B) Impar.</label></p>
<p><input type="radio" name="R4" id="d3" value="c" onClick="Engine(4,this.value)" /><label for="d3">C) Continua.</label></p>
<p><input type="radio" name="R4" id="d4" value="d" onClick="Engine(4,this.value)" /><label for="d4">D) Media onda.</label></p>

<p>5.- Determine las funciones de la siguiente serie.</p>
<img src="imagesma/4-5.png">
<p><input type="radio" name="R5" id="e1" value="a" onClick="Engine(5,this.value)" /><label for="e1">A) t-1 , 0≤t≤1 , 2t, 1≤t≤3 , 3-t , 3≤t≤4.</label></p>
<p><input type="radio" name="R5" id="e2" value="b" onClick="Engine(5,this.value)" /><label for="e2">B) 4-t , 1≤t≤2 , 0, 0≤t≤2 , t-2 , 3≤t≤4.</label></p>
<p><input type="radio" name="R5" id="e3" value="c" onClick="Engine(5,this.value)" /><label for="e3">C) 5t , 0≤t≤1 , 3t, 1≤t≤3 , 1/2t , 0≤t≤4.</label></p>
<p><input type="radio" name="R5" id="e4" value="d" onClick="Engine(5,this.value)" /><label for="e4">D) t1 , 0≤t≤1 , 0, 1≤t≤3 , t-4 , 3≤t≤4.</label></p>

<p>6. - ¿A que se el conoce como espectro? </p>
<p><input type="radio" name="R6" id="f1" value="a" onClick="Engine(6,this.value)" /><label for="f1">A) A un fantasma.</label></p>
<p><input type="radio" name="R6" id="f2" value="b" onClick="Engine(6,this.value)" /><label for="f2">B) Es una representacion de lineas verticales a la frecuencia del armonico  y de longitud igual a su amplitud.</label></p>
<p><input type="radio" name="R6" id="f3" value="c" onClick="Engine(6,this.value)" /><label for="f3">C) Es la amplitud n-esima para el armonico n.</label></p>
<p><input type="radio" name="R6" id="f4" value="d" onClick="Engine(6,this.value)" /><label for="f4">D) A una suma de binomios.</label></p>

<p>7. - ¿Que es una serie de fourier?</p>
<p><input type="radio" name="R7" id="g1" value="a" onClick="Engine(7,this.value)" /><label for="g1">A) Se conoce como frecuencia angular fundamental.</label></p>
<p><input type="radio" name="R7" id="g2" value="b" onClick="Engine(7,this.value)" /><label for="g2">B) Es una serie infinita que converge puntualmente a una funcion periodica y continua por partes.</label></p>
<p><input type="radio" name="R7" id="g3" value="c" onClick="Engine(7,this.value)" /><label for="g3">C) Se conoce como la componente fundamental porque tiene el mismo periodo la funcion.</label></p>
<p><input type="radio" name="R7" id="g4" value="d" onClick="Engine(7,this.value)" /><label for="g4">D) Se denomina el enesima armonica de la funcion periodica.</label></p>

<p>8.- ¿La serie trigonométrica que tiene estos coeficientes se denomina serie de Fourier de f? </p>
<p><input type="radio" name="R8" id="h1" value="a" onClick="Engine(8,this.value)" /><label for="h1">A) <img src="imagesma/4-8a.png"></label></p>
<p><input type="radio" name="R8" id="h2" value="b" onClick="Engine(8,this.value)" /><label for="h2">B) <img src="imagesma/4-8b.png"></label></p>
<p><input type="radio" name="R8" id="h3" value="c" onClick="Engine(8,this.value)" /><label for="h3">C) <img src="imagesma/4-8c.png"></label></p>
<p><input type="radio" name="R8" id="h4" value="d" onClick="Engine(8,this.value)" /><label for="h4">D) <img src="imagesma/4-8d.png"></label></p>

<p>9. - ¿Cómo se representa una función impar de media onda? </p>
<p><input type="radio" name="R9" id="i1" value="a" onClick="Engine(9,this.value)" /><label for="i1">A) <img src="imagesma/4-9a.png"></label></p>
<p><input type="radio" name="R9" id="i2" value="b" onClick="Engine(9,this.value)" /><label for="i2">B) <img src="imagesma/4-9b.png"></label></p>
<p><input type="radio" name="R9" id="i3" value="c" onClick="Engine(9,this.value)" /><label for="i3">C) <img src="imagesma/4-9c.png"></label></p>
<p><input type="radio" name="R9" id="i4" value="d" onClick="Engine(9,this.value)" /><label for="i4">D) <img src="imagesma/4-9d.png"></label></p>

<p>10. - ¿Cómo se representa una función par? </p>
<p><input type="radio" name="R10" id="j1" value="a" onClick="Engine(10,this.value)" /><label for="j1">A) <img src="imagesma/4-10a.png"></label></p>
<p><input type="radio" name="R10" id="j2" value="b" onClick="Engine(10,this.value)" /><label for="j2">B) <img src="imagesma/4-10b.png"></label></p>
<p><input type="radio" name="R10" id="j3" value="c" onClick="Engine(10,this.value)" /><label for="j3">C) <img src="imagesma/4-10c.png"></label></p>
<p><input type="radio" name="R10" id="j4" value="d" onClick="Engine(10,this.value)" /><label for="j4">D) <img src="imagesma/4-10d.png"></label></p>

<center><button class="btn waves-effect waves-light btn-large red lighten-2" type="submit" name="RESULTADOS" onClick="Score()";>Resultados
<i class="material-icons right">done</i></button></center>

<br><br>
</div>
<?php include('../includes/footer.php'); ?>
</body>
</html>