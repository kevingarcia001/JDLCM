<?php

// session_start();
$usuarios = ctrUsuarios::ctrListarUsuarios();
// var_dump($usuarios);
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>USUARIOS</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped tablaUsuario">
                <thead>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-usuarios">
                    AGREGAR USARIO
                  </button>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php   ?>
                  <?php
                  foreach ($usuarios as $key => $value) {

                    $item = "idRol";
                    $valor = $value["Rol_idRol"];
                    $rol = ctrRoles::ctrMostrarRoles($item, $valor);
                  ?>
                    <tr>
                      <td> <?php echo ($key + 1)  ?></td>
                      <td><?php echo ($value["Nombre"])  ?> </td>
                      <td> <?php echo ($rol["Rol"])  ?> </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-primary btn-sm btneditarUsuario" data-toggle="modal" data-target="#modal-edit-usarios" idUsuario="<?php echo ($value["idUsuario"])  ?>">
                          <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btnEliminarUsuario" data-toggle="modal" data-target="#modal-delete" idUsuarioE="<?php echo ($value["idUsuario"])?>" >
                          <i class="fa fa-trash"></i>
                        </button>
                      </td>

                    </tr>
                  <?php
                  }
                  ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


<div class="modal fade" id="modal-usuarios">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Usuarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-body">

            <div class="form-group">
              <label for="nusuario">Usuario</label>
              <input type="text" name="nusuario" class="form-control" id="nusuario" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
              <label for="nombre_usuario">Nombre</label>
              <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="password_usurio">Contraseña</label>
              <input type="password" name="password_usurio" class="form-control" id="password_usurio" placeholder="Contraseña">
            </div>

            <div class="form-group">
              <label for="rol_usuario">Rol</label>
              <select class="form-control" name="rol_usuario" id="rol_usuario">
                <option value="">seleccione</option>
                <?php
                $roles = ctrRoles::ctrComboRol();
                foreach ($roles as $rol) {
                ?>
                  <option value="<?php echo $rol["idRol"] ?>"><?php echo $rol["Rol"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>

      <?php
      $guardarUsuarios = new ctrUsuarios();
      $guardarUsuarios->ctrGuardarUsuarios();

      ?>

    </div>

  </div>

</div>


<div class="modal fade" id="modal-edit-usarios">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Usuarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-body">
          <input type="hidden" name="idUsuarioE" id="idUsuarioE">
            <div class="form-group">
              <label for="nusuarioE">Usuario</label>
              <input type="text" name="nusuarioE" class="form-control" id="nusuarioE" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
              <label for="nombre_usuarioE">Nombre</label>
              <input type="text" name="nombre_usuarioE" class="form-control" id="nombre_usuarioE" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="password_usurioE">Contraseña</label>
              <input type="password" name="password_usurioE" class="form-control" id="password_usurioE" placeholder="Contraseña">
            </div>

            <div class="form-group">
              <label for="rol_usuarioE">Rol</label>
              <select class="form-control" name="rol_usuarioE" id="rol_usuarioE">
                <option value="">seleccione</option>
                <?php
                $roles = ctrRoles::ctrComboRol();
                foreach ($roles as $rol) {
                ?>
                  <option value="<?php echo $rol["idRol"] ?>"><?php echo $rol["Rol"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>

      <?php
      $editarUsuarios = new ctrUsuarios();
      $editarUsuarios->ctrEditarUsuario();
      ?>
    </div>

  </div>

</div>