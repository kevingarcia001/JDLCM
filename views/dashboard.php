<?php
// Inicia la sesión
session_start();
include_once './template/header.php';

// Verifica si la sesión está iniciada
if(!isset($_SESSION["validarSession"])){
    // Si la sesión no está iniciada, incluye la página de inicio de sesión
    include_once "./views/pages/login.php";
} else {
    // Si la sesión está iniciada, incluye la barra de navegación, el menú y el contenido de la página solicitada
    include_once './template/navbar.php';
    include_once './template/menu.php';
    
    if(isset($_GET["pagina"])){
        if($_GET["pagina"] == "usuarios" ||
            $_GET["pagina"] == "roles" ||
            $_GET["pagina"] == "matricula" ||
            $_GET["pagina"] == "alumnos" ||
            $_GET["pagina"] == "infoAlumno" ||
            $_GET["pagina"] == "infotTutor" ||
            $_GET["pagina"] == "salir") {
            include "pages/".$_GET["pagina"].".php";
        }
    }

    // El solo puede agregar y editarÇÇ
    include_once './template/footer.php';
}
?>

