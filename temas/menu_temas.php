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
	<title>Educa-2 | Temas</title>
<?php
include ('../includes/links.php');
?>
</head>
<body>

<?php
include ('../includes/navbar.php');
?>

<?php
include ('../includes/scrips.php');
?>

  <div class="row">
         		<div class="row container">
      			<h3 align="center" class="header">Materias</h3>
       			<h3 align="center">¿Que quieres aprender hoy?</h3>
      				<p class="grey-text text-darken-3 lighten-3" align="center"> Aqui puedes encontrar una lista de materias, con temas que te pueden interesar mucho. ¡A explorar!.
					</p>
     		</div>
    </div>

<div class="row">
<div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="../images/clock.jpg">
          <span class="card-title">Matematicas Avanzadas</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="math_a1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Temas contenidos:</strong> Serie de Fourier, Transformada de Fourier, Transformada Z.</p>
        </div>
</div>
<div class="card">
        <div class="card-image">
          <img src="../images/prog.jpg">
          <span class="card-title">Estructura de Datos</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="edd_1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Temas contenidos:</strong> Arreglos Unidimensionales, Arreglos Bidimensionales y Metodos de ordenacion.</p>
        </div>
</div>
</div>

<div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="../images/probye.jpg">
          <span class="card-title">Probabilidad y Estadistica</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="pye_1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Temas contenidos:</strong> Distribución Binomial, Distribución Hipergeometrica, Distribución de Poisson y Desviación Estandar.</p>
        </div>
</div>
<div class="card">
        <div class="card-image">
          <img src="../images/rule.jpg">
          <span class="card-title">Matematicas Discretas</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="math_d1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Temas contenidos:</strong> Análisis Combinatorio, y Relaciones y Funciones.</p>
        </div>
</div>
</div>

<div class="col s12 m4 l4">
<div class="card">
        <div class="card-image">
          <img src="../images/red.jpg">
          <span class="card-title">Inglés</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="ingles.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p>Mejora tu pronunciacion con los videos que tenemos para ti, amplia tu conocimiento y tus oportunidades.</p>
        </div>
</div>
<div class="card">
        <div class="card-image">
          <img src="../images/volts.jpg">
          <span class="card-title">Electricidad y Magnetismo</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red lighten-2" href="eym_1.php"><i class="material-icons">call_made</i></a>
        </div>
        <div class="card-content">
          <p><strong>Temas contenidos:</strong> Ley de Gauss, Ley de Ohm y Ley de Coulomb.</p>
        </div>
</div>
</div>
</div>

<?php
include ('../includes/footer.php');
?>

</body>
</html>