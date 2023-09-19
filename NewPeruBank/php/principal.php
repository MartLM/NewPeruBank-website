<?php
    session_start();
    $session = $_SESSION['DNI'];
    $conexion = mysqli_connect("localhost","root","","new_peru_bank");
    $consulta = "SELECT * FROM usuarios WHERE DNI_USU = '$session'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/principal.css" />
        <title>Document</title>
    </head>
    <body>
        <main>
            <div class="main-container">
                <div class="div-main-menu">
                    <div class="div-menu-container">
                        <div class="div-">
                            <p>TU TARJETA</p>
                            <div class="div-tarjeta">
                                <div class="num-tarjeta">
                                    <p class="p-num-tarjeta">
                                        1234 0000 2334 0000</p>
                                </div>
                                <div class="name-cliente">
                                    <p class="p-name-cliente">
                                        <?=$fila['NOM_USU'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>BALANCE</p>
                            <p class="p-balance">231231233</p>
                        </div>
                        <div class="div-options">
                            <!-- los 3 botones -->
                            <div class="btn deposit"></div>
                            <div class="btn withdraw"></div>
                            <a href="/NewPeruBank/php-omen/Session-Close.php"><div class="btn close-session"></div></a>
                        </div>
                        <div class="div-options">
                            <span class="span-options">Añadir fondos</span>
                            <span class="span-options">Retirar fondos</span>
                            <span class="span-options">Cerrar sesion</span>
                        </div>
                    </div>
                </div>
                <div class="div-main-mov">
                    <div class="div-container-table">
                        <p>MIS MOVIMIENTOS</p>
                        <div>
                            <table>
                                <tr>
                                    <th>TIPO</th>
                                    <th>MONTO</th>
                                </tr>
                                <tr>
                                    <td class="c1">Depósito</td>
                                    <td class="td-deposito c1">s/ +500.00</td>
                                </tr>
                                <tr>
                                    <td class="c2">Retiro</td>
                                    <td class="td-retiro c2"> s/ -300.00</td>
                                </tr>
                                <tr>
                                    <td class="c1">Retiro</td>
                                    <td class="td-retiro c1">s/ -80.00</td>
                                </tr>
                                <tr>
                                    <td class=" c2">Depósito</td>
                                    <td class="td-deposito c2">s/ +600.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- <a href="/php-omen/Session-Close.php">Cerrar sesion</a> -->
    </body>
</html>
