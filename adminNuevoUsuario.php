<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.structure.min.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.theme.min.css" type="text/css">
<br>
<div class="row">

    <div class="col-xs-3"></div>
    <div class="col-xs-6">
        <br>
        <form  id="nuevoUsuario" >
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
            <br>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
            <br>
            <input type="text" class="form-control" id="fecha" placeholder="fecha" >
            <br>
            
            <input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre Usuario" required>
            <br>
            <input type="password" class="form-control" id="pass" placeholder="Contraseña" required>
            <br>
            <input type="email" class="form-control" id="email" placeholder="Email" required>
            <br>
            <input type="text" class="form-control" id="DNI" placeholder="DNI">
            <br>  
            <div class="dropdown">
                <button id="botonTipo" class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown">Tipo
                    <span class="caret"></span></button>
                <ul class="dropdown-menu btn-block">
                    <li><a href="#" onclick="cambiaTipo('1','Cliente')">1 - Cliente</a></li>
                    <li><a href="#" onclick="cambiaTipo('2','Administrador')">2 - Administrador</a></li>
                    <li><a href="#" onclick="cambiaTipo('3','Peluquero')">3 - Peluquero</a></li>
                    <li><a href="#" onclick="cambiaTipo('4','Veterinario')">4 - Veterinario</a></li>
                </ul>
            </div>
            <br>  
            <button id="botonEnviar" class="btn btn-info btn-block " >Registrar</button>
        </form>
    </div>
    <div class="col-xs-3"></div>
</div>
<br>
<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6" id="cargaResultado"></div>
    <div class="col-xs-3"></div>
</div>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script>
    
    $('#fecha').datepicker();
    
    $('#nuevoUsuario').validate({
        //submitHandler:
          errorClass: "my-error-class"
    });
    
    var _tipo=0;
    function cambiaTipo(_valor, _texto){
        $('#botonTipo').html(_texto + ' <span class="caret"></span>');
        _tipo = _valor;
        console.log(_tipo);
    }
    
    $('#botonEnviar').click(function(){
    var _nombreUsuario = $('#nombreUsuario').val();
    var _pass = $('#pass').val();
    var _email = $('#email').val();
    var _DNI = $('#DNI').val();

        $('#cargaResultado').load('adminInsertaUsuario.php',{
            nombreUsuario: _nombreUsuario,
            pass : _pass,
            email: _email,
            DNI: _DNI,
            tipo: _tipo
        });
    });
            
</script>
<?php



