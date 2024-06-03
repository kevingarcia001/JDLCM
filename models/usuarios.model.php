<?php 

require_once "conexiondb.php";

class mdlUsuarios{

    static public function mdlIniciarSecion($tabla, $item, $valor) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $stmt->closeCursor();
        $stmt = null;
        return $resultado;
    }

 
    // lista usuarios
    static public function mdlListarUsuarios($tabla){
         $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
         $stmt->execute();   
         return $stmt->fetchAll();
         $stmt->close();
         $stmt=null;
    }

    //llamada de otra tabla.
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STMT);
        $stmt->execute();
        return $stmt->fetch();
    }


    // Guardar Usuarios
    static public function mdlGuardarUsuarios($tabla, $datos){
        try{
            $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla( Usuario, Nombre, Contrasena, Rol_idRol) VALUES (:Usuario, :Nombre, :Contrasena, :Rol_idRol) ");

            $stmt->bindParam(":Usuario", $datos["Usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
            $stmt->bindParam(":Rol_idRol", $datos["Rol_idRol"], PDO::PARAM_INT);
    
            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }
    
           
        } catch(PDOException $e){
            return "error: " .$e->getMessage();
        } finally{
            $stmt->closeCursor();
            $stmt = null;
        }


    }
    // Editar Usuarios
    static public function mdlEditarUsuario($tabla, $datos){
        try{
            $stmt= Conexion::conectar()->prepare("UPDATE $tabla SET Usuario=:Usuario, Nombre=:Nombre, Contrasena=:Contrasena, Rol_idRol=:Rol_idRol");

            $stmt->bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
            $stmt->bindParam(":Usuario", $datos["Usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
            $stmt->bindParam(":Rol_idRol", $datos["Rol_idRol"], PDO::PARAM_INT);
    
            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }
    
           
        } catch(PDOException $e){
            return "error: " .$e->getMessage();
        } finally{
            $stmt->closeCursor();
            $stmt = null;
        }


    }



}

?>