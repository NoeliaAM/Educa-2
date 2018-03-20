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
	<title>Circuitos | Educa-2</title>
	<?php include('../includes/links.php'); ?>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>


  <div class="row">
         		<div class="row container">
      			<h3 align="center" class="header">Ejercicios</h3>
      				<p align="center">Elige el circuito de tu preferencia, ingresa los valores que desees para las resistencias correspondientes, mas un voltaje y nosotros te mostramos como calcular los resultados.</p>
     		</div>
  </div>

<div class="container">
	<div class="row">
			<div class="card-panel green lighten-4">
			<div class="row">
				<div class="col s12 m6 l6">
					<div class="card-panel green">
						<a href="electricidad.php"><img class="responsive-img" src="circuito.png"></a>
						<center><h5><strong>Ejemplo 1</strong></h5></center>
					</div>
				</div>
				<div class="col s12 m6 l6">
					<div class="card-panel green">
						<a href="electricidad2.php"><img class="responsive-img" src="2circuito.png"></a>
						<center><h5><strong>Ejemplo 2</strong></h5></center>
					</div>
				</div>
			</div>
			</div>
	</div>

	<div class="row">
	<div class="card-panel green lighten-3">
		<center><h5><strong>Ejemplo 3</strong></h5></center>
		<div class="row">
		<div class="card-panel green lighten-4">
		<div class="row">
			<div class="col s12 m8 l8">
					<img class="responsive-img" src="3circuito.png">	
			</div>
					
			<div class="col s12 m4 l4">
				
					<div class="card-panel green lighten-3">
					<form name="datos" id="datos">          
					      <div class="row">
					        <div class="input-field inline col s12">
					            <input id="r1" type="text" class="validate">
					            <label for="r1">Valor de R1</label>
							</div>          
					        <div class="input-field inline col s12">
					            <input id="r2" type="text" class="validate">
					            <label for="r2">Valor de R2</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="r3" type="text" class="validate">
					            <label for="r3">Valor de R3</label>
							</div>          
					        <div class="input-field inline col s12">
					            <input id="r4" type="text" class="validate">
					            <label for="r4">Valor de R4</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="r5" type="text" class="validate">
					            <label for="r5">Valor de R5</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="r6" type="text" class="validate">
					            <label for="r6">Valor de R6</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="r7" type="text" class="validate">
					            <label for="r7">Valor de R7</label>
							</div>          
					        <div class="input-field inline col s12">
					            <input id="r8" type="text" class="validate">
					            <label for="r8">Valor de R8</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="r9" type="text" class="validate">
					            <label for="r9">Valor de R9</label>
							</div>
					        <div class="input-field inline col s12">
					            <input id="v" type="text" class="validate">
					            <label for="v">Valor del Voltaje</label>
							</div>
					      </div>
							<center><button class="btn waves-effect waves-light red lighten-2" type="button" onClick="Resolver();">Resolver</button></center><br>
					</form>
					</div>
			</div>
			</div>
		</div>
		</div>

		<script type="text/javascript">
			  function mostrar()
    			{
    			document.getElementById('oculto').style.display = 'block';
    			}

			function Resolver(){
				var r1 = Number(document.getElementById('r1').value);
				var r2 = Number(document.getElementById('r2').value);
				var r3 = Number(document.getElementById('r3').value);
				var r4 = Number(document.getElementById('r4').value);
				var r5 = Number(document.getElementById('r5').value);
				var r6 = Number(document.getElementById('r6').value);
				var r7 = Number(document.getElementById('r7').value);
				var r8 = Number(document.getElementById('r8').value);
				var r9 = Number(document.getElementById('r9').value);
				var v = Number(document.getElementById('v').value);

		        if(r1 <1 || r2 <1|| r3 <1 || r4 < 1 || r5 <1 || v <1 || r6 <1 || r7 < 1 || r8 <1 || r9 <1 ){
				   alert("Ingrese valores validos.");   
				}else if (r1 ==""|| r2 ==""|| r3 ==""|| r4 ==""|| r5 ==""|| r6 ==""|| r7 ==""|| r8 ==""|| r9 ==""|| v ==""){
					alert("Ingrese valores.");    
				}else{

					var r345 = r3+r4+r5;
					document.getElementById('r345').innerHTML = r345;

					var r3459 = (1/r9)+(1/r345);
					var r3459 = 1/r3459;
					document.getElementById('r3459').innerHTML = r3459;

					var r234569 = r2+r6+r3459;
					document.getElementById('r234569').innerHTML = r234569;

					var r2345689 = (1/r8)+(1/r234569);
					var r2345689 = 1/r2345689;
					document.getElementById('r2345689').innerHTML = r2345689;

					var r123456789 = (r1+r2345689+r7);
					document.getElementById('r123456789').innerHTML = r123456789; 

					var ct = v/r123456789;
					document.getElementById('ct').innerHTML = ct;

					mostrar();
				}
				}

		</script>
		<div class="card-panel green lighten-4" id='oculto' style='display:none;' align="center">
		<!-- <div class="card-panel green lighten-4"> -->
		<p><strong>Procedimiento:</strong></p>
		<p>R3, R4 y R5 se encuentran en serie, por lo tanto solo se suman.
		<p>Y ahora el circuito quedaria de la siguiente manera.</p>
		<img class="responsive-img" src="3circuito2.png" align="center">
		<p>R9 y R 3-4-5, quedaron en paralelo, entonces se saca su resistencia equivalente, 1/((1/R9)+(1/R 3-4-5)) </p>
		<img class="responsive-img" src="3circuito3.png" align="center">
		<p>R2, R6 y R 3-4-5-9 se encuentran en serie, por lo tanto solo se suman.
		<img class="responsive-img" src="3circuito4.png" align="center">
		<p>R8 y R 2-3-4-5-6-9 estan en paralelo, se calcula su resistencia equivalente, 1/((1/R8)+(1/R 2-3-4-5-6-9))</p>
		<img class="responsive-img" src="3circuito5.png" align="center">
		<p>R1, R7 y R 2-3-4-5-6-8-9 se encuentran en serie, por lo tanto solo se suman.
		<img class="responsive-img" src="3circuito6.png" align="center">
		<p>Ahora todas las resistencias se encuentran en serie, lo cual solo implica sumarlas para obtener la resistencia total.</p>
		<p>Ya teniendo la resistencia total se puede calcular la corriente total I<sub>T</sub>=V/R<sub>T</sub></p>

		<p><strong>Resultados:</strong></p>
		<p><strong>Resistencia equivalente en R3, R4 y R5:</strong> <span id="r345"></span></p>
		<p><strong>Resistencia equivalente en R9 y R 3-4-5:</strong> <span id="r3459"></span></p>
		<p><strong>Resistencia equivalente en R2, R6 y R 3-4-5-9:</strong> <span id="r234569"></span></p>
		<p><strong>Resistencia equivalente en R8 y R 2-3-4-5-6-8-9:</strong> <span id="r2345689"></span></p>
		<p><strong>Resistencia total:</strong> <span id="r123456789"></span></p>
		<p><strong>Corriente total:</strong> <span id="ct"></span></p>

		</div>



	</div>
	</div>
</div>

  <?php include('../includes/footer.php'); ?>	
</body>
</html>