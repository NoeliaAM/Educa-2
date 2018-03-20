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
	<title>Educa-2 | Archivos</title>
	<?php include('../includes/links.php'); ?>
</head>
<body>
	<?php include('../includes/scrips.php'); ?>
	<?php include('../includes/navbar.php'); ?>

<div class="card-panel green lighten-5"><center>
<i class="medium material-icons small">note_add</i><h5>Compartir Archivos</h5></center>
</div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s1"><a class="active" href="#test1">Todos</a></li>
        <li class="tab col s2"><a href="#test2">M. Avanzadas</a></li>
        <li class="tab col s2"><a href="#test3">M. Discretas</a></li>
        <li class="tab col s2"><a href="#test4">Probabilidad y Estadistica</a></li>
        <li class="tab col s2"><a href="#test5">Estructura de Datos</a></li>
        <li class="tab col s2"><a href="#test6">Electricidad y Magnetismo</a></li>
        <li class="tab col s1"><a href="#test7">Inglés</a></li>
      </ul>
    </div>

<div id="test1" class="col s12">
<?php
    include('db_archivos.php');
    if(isset($_POST['submit'])){
    $doc_name =$_POST['doc_name'];
    $name     =$_FILES['myfile']['name'];
    $tmp_name =$_FILES['myfile']['tmp_name'];
    if($name){
      $location ="documents/$name";
      move_uploaded_file($tmp_name, $location);
      $query=mysql_query("INSERT INTO documents (name,path) VALUES ('$doc_name','$location')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo.php";</script>');    
      }
    }
    $sql= "SELECT * FROM documents";
    $res=mysql_query($sql); 
?>
<div class="row">
<div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name" id="name" class="validate">
      <label for="name">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
</div>
<div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br> </h5></center>
    <?php
    while($row = mysql_fetch_array($res)){
    $id  =$row['id'];
    $name=$row['name'];
    $ruta=$row['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download.php?dow=$ruta'><i class='material-icons'>play_for_work</i></a></button>  ".$name."<br><br>";
    }
    ?>
</div>
</div>
</div>

<div id="test2" class="col s12">
<?php
    include('db_archivos.php');
    if(isset($_POST['submit2'])){
    $doc_name =$_POST['doc_name'];
    $name     =$_FILES['myfile']['name'];
    $tmp_name =$_FILES['myfile']['tmp_name'];
    if($name){
      $location ="mathav/$name";
      move_uploaded_file($tmp_name, $location);
      $query=mysql_query("INSERT INTO mathav (name,path) VALUES ('$doc_name','$location')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo.php";</script>');    
      }
    }
    $sql= "SELECT * FROM mathav";
    $res=mysql_query($sql); 
?>
<div class="row">
    <div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" name="form2" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name" id="doc_name" class="validate">
      <label for="doc_name">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit2"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>
  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row2 = mysql_fetch_array($res)){
    $id2  =$row2['id'];
    $name2=$row2['name'];
    $path2=$row2['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download2.php?dow=$path2'><i class='material-icons'>play_for_work</i></a></button>  ".$name2."<br><br>";
    }
    ?>
  </div>
</div>
</div>

<div id="test3" class="col s12">
<?php
    include('db_archivos.php');
    if(isset($_POST['submit3'])){
    $doc_name3 =$_POST['doc_name3'];
    $name     =$_FILES['myfile3']['name'];
    $tmp_name =$_FILES['myfile3']['tmp_name'];
    if($name){
      $location3 ="mathdis/$name3";
      move_uploaded_file($tmp_name3, $location3);
      $query3=mysql_query("INSERT INTO mathdis (name,path) VALUES ('$doc_name3','$location3')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo.php";</script>');    
      }
    }
    $sql3= "SELECT * FROM mathdis";
    $res3=mysql_query($sql3); 
?>     
<div class="row">
  <div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name3" id="name3" class="validate">
      <label for="name3">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile3">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit3"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>
  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row3 = mysql_fetch_array($res3)){
    $id3  =$row3['id'];
    $name3=$row3['name'];
    $ruta3=$row3['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download3.php?dow=$ruta3'><i class='material-icons'>play_for_work</i></a></button>  ".$name3."<br><br>";
    }
    ?>
  </div>
</div>
</div>

<div id="test4" class="col s12">
<?php
    include('db_archivos.php');
    if(isset($_POST['submit4'])){
    $doc_name4 =$_POST['doc_name4'];
    $name     =$_FILES['myfile4']['name'];
    $tmp_name =$_FILES['myfile4']['tmp_name'];
    if($name){
      $location4 ="probayestadistica/$name4";
      move_uploaded_file($tmp_name4, $location4);
      $query4=mysql_query("INSERT INTO probayestadistica (name,path) VALUES ('$doc_name4','$location4')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo.php";</script>');    
      }
    }
    $sql4= "SELECT * FROM probayestadistica";
    $res4=mysql_query($sql4); 
?>
<div class="row">
  <div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name4" id="name4" class="validate">
      <label for="name4">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile4">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit4"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>
  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row4 = mysql_fetch_array($res4)){
    $id4  =$row4['id'];
    $name4=$row4['name'];
    $ruta4=$row4['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download4.php?dow=$ruta4'><i class='material-icons'>play_for_work</i></a></button>  ".$name4."<br><br>";
    }
    ?>
  </div>
</div>
</div>

<div id="test5" class="col s12">
<?php
    include('db_archivos.php');
    if(isset($_POST['submit5'])){
    $doc_name5 =$_POST['doc_name5'];
    $name     =$_FILES['myfile5']['name'];
    $tmp_name =$_FILES['myfile5']['tmp_name'];
    if($name){ 
      $location5 ="estructura/$name5";
      move_uploaded_file($tmp_name5, $location5);
      $query5=mysql_query("INSERT INTO estructura (name,path) VALUES ('$doc_name5','$location5')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo5.php";</script>');    
      }
    }
    $sql5= "SELECT * FROM estructura";
    $res5=mysql_query($sql5); 
?>
    <div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name5" id="name5" class="validate">
      <label for="name5">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile5">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit5"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>

  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row5 = mysql_fetch_array($res5)){
    $id5  =$row5['id'];
    $name5=$row5['name'];
    $ruta5=$row5['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download5.php?dow=$ruta5'><i class='material-icons'>play_for_work</i></a></button>  ".$name5."<br><br>";
    }
    ?>
  </div>
</div>
    
    <div id="test6" class="col s12">
      <?php
    include('db_archivos.php');
    if(isset($_POST['submit6'])){
    $doc_name6 =$_POST['doc_name6'];
    $name     =$_FILES['myfile6']['name'];
    $tmp_name =$_FILES['myfile6']['tmp_name'];
    if($name){
      $location6 ="electricidad/$name6";
      move_uploaded_file($tmp_name6, $location6);
      $query6=mysql_query("INSERT INTO electricidad (name,path) VALUES ('$doc_name6','$location6')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo6.php";</script>');    
      }
    }
    $sql6= "SELECT * FROM electricidad";
    $res6=mysql_query($sql6); 
?>
    <div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name6" id="name6" class="validate">
      <label for="name6">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile6">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit6"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>

  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row6 = mysql_fetch_array($res6)){
    $id6  =$row6['id'];
    $name6=$row6['name'];
    $ruta6=$row6['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download6.php?dow=$ruta6'><i class='material-icons'>play_for_work</i></a></button>  ".$name6."<br><br>";
    }
    ?>
  </div>
    </div>

    <div id="test7" class="col s12">
      <?php
    include('db_archivos.php');

    if(isset($_POST['submit7'])){
    $doc_name7 =$_POST['doc_name7'];
    $name     =$_FILES['myfile7']['name'];
    $tmp_name =$_FILES['myfile7']['tmp_name'];
    if($name){
      $location7 ="ingles/$name7";
      move_uploaded_file($tmp_name7, $location7);
      $query7=mysql_query("INSERT INTO ingles (name,path) VALUES ('$doc_name7','$location7')");
      echo '<script> window.location="subirarchivo.php";</script>';
      }else{
      die('<script> alert("Seleccione un archivo."); window.location="subirarchivo.php";</script>');    
      }
    }
    $sql7= "SELECT * FROM ingles";
    $res7=mysql_query($sql7); 
?>
<div class="col s12 m12 l6">
      <center><h5>Subir Archivo:</h5></center>
      <div class="card-panel green lighten-4 z-depth-4">
      <form action="subirarchivo.php" method="POST" enctype="multipart/form-data" >
      <div class="input-field">
      <i class="material-icons prefix">mode_edit</i>
      <input type="text" name="doc_name7" id="name7" class="validate">
      <label for="name7">Nombre del documento</label>
      </div>
      <div class="file-field input-field">
        <div class="btn">
          <span>Examinar...</span>
          <input class="file-path validate" type="file" name="myfile7">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Seleccione un archivo...">
        </div>
      </div>
      <center><button class="btn waves-effect waves-light red lighten-2 btn-large" type="submit" name="submit7"><i class="material-icons right">library_add</i>Subir</button></center>
      </form>
      </div>
      </div>
  <div class="col s12 m12 l6">
  <center><h5>Archivos subidos:<br><br> </h5></center>
    <?php
    while($row7 = mysql_fetch_array($res7)){
    $id7  =$row7['id'];
    $name7=$row7['name'];
    $ruta7=$row7['path'];
    echo  " <button class='btn-floating btn-large waves-effect waves-light red lighten-2'><a class='white-text' href='download7.php?dow=$ruta7'><i class='material-icons'>play_for_work</i></a></button>  ".$name7."<br><br>";
    }
    ?>
  </div>
    </div>
  </div>

	<?php include('../includes/footer.php'); ?>
</body>
</html>