<?php
// Inicia la sesión
session_start();
include_once './template/header.php';

// Verifica si la sesión está iniciada
if(!isset($_SESSION["validarSession"])){
    // Si la sesión no está iniciada, incluye la página de inicio de sesión
    include_once "./views/pages/login.php";
} else {
    // Si la sesión está iniciada, incluye la barra de navegación y el menú principal
    include_once './template/navbar.php';
    include_once './template/menu.php';
    // Verifica si la página actual es una de las páginas principales
    if(isset($_GET["pagina"]) && in_array($_GET["pagina"], ["usuarios", "roles", "matricula", "alumnos", "salir"])) {
        // Incluye el contenido de la página solicitada
        include "pages/".$_GET["pagina"].".php";
    } elseif (isset($_GET["pagina"]) && $_GET["pagina"] == "info") {
        // Si la página es "info", incluye el menú secundario
        include_once './template/menu_info.php';
          // Define un arreglo asociativo de enlaces para el menú secundario
    $links = array(
        "Página 1" => "pagina1.php",
        "Página 2" => "pagina2.php",
        "Página 3" => "pagina3.php"
        // Agrega más enlaces según sea necesario
    );

    // Pasa el arreglo de enlaces como una variable al menú secundario
    include_once './template/menu_info.php';
    }
    
    include_once './template/footer.php';
}
?>
