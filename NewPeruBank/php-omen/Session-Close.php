<?php
    session_start();
    unset($_SESSION['DNI']);
    session_destroy();
    header('location: ../index.php');
?>