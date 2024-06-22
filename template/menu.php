<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incluir el controlador de permisos
include_once './controllers/permisos.controllers.php';

// Obtener el rol y los permisos del usuario
if (isset($_SESSION['rol'])) {
    $rol = $_SESSION['rol'];
    $permisos = PermisoController::obtenerPermisosPorRol($rol);
} else {
    // Si no hay sesión iniciada, mostrar un menú vacío o redirigir a iniciar sesión
    $permisos = array();
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#14173D">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 text-center">
            <div class="image">
                <img src="../assets/dist/img/banner.png" style="width: 180px; height: 200px;" alt="User Image">
            </div>
            <div class="user-info text-white">
                <p class="brand-text text-sm text-uppercase fw-bold">sistema de matrícula jdlcm</p>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2 flex-grow-1">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                

                <?php if (in_array('usuarios', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="usuarios" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('roles', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="roles" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('matricula', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="matricula" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Matrículas</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('alumnos', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="alumnos" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Alumnos</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('infoAlumno', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="infoAlumno" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Información Alumno</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('asignaturas', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="asignaturas" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>Asignaturas</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('hojamatricula', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="hojamatricula" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Hoja de Matrícula</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_array('salir', $permisos)) : ?>
                    <li class="nav-item">
                        <a href="salir" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Salir</p>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </nav>
    </div>
</aside>