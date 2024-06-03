<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link text-center">
      <span class="brand-text font-weight-light ">JDLCM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="info text-center text-white ">
          <h2> <?php echo isset($_SESSION["Nickname"]) ? $_SESSION["Nickname"] : "Usuario"; ?></h2>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn  btn-sm btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="alumnos" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Alumnos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="matricula" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                matricula
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="roles" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Roles
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="index.php?pagina=salir" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Salir</p>
            </a>
        </li>

        </ul>
      </nav>
     
    </div>
  
  </aside>