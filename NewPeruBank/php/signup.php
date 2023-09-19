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
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="main-container">
            <div class="div-main-container">
                <div class="div-blur-tarjeta"></div>
                <div class="main-container-tarjeta">
                    <form method="post" action="../php-omen/registro.php">
                        <span class="span1">ABRE TU CUENTA GRATIS</span>
                        <span class="span2">Crea una nueva cuenta.</span>
                        <div class="div-form">
                            <div class="div-data-user">
                                <div class="div-name div-data">
                                    <input class="name input-name" name="name" id="name" type="text" placeholder="Nombres" autocomplete="off">
                                </div>
                                <div class="div-dni div-data">
                                    <input class="dni input-dni" name="dni" id="dni" type="text" maxlength="8" minlength="8" placeholder="DNI" autocomplete="off">
                                </div>
                            </div>
                            <p class="div-warning" id="data-dni-nombre">Datos mal ingresados</p>
                            <div class="div-pass div-data">
                                <input name="pass" class="input-pass" type="password" id="pass" placeholder="Contraseña" autocomplete="off">
                            </div>
                            <p class="div-warning" id="data-pass">3</p>
                            <div class="div-pass div-data">
                                <input name="pass-conf" class="input-pass-confirm" id="pass-conf" type="password" placeholder="Confirmar contraseña" autocomplete="off">
                            </div>
                            <p class="div-warning" id="resultado">4</p>
                            <div class="div-button div-data">
                                <input type="submit" class="button-ingresar" id="button-ingresar" value="Ingresar">
                            </div>
                            <div class="div-redirection div-data">
                                <span class="p-redirection">Ya tienes una cuenta? <a href="login.php" class="a-redirection">Log In</a> </span>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/signup.js"></script>
    <!-- <script src="../js/ajax/validacion-registro.js"></script> -->
</body>
</html>