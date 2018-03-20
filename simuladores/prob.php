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
	<title>Tablas de Frecuencia | Educa-2</title>
	<?php include('../includes/links.php'); ?>
	<script type="text/javascript" src="../js/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="../js/Chart.bundle.js"></script>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>
		  <div class="row">
         	<div class="row container">
      			<h3 align="center" class="header">Distribucion de frecuencia, histograma y grafica de porcentajes</h3>
     		</div>
    </div>

	<div class="container">
	<div class="row">
		<div class="card-panel green lighten-4">
			<div class="card-panel green lighten-5">
			<div class="row">
			    <form class="col s12">
			    <div class="row">
			        <div class="input-field col s12">
			          <textarea id="datos" class="materialize-textarea"></textarea>
			          <label for="datos">Ingresa los datos separados por una coma (,)</label>
			        </div>
			          <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="button" onClick="Generar()">Calcular</button>     <a class="waves-effect waves-light btn red darken-3" href="prob.php">Reiniciar</a></center>
			    </div>
			    </form>
			  </div>
			  </div>	
			
	<script type="text/javascript">

		function array_ini( datos_a ){
  		var nuevo_a = new Array();
 		for( var i = 0, j = datos_a.length; i < j; i++ ){
      		if ( datos_a[ i ] ){
       			nuevo_a.push( datos_a[ i ] );
   		 		}
 			}
 		 	return nuevo_a;
		}

		function swap(myArr, indexOne, indexTwo){
  			var tmpVal = myArr[indexOne];
  			myArr[indexOne] = myArr[indexTwo];
  			myArr[indexTwo] = tmpVal;
  			return myArr;
			}

		function ordenacion(myArr){
  			var size = myArr.length;
 
 		 	for( var pass = 1; pass < size; pass++ ){ // outer loop
    			for( var left = 0; left < (size - pass); left++){ // inner loop
      				var right = left + 1;
      				if( myArr[left] > myArr[right] ){
        				swap(myArr, left, right);
      				}
    			}
  			}
  		return myArr;
  		}

		function Moda(arregle){
		var num = 0;
		var valor = 0;
		var rep = 0;
		for (var i = 0; i < arregle.length; i++) {
		num = arregle[i];
		if (rep < Verifica(num, arregle)) {
			rep = Verifica(num, arregle);
			valor = arregle[i];
			}
		}
		return valor;
		}

		function Verifica(num, arr)
		{
		var x = 0;
		for (var i = 0; i < arr.length; i++) {
		if (num == arr[i]) {
			x++;
			}
		}
		return x;
		}


		function Generar(){
				var datos = document.getElementById("datos").value;
		if (datos=="" || datos=="," || datos==" " || datos == " ," || datos == 0){
		alert("Ingrese valores.");    
		}else{

		var dato = datos.split(",");
		var a_datos = array_ini(dato);

		for(var i =0; i<a_datos.length;i++ ){
		a_datos[i]=parseInt(a_datos[i]);
		}

		var a = new Array( );

		var mayor = a_datos[0];
		var menor = a_datos[0];
		var suma = 0;

		for (var i = 0; i < a_datos.length; i++) { 
			if (a_datos[i] > mayor) {
					mayor = a_datos[i];
				}
			if (a_datos[i] < menor) {
					menor = a_datos[i];
				}
				suma += a_datos[i];
			}

		document.getElementById('datos').innerHTML = a_datos;
		
		var ordenados = ordenacion(a_datos);
		//document.getElementById('').innerHTML = ordenados;

		var n = a_datos.length;
		document.getElementById('numero').innerHTML = n;

		var clases = Math.sqrt(n);
		clases = clases.toFixed();
		document.getElementById('clases').innerHTML = clases;

		document.getElementById('mayor').innerHTML = mayor;
		document.getElementById('menor').innerHTML = menor;

		var rango =mayor-menor;
		document.getElementById('rango').innerHTML = rango;

		var amplitud = rango / clases; 
		amplitud = amplitud.toFixed(2);
		document.getElementById('amplitud').innerHTML = amplitud;

		var media = suma/n;
		document.getElementById('media').innerHTML = media;
		var mediana1 = n / 2;
		var mediana = 0;
		var varianza = 0;		 
			if ((mediana1 % 2) == 0) {
				mediana = (a_datos[mediana1-1] + a_datos[mediana1]) / 2;
			}
			else{
				mediana1 += 0.5;
				mediana = a_datos[mediana1];
			}
			for (var i = 0; i < n; i++) {
			 	varianza += Math.pow((a_datos[i] - media), 2);
			 }

		varianza = varianza / n;
		varianza = varianza.toFixed(3);
		document.getElementById('varianza').innerHTML = varianza;

		var moda = Moda(a_datos);

		document.getElementById('media').innerHTML = media.toFixed(3);
		document.getElementById('mediana').innerHTML = mediana;
		document.getElementById('moda').innerHTML = moda;

		var desviacion = Math.sqrt(varianza);
		desviacion = desviacion.toFixed(3);
		document.getElementById('desviacion').innerHTML = desviacion;
		clases++;
		document.getElementById('n_ordenadas').innerHTML = tabla(clases,menor,amplitud,ordenados,n);

		}
		}

		function tabla(clasess,menorr,amp,arreglo,n){

        var mybody = document.getElementById("n_ordenados");
        clasess = parseInt(clasess);
        menorr = parseInt(menorr);
        amp = parseFloat(amp);
        n = parseInt(n);
        var menor1 = menorr; var abajito = [];
        var suma = 0; var resto = new Array(); var conarr = 0;
        var restofi = n; var contares = 0; var fi2 = 0; var ultimo = 0;
        clasess--; var cuentaa=0; var fin2 = 0;
        var resto2 = new Array(); var size = 0;
        // creates <table> and <tbody> element
        mytable     = document.createElement("table");
        mytablebody = document.createElement("tbody");
        for (var i = 0; i < clasess; i++) {
        	abajito[i] = i+1;
        }
        // creating all cells
        for(var j = 0; j < (clasess+1); j++) { ////*******Filas ***
            // creates a <tr> element
            mycurrent_row = document.createElement("tr");

            for(var i = 0; i < 8; i++) {  ///**** Columnas **
                // creates a <td> element
                mycurrent_cell = document.createElement("td");
                // creates a Text Node
                if (j == 0) {
                	if (i == 0) {currenttext = document.createTextNode("Clases");}
                	if (i == 1) {currenttext = document.createTextNode("I. Menor");}
                	if (i == 2) {currenttext = document.createTextNode("I. Mayor");}
                	if (i == 3) {currenttext = document.createTextNode("mi");}
                	if (i == 4) {currenttext = document.createTextNode("fi");}
                	if (i == 5) {currenttext = document.createTextNode("Fi");}
                	if (i == 6) {currenttext = document.createTextNode("fi/n");}
                	if (i == 7) {currenttext = document.createTextNode("Fi/n");}

                	mycurrent_cell.appendChild(currenttext);
                 	mycurrent_row.appendChild(mycurrent_cell);
                
                }
                if (i == 0 && j != 0) {
	                currenttext = document.createTextNode(j);
	                mycurrent_cell.appendChild(currenttext);
	                mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 1 && j != 0) {
           	 	if (j == 1) {
           	 		currenttext = document.createTextNode(menorr);
           	 	}
           	 	else{
           	 		menorr = menorr + amp;
           	 		currenttext = document.createTextNode(menorr);
           	 	}
                	mycurrent_cell.appendChild(currenttext);
               		mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 2 && j != 0) {
           	 	if (j == 1) {
           	 		menor1 = menor1+amp;
           	 		currenttext = document.createTextNode(menor1);
           	 	}
           	 	else{
           	 		menor1 = menor1 + amp;
           	 	currenttext = document.createTextNode(menor1);
           	 	}
           	 	mycurrent_cell.appendChild(currenttext);
               		mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 3 && j != 0) {
           	 	
           	 	suma = (menorr+menor1) / 2;
           	 	currenttext = document.createTextNode(suma);
           	 	mycurrent_cell.appendChild(currenttext);
               		mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 4 && j != 0) {
           	 	
           	 	var cuent = 0;

           	 	if (j == clasess) {
           	 		var a = n - conarr;
           	 		currenttext = document.createTextNode(a);
           	 		resto[fi2] = a; resto[fi2+1] = 0;
           	 	}
           	 	else{
           	 		for (var t = 0; t < arreglo.length; t++) {
           	 		if (arreglo[t] < menor1 && arreglo[t] >= menorr) {
           	 			cuent++; 
           	 		}
           	 	}	conarr += cuent; resto[fi2] = cuent; fi2++;
           	 	currenttext = document.createTextNode(cuent);
           	 	}	 	
           	 	mycurrent_cell.appendChild(currenttext);
               		mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 5 && j != 0) {
           	 	
           	 	if (j == 1) {
           	 		for (var t = 0; t < arreglo.length; t++) {
           	 			if (arreglo[t] < menor1 && arreglo[t] >= menorr) {
           	 			cuentaa++; 
           	 			}
           	 		}
           	 		currenttext = document.createTextNode(cuent);
           	 	}
           	 	else{
           	 		if (j == clasess) {
           	 			currenttext = document.createTextNode(n);
           	 		}
           	 		else{
           	 			cuentaa += resto[j-1];
           	 			currenttext = document.createTextNode(cuentaa);
           	 		}	
           	 	}
           	 	
           	 	mycurrent_cell.appendChild(currenttext);
               		mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 6 && j != 0) {
           	 	var fin = 0;
           	 	if (j == clasess) {
           	 		fin = a / n;
           	 		currenttext = document.createTextNode(fin.toFixed(3));
           	 	}
           	 	else{
           	 		fin = resto[j-1] / n; resto2[size] = fin; size++;
           	 		currenttext = document.createTextNode(fin.toFixed(3));
           	 	}       	 	
           	 	mycurrent_cell.appendChild(currenttext);
               	mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 if (i == 7 && j != 0) {
           	 	
           	 	if (j == 1) {
           	 		fin2 = resto[0] / n;
           	 		currenttext = document.createTextNode(fin2.toFixed(3));
           	 		ultimo = fin2;
           	 	}
           	 	else{
           	 		if (j == clasess) {
           	 			currenttext = document.createTextNode("1");
           	 		}
           	 		else{
           	 			fin2 += resto2[j-1];
           	 			currenttext = document.createTextNode(fin2.toFixed(3));
           	 		}
           	 	}
           	 	
           	 	mycurrent_cell.appendChild(currenttext);
               	mycurrent_row.appendChild(mycurrent_cell);
           	 }
           	 

                
        }
            // appends the row <tr> into <tbody>
            mytablebody.appendChild(mycurrent_row);
        }

        // appends <tbody> into <table>
        mytable.appendChild(mytablebody);
        // appends <table> into <body>
        mybody.appendChild(mytable);
                mytable.setAttribute("class","centered striped bordered highlight responsive-table");
        histograma(resto, abajito);
        pastel(resto, abajito);
    }


    function histograma(array, abajo){
	var datos =
		{
			type: "bar",
			data:
			{
				datasets: [{
					label: "Clases",
					data: array,
					backgroundColor: "#e57373",
					borderWidth: -40,	
				}],
				labels: abajo
			},
			options:{
				responsive: true,
				title:{
					display: true,
					fontSize: 29,
					text: "Histograma",
				}
			}
		};	
	var canvas = document.getElementById('chart');
	window.bar = new Chart(canvas,datos);
	}	


    function pastel(array, abajo){
		var datos =
		{
			type: "pie",
			data:
			{
				datasets: [{
					data: array,					
					backgroundColor: ["#e57373", "#ba68c8", "#f44336", "#b71c1c", "#8e24aa", "#ff1744", "#d81b60","#ff80ab", "#ff4081", "#ea80fc"],						
				}],
				labels: abajo
			},
			options:{
				responsive: true,
				title:{
					display: true,
					fontSize: 29,
					text: "Grafica circular de porcentajes",
				}
			}
		};	
	var canvas = document.getElementById('chart2');
	window.pie = new Chart(canvas,datos);
	}	
		
	</script>

			<div class="card-panel green lighten-3">
				<div class="row">
					<div class="col s12 m12 l4">
							<div class="card-panel green lighten-2">	
							<p><strong>No. de datos:</strong> <span id="numero"></span></p>
							<p><strong>No. de clases:</strong> <span id="clases"></span></p>
							<p><strong>Dato mayor:</strong> <span id="mayor"></span>  /  <strong>Dato menor:</strong> <span id="menor"></span></p>
							<p><strong>Rango:</strong> <span id="rango"></span></p>
							<p><strong>Amplitud:</strong> <span id="amplitud"></span></p>
							<p><strong>Media:</strong> <span id="media"></span></p>
							<p><strong>Moda:</strong> <span id="moda"></span></p>
							<p><strong>Mediana:</strong> <span id="mediana"></span></p>
							<p><strong>Varianza:</strong> <span id="varianza"></span></p>
							<p><strong>Desviación Estandar:</strong> <span id="desviacion"></span></p>			
						</div>
					</div>
					<div class="col s12 m12 l8">
						<div id="n_ordenados" class="card-panel green lighten-4">
							<p align="center"><strong>Tabla de distrubuciones de frecuencia</strong></p>
						</div>
					</div>
				</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l6">
						<div class="card-panel green lighten-2">
							<canvas id="chart"></canvas>
						</div>	
					</div>
					<div class="col s12 m12 l6">
						<div class="card-panel green lighten-2">
							<canvas id="chart2"></canvas>
						</div>	
					</div>
				</div>


		</div>
	</div>
	</div>


  <?php include('../includes/footer.php'); ?>
</body>
</html>