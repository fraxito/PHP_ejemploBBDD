<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
               
    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $DNI = $_POST['DNI'];
    $tipo = $_POST['tipo'];
      
    //encriptamos la contraseña
    //$pass = crypt($pass, "cantera");
    $pass = password_hash ($pass, PASSWORD_DEFAULT);
    
    //hola k ase
    
    $inserta_usuario = $mysqli -> 
            query("INSERT INTO `veterinario`.`usuario` (`nombreUsuario`, `pass`, `email`, `tipo`, `DNI`) VALUES ('$nombreUsuario', '$pass', '$email', '$tipo', '$DNI'); ");

    if ($mysqli->affected_rows == 1){
        echo "Insertado correctamente el usuario con DNI " .$DNI;
    }
    else {
        echo " ha ocurrido un error ". $mysqli->affected_rows ;
    }
    
    ?>
