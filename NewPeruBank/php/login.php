<?php
    error_reporting(0);
    session_start();
    $user = $_SESSION['DNI'];
    if($user != null){
        header("location: principal.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main-container">
            <div class="div-main-container">
                <div class="div-container-tarjeta">
                    <div class="div-tarjeta"></div>
                </div>
                <div class="div-container">
                    <div class="div-form-container">
                        <div class="div-form-shadow">
                        </div>
                        <div class="div-form-background">
                            <div class="div-form">
                                <div class="div-form-logo">
                                    <div class="div-logo"></div>
                                    <div class="div-leyenda">
                                        <span class="span1">NEW PERU BANK</span>
                                        <span class="span2">¡BIENVENIDO!</span>
                                    </div>
                                </div>
                                <div class="div-form-content">
                                    <div class="div-form-inputs">
                                        <div class="div-dni div-data">
                                            <input type="text" maxlength="8" minlength="8" name="dni" id="dni" class="dni" placeholder="DNI" autocomplete="off">
                                        </div>
                                        <div class="div-pass div-data">
                                            <input type="password" name="pass" class="pass" id="pass" placeholder="Contraseña" autocomplete="off">
                                        </div>
                                        <div class="div-resultado" id="resultado"></div>
                                        <div class="div-butt div-data">
                                            <input type="submit" value="Iniciar sesion" onclick="Enviar();" class="login" id="ingresar">
                                        </div>
                                        <div class="div-span">
                                            <span class="span3">¿Aún no tienes una cuenta?</span>
                                            <a href="signup.php" class="a-1">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/ajax/validacion-sesion.js"></script>
</body>
</html>