<?php
    $dni = $_POST['d'];
    $pass = $_POST['p'];
    session_start();
    $conexion = mysqli_connect("localhost","root","","new_peru_bank");
    $consulta = "SELECT * FROM usuarios WHERE DNI_USU = '$dni' AND  AES_DECRYPT(PASS_USU, 'clave') = '$pass'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if ($resultado){
        while ($fila = $resultado -> fetch_array()) {
            $fila ['DNI_USU'];
            $fila ['NOM_USU'];
            $fila ['PASS_USU'];

            $_SESSION['DNI'] = $fila['DNI_USU'];

            if($filas){
                echo 'ok';
            }else{
                echo "no";
            }
        }
    }
    if($filas == false){
        echo 'no';
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>