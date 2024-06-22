<?php

class ctrUsuarios
{

    static public function ctrIniciarSesion()
    {
        if (isset($_POST["log_user"]) && isset($_POST["log_pass"])) {
            $usuario = $_POST["log_user"];
            $contraseña = $_POST["log_pass"];
            $tabla = "usuario";
            $item = "Nombre";

            $respuesta = mdlUsuarios::mdlIniciarSecion($tabla, $item, $usuario);

            if ($respuesta && $respuesta["Nombre"] == $usuario && $respuesta["Contrasena"] == $contraseña) {
                $_SESSION["validarSession"] = "ok";
                $_SESSION["idBackend"] = $respuesta["idUsuario"];
                $_SESSION["Nickname"] = $respuesta["Nombre"];
                $_SESSION["rol"] = $respuesta["Rol_idRol"];

                echo '<script> 
                         window.location = "index.php?pagina=usuarios";  
                      </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Usuario o contraseña incorrectos",
                            showConfirmButton: true,
                            timer: 3000
                        });
                      </script>';
            }
        }
    }


    static public function ctrListarUsuarios()
    {
        $tabla = "usuario";
        $respuesta = mdlUsuarios::mdlListarUsuarios($tabla);
        return $respuesta;
    }

    // controlador mostrar datos en otras tablas
    static public function ctrMostrarUsuarios($item, $valor)
    {
        $tabla = "usuario";
        $respuesta = mdlUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
        return $respuesta;
    }

    // funcion crear usuarios
    static public function ctrGuardarUsuarios()
    {
        if (
            isset($_POST["nusuario"]) && !empty($_POST["nusuario"]) &&
            !empty($_POST["nombre_usuario"]) && !empty($_POST["password_usuario"]) &&
            !empty($_POST["rol_usuario"])
        ) {

            $nusuario = ($_POST["nusuario"]);
            $nombre = ($_POST["nombre_usuario"]);
            $password = ($_POST["password_usuario"]);
            $rol = ($_POST["rol_usuario"]);

            // **Validation**: Check if fields meet your requirements (e.g., email format, minimum password length)
            $valid = true; // Flag to track validation status
            $errorMessages = []; // Array to store error messages

            // Email validation (replace with your specific logic)
            if (!filter_var($nusuario, FILTER_VALIDATE_EMAIL)) {
                $valid = false;
                $errorMessages[] = "El correo electrónico ingresado no es válido.";
            }

            // Minimum password length validation (replace with your desired length)
            if (strlen($password) < 8) {
                $valid = false;
                $errorMessages[] = "La contraseña debe tener al menos 8 caracteres.";
            }

            // Check if any validation errors occurred
            if (!$valid) {
                $errorMessage = implode("<br>", $errorMessages); // Join error messages
                echo '<script> Swal.fire({ icon: "error", title: "Error", text: "' . $errorMessage . '", showConfirmButton: true, timer: 3000 }); </script>';
                return; // Exit if validation fails
            }

            $datos = array(
                "Usuario" => $nusuario,
                "Nombre" => $nombre,
                "Contrasena" => $password, // Consider using password hashing for security
                "Rol_idRol" => $rol,
            );

            $tabla = "usuario";
            $respuesta = mdlUsuarios::mdlGuardarUsuarios($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script> Swal.fire({ icon: "success", title: "Usuario guardado correctamente", showConfirmButton: false, timer: 3000 }).then(() => { window.location = "index.php?pagina=usuarios"; }); </script>';
            } else {
                echo '<script> Swal.fire({ icon: "error", title: "Error", text: "Error al guardar usuario: ' . $respuesta . '", showConfirmButton: true, timer: 3000 }); </script>';
            }
        }
    }




    // Editar
    static public function ctrEditarUsuario()
    {
        if (isset($_POST["idUsuarioE"])) {
            $idUsuario = $_POST["idUsuarioE"];
            $usuario = $_POST["nusuarioE"];
            $nombre = $_POST["nombre_usuarioE"];
            $contrasena = $_POST["password_usurioE"];
            $rol = $_POST["rol_usuarioE"];

            if (!empty($contrasena)) {
                $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);
            } else {
                // Si no se proporcionó una nueva contraseña, mantener la existente
                $usuarioExistente = mdlUsuarios::mdlIniciarSecion("usuario", "idUsuario", $idUsuario); // Obtener los datos actuales del usuario
                $contrasena_encriptada = $usuarioExistente["Contrasena"];
            }
            // Clave de recuperación


            $datos = array(
                "idUsuario" => $idUsuario,
                "Usuario" => $usuario,
                "Nombre" => $nombre,
                "Contrasena" => $contrasena_encriptada,
                "Rol_idRol" => $rol,

            );

            $tabla = "usuario";
            $respuesta = mdlUsuarios::mdlEditarUsuario($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Usuario actualizado correctamente",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            window.location = "usuarios";
                        });
                      </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Error al actualizar Usuario: ' . $respuesta . '",
                            showConfirmButton: true,
                            timer: 3000
                        });
                      </script>';
            }
        }
    }


    static public function ctrEliminarUsuario($id)
    {
        $tabla = "usuario";
        $respuesta = mdlUsuarios::mdlEliminarUsuario($tabla, $id);
        return $respuesta;
    }
}
