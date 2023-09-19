<?php
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass-conf'];

    if ($pass == $pass_confirm){
        $newpass = $pass;
    }

    $conexion = mysqli_connect("localhost","root","","new_peru_bank");
    $crear = "INSERT INTO usuarios VALUES ('$dni', '$name', AES_ENCRYPT('$newpass', 'clave'))";
    $resultado = mysqli_query($conexion, $crear);

    if ($resultado){
        session_start();
        $_SESSION['DNI'] = $dni;
        header("location: ../php/principal.php");
    }else{
        echo "error";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
?>  