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
          <h1 class="text-uppercase" style="font-weight: bold;">USUARIOS</h1>
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
                  <button type="button" class="btn btn-sm text-white text-uppercase" data-toggle="modal" data-target="#modal-usuarios" style="font-weight: bold; background-color: #388E3C;  ">
                    AGREGAR USARIO
                  </button>
                  <tr class="text-bold text-uppercase text-white" style="background-color:#14173D">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th style="width: 15%">Acciones</th>
                  </tr>
                </thead>
                <tbody class="text-bold text-uppercase">
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
                      <td class="text-center table-actions ">
                        <a class="btnVerUsuario mr-2" data-toggle="modal" data-target="#modal-view-usuarios" idUsuario=" <?php echo ($value["idUsuario"])  ?> " style="border: none">
                          <i class="fa fa-eye text-lg text-primary"></i>
                        </a>
                        <a class="btneditarUsuario mr-2" data-toggle="modal" data-target="#modal-edit-usuarios" idUsuario="<?php echo ($value["idUsuario"])  ?>" style="border: none">
                          <i class="fas fa-pencil-alt text-lg text-success .no-border"></i>
                        </a>
                        <a class="btnEliminarUsuario" data-toggle="modal" data-target="#modal-delete" idUsuarioE="<?php echo ($value["idUsuario"]) ?>" style="border: none">
                          <i class="fas fa-trash-alt text-lg text-center text-danger .no-border"></i>
                        </a>
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
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white text-uppercase" style="font-weight: bold">Agregar Usuarios</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="font-weight: bold">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="quickForm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nusuario" class="text-uppercase"><i class="fas fa-user"></i> Usuario</label>
                            <input type="text" name="nusuario" class="form-control text-uppercase" id="nusuario" placeholder="Correo Electrónico">
                            <div class="invalid-feedback" id="error-nusuario"></div>
                        </div>
                        <div class="form-group">
                            <label for="nombre_usuario" class="text-uppercase"><i class="fas fa-id-card"></i> Nombre</label>
                            <input type="text" name="nombre_usuario" class="form-control text-uppercase" id="nombre_usuario" placeholder="Nombre">
                            <div class="invalid-feedback" id="error-nombre_usuario"></div>
                        </div>
                        <div class="form-group">
                            <label for="password_usuario" class="text-uppercase"><i class="fas fa-lock text-uppercase"></i> Contraseña</label>
                            <input type="password" name="password_usuario" class="form-control" id="password_usuario" placeholder="Contraseña">
                            <div class="invalid-feedback" id="error-password_usuario"></div>
                        </div>
                        <div class="form-group">
                            <label for="rol_usuario" class="text-uppercase"><i class="fas fa-user-tag"></i> Rol</label>
                            <select class="form-control text-uppercase" name="rol_usuario" id="rol_usuario">
                                <option value="">Seleccione</option>
                                <?php
                                $roles = ctrRoles::ctrComboRol();
                                foreach ($roles as $rol) {
                                    echo '<option value="' . $rol["idRol"] . '">' . $rol["Rol"] . '</option>';
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback" id="error-rol_usuario"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn-guardar">Guardar</button>
                    </div>
                </form>
            </div>
            <?php
            
            $guardarUsuario = new ctrUsuarios();
            $guardarUsuario->ctrGuardarUsuarios();
      
            ?>
        </div>
    </div>
</div>


<!-- Editar Usuarios -->
<div class="modal fade" id="modal-edit-usuarios">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#14173D">
                <h4 class="modal-title text-white text-uppercase" style="font-weight: bold">Editar Usuario</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="quickFormE">
                    <div class="card-body">
                        <input type="hidden" name="idUsuarioE" id="idUsuarioE">
                        <div class="form-group">
                            <label for="nusuarioE" class="text-uppercase"><i class="fas fa-user"></i> Usuario</label>
                            <input type="email" name="nusuarioE" class="form-control" id="nusuarioE" placeholder="Correo Electrónico">
                            <div class="invalid-feedback" id="error-nusuarioE"></div>
                        </div>
                        <div class="form-group">
                            <label for="nombre_usuarioE" class="text-uppercase"><i class="fas fa-id-card"></i> Nombre</label>
                            <input type="text" name="nombre_usuarioE" class="form-control text-uppercase" id="nombre_usuarioE" placeholder="Nombre">
                            <div class="invalid-feedback" id="error-nombre_usuarioE"></div>
                        </div>
                        <div class="form-group">
                            <label for="password_usuarioE" class="text-uppercase"><i class="fas fa-lock text-uppercase"></i> Nueva Contraseña</label>
                            <input type="password" name="password_usuarioE" class="form-control text-uppercase" id="password_usuarioE" placeholder="Nueva Contraseña">
                            <div class="invalid-feedback" id="error-password_usuarioE"></div>
                        </div>
                        <div class="form-group">
                            <label for="rol_usuarioE" class="text-uppercase"><i class="fas fa-user-tag"></i> Rol</label>
                            <select class="form-control text-uppercase" name="rol_usuarioE" id="rol_usuarioE">
                                <option value="">Seleccione</option>
                                <?php
                                $roles = ctrRoles::ctrComboRol();
                                foreach ($roles as $rol) {
                                ?>
                                    <option value="<?php echo $rol["idRol"] ?>"><?php echo $rol["Rol"] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback" id="error-rol_usuarioE"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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




     
<!-- VER -->
<div class="modal fade" id="modal-view-usuarios">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#14173D">
        <h4 class="modal-title text-white text-uppercase" style="font-weight: bold">Ver Usuario</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-view-usuario">
          <div class="row">
            <input type="hidden" name="idUsuarioE" id="idUsuarioE">

            <div class="col-md-6">
              <div class="form-group">
                <label for="nusuarioV" class="text-uppercase"><i class="fas fa-user"></i> Usuario</label>
                <p id="nusuarioV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre_usuarioV" class="text-uppercase"><i class="fas fa-user-tag "></i> Nombre</label>
                <p id="nombre_usuarioV" class=" form-control-plaintext border rounded bg-light p-2 text-uppercase"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="password_usurioV" class="text-uppercase"><i class="fas fa-key"></i> Contraseña</label>
                <p type="password" id="password_usurioV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="rol_usuarioV" class="text-uppercase"><i class="fas fa-user-shield"></i> Rol</label>
                <p id="rol_usuarioV" class="form-control-plaintext border rounded bg-light p-2"></p>
              </div>
            </div>

          </div>
          <div class="text-right">
            <button type="button" class="btn btn-success text-uppercase" data-dismiss="modal" style="font-weight: bold">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>