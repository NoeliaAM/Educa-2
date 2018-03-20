<div class="navbar-fixed">
<nav class="nav-extended">
     <div class="nav-wrapper green darken-2">
     <div  class="container">
          <a href="../sesion/pagina_principal.php" class="brand-logo"><i class="material-icons prefix">class</i>Educa-2</a> 
          <a href="../sesion/pagina_principal.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>  
            <ul class="right hide-on-med-and-down">
                <li><a href="../sesion/inicionuevo.php">Bienvenido <?php $usser = $_SESSION['inicio_sesion']; echo $usser; ?> </a></li>
                <li><a href="../temas/menu_temas.php">Materias | Temas</a></li>
                <li><a href="../simuladores/simuladores.php">Simuladores</a></li>
                <li><a href="../archivos/subirarchivo.php">Archivos</a></li>
                <li><form action="../sesion/log_out.php" method="POST"><button class="btn waves-effect waves-light red lighten-2" type="submit" name="cerrar_sesion">Cerrar Sesion</button></form></li>
            </ul>
</div>
</div>
</div>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="../sesion/pagina_principal.php">Inicio</a></li>
                <li><a href="../sesion/inicionuevo.php">Bienvenido <?php $usser = $_SESSION['inicio_sesion']; echo $usser; ?> </a></li>
                <li><a href="../temas/menu_temas.php">Materias | Temas</a></li>
                <li><a href="../simuladores/simuladores.php">Simuladores</a></li>
                <li><a href="../archivos/subirarchivo.php">Archivos</a></li>
                <li class="center"><form action="../sesion/log_out.php" method="POST"><button class="btn waves-effect waves-light red lighten-2" type="submit" name="cerrar_sesion">Cerrar Sesion</button></form></li> 
              </ul>
</nav>