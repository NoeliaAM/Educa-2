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
	<title>Series de Fourier | Educa-2</title>
  <?php include('../includes/links.php'); ?>

<style type="text/css">
#container { min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto }
</style>
</head>
<body>
  <?php include('../includes/scrips.php'); ?>
  <?php include('../includes/navbar.php'); ?>
<div class="container" align="center">
   <div class="card-panel green lighten-4 z-depth-4">
   <center><h5>Datos:</h5></center>
   
	<form name="datos" id="datos">          
      <div class="row">
        <div class="input-field inline">
            <input id="periodo" type="text" name="periodo" class="validate">
            <label for="periodo">Periodo</label>
		</div>
        <div class="input-field inline">
            <input id="ampli" type="text" name="ampli" class="validate">
            <label for="ampli">Amplitud</label>
		</div>          
        <div class="input-field inline">
            <input id="no" type="text" class="validate" name="no">
            <label for="no">Armonicos</label>
		</div>
      </div>
	<center><button class="btn waves-effect waves-light red lighten-2" type="button" name="graficar" onClick="valores()">Graficar</button></center>
	<br>
	</form>

	<p id="demo"></p>

	<div class="card-panel green lighten-2 z-depth-4">
		<div id="container" class="col s12 m12 l6"></div>
		 <script type="text/javascript">
			function valores(){
				var T = Number(document.getElementById("periodo").value); 
				var A = Number(document.getElementById("ampli").value); 
				var nf = Number(document.getElementById("no").value);

				if(T=="" || A=="" || nf==""){
					alert("Llene todos los campos.");     
					window.location="sim.php";
				}else{
				var fs = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

					var w0=(2*(Math.PI))/T;			
					var a0=A;
					var pi=Math.PI;

					for(var t=0;t<=160; t=t+.25)
					 	fs[t]=a0/2;
					for(var n=1;n<=nf;n++){
					for(t=0;t<=160;t=t+.25){
					    var an = 0;
					    var bn = ((-2*A)/(n*pi))*(Math.cos(n*pi)+((n*pi)*Math.sin(n*pi)));
					    fs[t]= fs[t]+an*Math.cos(n*w0*t)+bn*Math.sin(n*w0*t);
						}
						}
				Highcharts.chart('container', {
    			chart: { type: 'scatter', margin: [70, 50, 60, 80] },
    			title: { text: 'Señal Reconstruida' },
    			xAxis: { title: { text: 't' } },
    			yAxis: { title: { text: 'f(t)' },
				        minPadding: 0.2,
				        maxPadding: 0.2,
				        plotLines: 
					        [{ value: 0, width: 1, color: '#808080' }]
    					},
    			legend: { enabled: false },
    			plotOptions: { series: { lineWidth: 1 } },
    			series: 
    			[{ data: 
		    		[ [0, fs[0]], [0.25,fs[1]], [0.5,fs[2]], [0.75,fs[3]], [1,fs[4]], [1.25,fs[5]], [1.5,fs[6]], [1.75,fs[7]], [2,fs[8]], [2.25,fs[9]], [2.5,fs[10]],
					[2.75,fs[11]], [3,fs[12]], [3.25,fs[13]], [3.5,fs[14]], [3.75,fs[15]], [4,fs[16]], [4.25,fs[17]], [4.5,fs[18]], [4.75,fs[19]], [5,fs[20]],
					[5.25,fs[21]], [5.5,fs[22]], [5.75,fs[23]], [6,fs[24]], [6.25,fs[25]], [6.5,fs[26]], [6.75,fs[27]], [7,fs[28]], [7.25,fs[29]], [7.5,fs[30]],
					[7.75,fs[31]], [8,fs[32]], [8.25,fs[33]], [8.5,fs[34]], [8.75,fs[35]], [9,fs[36]], [9.25,fs[37]], [9.5,fs[38]], [9.75,fs[39]], [10,fs[40]], 
					[10.25,fs[41]], [10.5,fs[42]], [10.75,fs[43]], [11,fs[44]], [11.25,fs[45]], [11.5,fs[46]], [11.75,fs[47]], [12,fs[48]], [12.25,fs[49]], [12.5,fs[50]],
					[12.75,fs[51]], [13,fs[52]], [13.25,fs[53]], [13.5,fs[54]], [13.75,fs[55]], [14,fs[56]], [14.25,fs[57]], [14.5,fs[58]], [14.75,fs[59]], [15,fs[60]], 
					[15.25,fs[61]], [15.5,fs[62]], [15.75,fs[63]], [16,fs[64]], [16.25,fs[65]], [16.5,fs[66]], [16.75,fs[67]], [17,fs[68]], [17.25,fs[69]], [17.5,fs[70]], 
					[17.75,fs[71]], [18,fs[72]], [18.25,fs[73]], [18.5,fs[74]], [18.75,fs[75]], [19,fs[76]], [19.25,fs[77]], [19.5,fs[78]], [19.75,fs[79]], [20,fs[80]],
					[20.25,fs[81]], [20.5,fs[82]], [20.75,fs[83]], [21,fs[84]],	[21.25,fs[85]],	[21.5,fs[86]], [21.75,fs[87]], [22,fs[88]], [22.25,fs[89]], [22.5,fs[90]],
					[22.75,fs[91]], [23,fs[92]], [23.25,fs[93]], [23.5,fs[94]], [23.75,fs[95]], [24,fs[96]], [24.25,fs[97]], [24.5,fs[98]], [24.75,fs[99]], [25,fs[100]],
					[25.25,fs[101]], [25.5,fs[102]], [25.75,fs[103]], [26,fs[104]], [26.25,fs[105]], [26.5,fs[106]], [26.75,fs[107]], [27,fs[108]], [27.25,fs[109]],[27.5,fs[110]],
					[27.75,fs[111]], [28,fs[112]], [28.25,fs[113]], [28.5,fs[114]], [28.75,fs[115]], [29,fs[116]], [29.25,fs[117]], [29.5,fs[118]], [29.75,fs[119]], [30,fs[120]],
					[30.25,fs[121]], [30.5,fs[122]], [30.75,fs[123]], [31,fs[124]], [31.25,fs[125]], [31.5,fs[126]], [31.75,fs[127]], [32,fs[128]], [32.25,fs[129]], [32.5,fs[130]],
					[32.75,fs[131]], [33,fs[132]], [33.25,fs[133]], [33.5,fs[134]], [33.75,fs[135]], [34,fs[136]], [34.25,fs[137]], [34.5,fs[138]], [34.75,fs[139]], [35,fs[140]],
					[35.25,fs[141]], [35.5,fs[142]], [35.75,fs[143]], [36,fs[144]], [36.25,fs[145]], [36.5,fs[146]], [36.75,fs[147]], [37,fs[148]], [37.25,fs[149]], [37.5,fs[150]],
					[37.75,fs[151]], [38,fs[152]], [38.25,fs[153]], [38.5,fs[154]], [38.75,fs[155]], [39,fs[156]], [39.25,fs[157]], [39.5,fs[158]], [39.75,fs[159]], [40,fs[160]] ]	
				}]
				});
				}
			}
		</script>
		</div>
	</div>
</div>
  <?php include('../includes/footer.php'); ?>
</body>
</html>