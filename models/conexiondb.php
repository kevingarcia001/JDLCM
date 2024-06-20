<?php

class Conexion{
    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=bd_jdlcm", "root", "admin123");
        $link->exec("set names utf8mb4");

        return $link;
    }
}


?>