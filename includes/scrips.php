<script type="text/javascript">
  
  $(document).ready(function(){

    $('.slider').slider();
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $('.dropdown-button').dropdown();
    Materialize.updateTextFields();
    $('.modal').modal();
    $('ul.tabs').tabs();
    
  $('select').material_select('destroy');
    
  });

var pagina=[]
pagina[0]= "../examenes/MateAEx1.php";
pagina[1]= "../examenes/MateAEx2.php";
pagina[2]= "../examenes/MateAEx3.php";
pagina[3]= "../examenes/MateAEx4.php";
function aleatorio(){return pagina[parseInt(pagina.length*Math.random())];}

var pagina2=[]
pagina2[0]= "../examenes/ProbaEstaEx1.php";
pagina2[1]= "../examenes/ProbaEstaEx2.php";
pagina2[1]= "../examenes/ProbaEstaEx3.php";
function aleatorio2(){return pagina2[parseInt(pagina2.length*Math.random())];}

var pagina3=[]
pagina3[0]= "../examenes/EstruDatosEx1.php";
pagina3[1]= "../examenes/EstruDatosEx2.php";
pagina3[1]= "../examenes/EstruDatosEx3.php";
function aleatorio3(){return pagina3[parseInt(pagina3.length*Math.random())];}

var pagina4=[]
pagina4[0]= "../examenes/MateDisEx1.php";
pagina4[1]= "../examenes/MateDisEx2.php";
function aleatorio4(){return pagina4[parseInt(pagina4.length*Math.random())];}

var pagina5=[]
pagina5[0]= "../examenes/ElectricidadEx1.php";
pagina5[0]= "../examenes/ElectricidadEx2.php";
pagina5[0]= "../examenes/ElectricidadEx3.php";
function aleatorio5(){return pagina5[parseInt(pagina5.length*Math.random())];}

</script>