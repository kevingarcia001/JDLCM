<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link text-center">
        <span class="brand-text font-weight-light">JDLCM</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info text-center text-white">
                <h2><?php echo isset($_SESSION["Nickname"]) ? $_SESSION["Nickname"] : "Usuario"; ?></h2>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php?pagina=usuarios" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=asignaturas" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Asignaturas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=matricula" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Matriculas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=alumnos" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Alumnos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=infoAlumno" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Iformacion Alumno</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=infotTutor" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>Iformacion Tutor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=infotutor" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Notas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=infotutor" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Registro Matricula</p>
                    </a>
                </li>
                <!-- Aquí se cargará dinámicamente el menú secundario -->
                </ul>
                <ul>
                    <li>
                        
                        <div id="secondary-menu"></div> 
                    </li>
                </ul>
        </nav>
    </div>
</aside>
