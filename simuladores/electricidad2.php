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
						<a href="electricidad3.php"><img class="responsive-img" src="3circuito.png"></a>
						<center><h5><strong>Ejemplo 3</strong></h5></center>
					</div>
				</div>
			</div>
			</div>
	</div>

	<div class="row">
	<div class="card-panel green lighten-3">
		<center><h5><strong>Ejemplo 2</strong></h5></center>
		<div class="row">
		<div class="card-panel green lighten-4">
		<div class="row">
			<div class="col s12 m8 l8">
					<img class="responsive-img" src="2circuito.png">	
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

					var r23 = (1/r2)+(1/r3);
					var r23 = 1/r23;
					document.getElementById('r23').innerHTML = r23;

					var r67 = (r6+r7);
					document.getElementById('r67').innerHTML = r67;

					var r567 = (1/r5)+(1/r67);
					var r567 = 1/r567;
					document.getElementById('r567').innerHTML = r567;

					var r5678 = r8+r567;
					document.getElementById('r5678').innerHTML = r5678;

					var r45678 = (1/r4)+(1/r5678);
					var r45678 = 1/r45678;
					document.getElementById('r45678').innerHTML = r45678;

					var r123456789 = (r1+r23+r45678+r9);
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
		<p>Ya que R2 y R3 se encuentran en paralelo, se calcula lo siguiente, 1/((1/R2)+(1/R3)), con esto obtendremos la resistencia equivalente de R2 y R3.</p>
		<p>Y ahora el circuito quedaria de la siguiente manera.</p>
		<img class="responsive-img" src="2circuito2.png" align="center">
		<p>Las resistencias R6 y R7 estan en serie, lo que significa que las podemos sumar. </p>
		<img class="responsive-img" src="2circuito3.png" align="center">
		<p>Ya que R5 y R 6-7 se encuentran en paralelo, se calcula lo siguiente, 1/((1/R5)+(1/R 6-7)), con esto obtendremos la resistencia equivalente.</p>
		<img class="responsive-img" src="2circuito4.png" align="center">
		<p>R8 y R 5-6-7 estan en serie, entonces las sumamos. </p>
		<img class="responsive-img" src="2circuito5.png" align="center">
		<p>R4 y R 5-6-7-8 quedaron en paralelo, se calcula, 1/((1/R4)+(1/R 5-6-7-8)), con esto obtendremos la resistencia equivalente.</p>
		<img class="responsive-img" src="2circuito6.png" align="center">
		<p>Ahora todas las resistencias se encuentran en serie, lo cual solo implica sumarlas para obtener la resistencia total.</p>
		<img class="responsive-img" src="2circuito7.png" align="center">
		<p>Ya teniendo la resistencia total se puede calcular la corriente total I<sub>T</sub>=V/R<sub>T</sub></p>
		<p><strong>Resultados:</strong></p>
		<p><strong>Resistencia equivalente en R2 y R3:</strong> <span id="r23"></span></p>
		<p><strong>Resistencia equivalente en R6 y R7:</strong> <span id="r67"></span></p>
		<p><strong>Resistencia equivalente en R5 y R 6-7:</strong> <span id="r567"></span></p>
		<p><strong>Resistencia equivalente en R8 y R 5-6-7:</strong> <span id="r5678"></span></p>
		<p><strong>Resistencia equivalente en R4 y R 5-6-7-8:</strong> <span id="r45678"></span></p>
		<p><strong>Resistencia total:</strong> <span id="r123456789"></span></p>
		<p><strong>Corriente total:</strong> <span id="ct"></span></p>

		</div>



	</div>
	</div>
</div>

  <?php include('../includes/footer.php'); ?>	
</body>
</html>