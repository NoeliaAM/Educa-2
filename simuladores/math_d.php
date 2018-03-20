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
	<title>Permutaciones y Combinaciones | Educa-2</title>
  	<?php include('../includes/links.php'); ?>


  	<style type="text/css">
  		.fraction {
    display: inline-block;
    vertical-align: middle; 
    margin: 0 0.2em 0.4ex;
    text-align: center;
}
    .nose {
    color: blue;

}
.fraction > span {
    display: block;
    padding-top: 0.15em;
}
.fraction span.fdn {border-top: thin solid black;}
.fraction span.bar {display: none;}
  	</style>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>

		  <div class="row">
         	<div class="row container">
      			<h3 align="center" class="header">Permutaciones y Combinaciones.</h3>
      			<p align="center">Ademas de calculo de factorial y sucesion Fibonacci.</p>
     		</div>
    </div>

<div class="container">
<div class="row" align="center">
<div class="col s12 m6 l6">
		<div class="card-panel green lighten-5">
			<center><h5>Combinación:</h5></center>
			<center><h5>
<div class="fraction">
<span class="fup">n!</span>
<span class="bar">/</span>
<span class="fdn">(r!)(n-r)!</span>
</div>
</h5></center>
				<form name="datos" id="datos">          
			      <div class="row">
			        <div class="input-field inline">
			            <input id="n" type="text" class="validate">
			            <label for="n">Valor de n</label>
					</div>          
			        <div class="input-field inline">
			            <input id="r" type="text" class="validate">
			            <label for="r">Valor de r</label>
					</div>
			      </div>
					<center><button class="btn waves-effect waves-light red lighten-2" type="button" name="calcular" onClick="Combinatoria();">Calcular</button></center>
					<br>
				</form>
		
			<div id="demo" class="card-panel green lighten-4">
			<div  class="col s12 m12 l12">		
			    <script type="text/javascript">
    	function Combinatoria()
        {
        	var f = 1;
        	var f1 = 1;
        	var f2 = 1;
        	var n1 = document.getElementById('n').value;
        	var r1 = document.getElementById('r').value;

        				if(n1<0 || r1 <0){
				    	alert("Ingrese valores valido.");   
				        	}else if (n1=="" || r1 ==""){
							alert("Ingrese valores.");    
								}else{
					        	for (var i = n1; i>0; i--){ f*=i; }
								for(var q = r1; q>0; q--){ f2*=q; }
					        	var nr = parseFloat(n1) - parseFloat(r1);
					        	for(var j = nr; j>0; j--){ f1*=j; }
					        	var Multi = parseFloat(f2)*parseFloat(f1);
					        	var Resultado2 = parseFloat(f) / Multi;
					        	document.getElementById('demo').innerHTML = n1 + "!/((" +r1+ "!)("+n1+"-"+r1+")!)="+ Resultado2;

                        		}
        }
    </script>
			</div>
			</div>
		</div>
</div>

<div class="col s12 m6 l6">
		<div class="card-panel green lighten-5">
			<center><h5>Permutación:</h5></center>
			<center><h5>
			<div class="fraction">
			<span class="fup">n!</span>
			<span class="bar">/</span>
			<span class="fdn">(n-k)!</span>
			</div>
			</h5></center>
				<form name="datos2" id="datos2">          
			      <div class="row">
			        <div class="input-field inline">
			            <input id="nn" type="text" class="validate">
			            <label for="nn">Valor de n</label>
					</div>          
			        <div class="input-field inline">
			            <input id="k" type="text" class="validate">
			            <label for="k">Valor de k</label>
					</div>
			      </div>
					<center><button class="btn waves-effect waves-light red lighten-2" type="button" name="calcular" onClick="Permutacion();">Calcular</button></center>
					<br>
				</form>
		
			<div id="demo2" class="card-panel green lighten-4">
			<div  class="col s12 m12 l12">
			<script type="text/javascript">
        function Permutacion(){
        	var f = 1;
        	var f1 = 1;
        	var n1 = document.getElementById('nn').value;
        	var r1 = document.getElementById('k').value;

        				if(n1<0 || r1 <0){
				    	alert("Ingrese un valores valido."); 
				        }else if(n1=="" || r1 ==""){
						alert("Ingrese valores.");   
						}else{
						for (var i = n1; i>0; i--){ f*=i; }
			        	var nr = parseFloat(n1) - parseFloat(r1);
			        	for(var j = nr; j>0; j--){ f1*=j; }
			        	var Resultado = parseFloat(f)/parseFloat(f1);

			        	document.getElementById('demo2').innerHTML =  n1 +"!/("+ n1+ "-" +r1 +")! =" + Resultado;
                        }
        }
			</script>
			</div>
			</div>
		</div>
</div>

</div>
<div class="row" align="center">
<div class="col s12 m6 l6">
		<div class="card-panel green lighten-5">
		<center><h5>Factorial:</h5></center>
		<center><h5>n!</h5></center>
			<form name="datos3" id="datos3">          
			      <div class="row">
			        <div class="input-field inline">
			            <input id="f" type="text" class="validate">
			            <label for="f">Valor de n:</label>
					</div>
			      </div>
					<center><button class="btn waves-effect waves-light red lighten-2" type="button" name="calcular" onClick="Factorial();">Calcular</button></center>
					<br>
				</form>
			<div id="demo3" class="card-panel green lighten-4">
			<div  class="col s12 m12 l12">

			<script type="text/javascript">
				       
				       	function Factorial(){
				        var n = document.getElementById('f').value;

				        if(n<0){
				    	alert("Ingrese un valor valido."); 
				        }else if(n==""){
						alert("Ingrese un valor.");  
						}else{
						var resultado = 1;
						var text ="";
 						for(var i=1; i<=n; i++) {
  						resultado *= i;
  						text += "(" +i +")";
						}
        				document.getElementById('demo3').innerHTML = text + "= " +resultado+ "<br>" + n +"!="+ resultado ;
                        }
                    }
			</script>
			</div>
			</div>
		</div>
</div>

<div class="col s12 m6 l6">
		<div class="card-panel green lighten-5">
		<center><h5>Sucesión Fibonacci:</h5></center>
		<center><h5>X<sub>n</sub> = X<sub>n-1</sub> + X<sub>n-2</sub></h5></center>
			<form name="datos4" id="datos4">          
			      <div class="row">
			        <div class="input-field inline">
			            <input id="ff" type="text" class="validate">
			            <label for="ff">Valor de n:</label>
					</div>
			      </div>
					<center><button class="btn waves-effect waves-light red lighten-2" type="button" name="calcular" onClick="Fibonacci();">Calcular</button></center>
					<br>
				</form>
			<div id="demo4" class="card-panel green lighten-4">
			<div  class="col s12 m12 l12">
			<script type="text/javascript">

				function Fibonacci(){
					var n = document.getElementById('ff').value;

					if(n<=0) {
				    	alert("Ingrese un valor valido."); 
					}else if(n==""){
						alert("Ingrese un valor.");
					}else if(n==1){
					document.getElementById('demo4').innerHTML = "(0) <br> Numero en la posicion " + n + ": 0 <br>";
					}else{
					var text = "";
				    var a=1;
				    var b=0;
					var result =a;
				    for(var i=1; i<n;i++){
						result=a+b;
						a=b;
						b=result;
						text += "(" +result +")";
				    }
					document.getElementById('demo4').innerHTML = "(0)" + text +"<br> Numero en la posicion " + n + ": " +result +"<br>";
					}
				}
			</script>
			</div>
			</div>
		</div>
</div>
</div>

</div>
  <?php include('../includes/footer.php'); ?>
</body>
</html>