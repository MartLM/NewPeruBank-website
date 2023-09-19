<?php
    error_reporting(0);
    session_start();
    $user = $_SESSION['DNI'];
    if($user != null){
        header("location: php/principal.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/index.css" />
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="div-nav-bar">
                <div class="container nav-bar">
                    <div class="container-logo">
                        <div class="logo"></div>
                        <a href="index.php">New Peru Bank</a>
                    </div>
                    <span class="menu-icon">Ver menú</span>
                    <nav>
                        <ul>
                            <li>
                                <a href="php/login.php" class="a-nav">Login</a>
                            </li>
                            <li>
                                <a href="php/signup.php" class="a-nav">Sign up</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container cont-head">
                <div class="imagen-tarjeta">
                    <div class="back-tarjeta"></div>
                    <div class="ligth-tarjeta"></div>
                    <div class="tarjeta"></div>
                </div>
                <div class="leyenda">
                    <div class="div-leyenda">
                        <p class="p1-leyenda">BANCA SEGURA, MEJOR SERVICIO.</p>
                        <p class="p2-leyenda">
                            Obtenga los datos de mercado, alertas, conversiones,
                            herramientas y más, todo dentro de la misma
                            aplicación.
                        </p>
                        <a href="App-JDK/NewPeruBank.rar" download="NewPeuBank.rar">
                            <div class="border-button-dowload">
                                <div class="button-dowload">
                                    <div class="logo-download"></div>
                                    <p class="a-button-dowload">
                                        Descargar app
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="main-div-container">
                <div class="main-img-container">
                    <div class="div-img-p">
                        <div class="div-img"><div class="img1 img"></div></div>
                        <p>Crea tu cuenta</p>
                    </div>
                    <div class="div-img-p">
                        <div class="div-img"><div class="img2 img"></div></div>
                        <p>Obtén tu tarjeta</p>
                    </div>
                    <div class="div-img-p">
                        <div class="div-img"><div class="img3 img"></div></div>
                        <p>Envía dinero</p>
                    </div>
                </div>
                <div class="main-info-container">
                    <div class="div-info-img-container">
                        <div class="div-info-img"></div>
                    </div>
                    <div class="div-info-container">
                        <div class="div-info-p3">
                            <p class="p3-leyenda">
                                ¿Quieres saber a cerca de la banca móvil de New
                                Peru Bank?
                            </p>
                        </div>
                        <div class="div-info-p4">
                            <p class="p4-leyenda">
                                Operamos nuestros servicios bancarios en muchos
                                países alrededor del mundo. <br />
                                <br />En nuestra banca web puedes realizar
                                distintas transacciones financieras de dinero en
                                un dispositivo móvil (smartphone, teblet, etc).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="main-suscribe-container">
                    <form action="" class="suscribe-news">
                        <div class="border-suscribe-container">
                            <div class="content-suscribe-container">
                                <p class="p5-leyenda">
                                    Suscribete al Newsletter
                                </p>
                                <div class="div-input-border">
                                    <input
                                        class="input-e-mail"
                                        type="email"
                                        name="nombre"
                                        placeholder="Ingrese su e-mail"
                                    />
                                </div>
                                <button id="limpiar" type="submit">
                                    Suscribirme
                                    <img
                                        src="images/img-limpiar.svg"
                                        class="img-limpiar"
                                    />
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <div class="foot-container">
                <div class="div-foot-description">
                    <p class="foot-title">New Peru Bank</p>
                    <p class="foot-leyenda">
                        Operamos nuestros servicios bancarios en muchos países
                        alrededor del mundo.
                    </p>
                </div>
                <div class="div-foot-options">
                    <div class="option-colum">
                        <ul class="ul-foot">
                            <li><p class="ul-foot-p">Product</p></li>
                            <li><a href="">Carere</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Integrations</a></li>
                            <li><a href="">PCI Compilance</a></li>
                        </ul>
                    </div>
                    <div class="option-colum">
                        <ul class="ul-foot">
                            <li><p class="ul-foot-p">Service</p></li>
                            <li><a href="">Docs</a></li>
                            <li><a href="">Knowledge Base</a></li>
                            <li><a href="">System Status</a></li>
                            <li><a href="">Tutorials</a></li>
                            <li><a href="">Security</a></li>
                        </ul>
                    </div>
                    <div class="option-colum">
                        <ul class="ul-foot">
                            <li><p class="ul-foot-p">FAQ</p></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Leadership</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">Team</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foot-copy-container">
                <div class="div-foot-copy-container" >
                    <div class="div-foot-copy-options">
                        <div class="div-foot-copy">
                            <p class="p-copy">© 2022 New Peru Bank | All Gights Reserved</p>
                        </div>
                        <div class="div-foot-list-options">
                            <ul class="ul-foot-copy">
                                <li><a href="">Plataform</a></li>
                                <li><a href="">Products</a></li>
                                <li><a href="">Resources</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>
