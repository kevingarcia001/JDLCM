<?php
session_start(); // Iniciar sesión si no está iniciada
include_once './template/header.php';
include_once './controllers/permisos.controllers.php';

if (!isset($_SESSION["validarSession"])) {
    include_once "./views/pages/login.php";
} else {
    include_once './template/navbar.php';
    include_once './template/menu.php';


    if (isset($_GET["pagina"])) {
        $pagina = $_GET["pagina"];
        
        // Verificar acceso usando el PermisoController
        if (PermisoController::tieneAcceso($pagina)) {
            include_once "pages/" . $pagina . ".php";
        } else {
            echo "Acceso denegado"; 
        }
    }

    include_once './template/footer.php';
}
?>
