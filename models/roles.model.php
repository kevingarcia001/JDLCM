<?php
require_once 'conexiondb.php';


class ModelosRoles
{

  static public function mdlMostrarRoles($tabla, $items, $valor)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $items = :$items");
    $stmt->bindParam(":" . $items, $valor, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
  }

  // select Rol
  static public function mdlComboRol($tabla)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
