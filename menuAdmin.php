<?php

$nombre_user = $_SESSION['usuario'];

//si el usuario no ha iniciado sesión, lo mandamos al index.php
//if( !isset( $_SESSION['usuario'] )){
//    header('Location: index.php');
//    }

 //si sí que ha iniciado la sesión, se carga la barra de navegación  

?>

<nav class="navbar  navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $nombre_user; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

           <ul class="nav navbar-nav">
                <li>
                    <p class="navbar-btn">
                        <a id="nuevoUsuario" href="#" class="btn btn-primary">Nuevo Usuario</a>
                    </p>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<div class="container" id="menuCentralAdmin">

</div>


<script>
            
            $('#nuevoUsuario').click(function(){
                $('#menuCentralAdmin').load('adminNuevoUsuario.php');
            });

</script>

