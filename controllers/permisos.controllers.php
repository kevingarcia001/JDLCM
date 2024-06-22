<?php
class PermisoController {
    
    public static function obtenerPermisosPorRol($rol) {
        switch ($rol) {
            case 1: // Admin
                return array( 'usuarios', 'roles', 'matricula', 'alumnos', 'infoAlumno', 'asignaturas', 'salir');
                break;
            case 2: // Director
                return array('matricula', 'alumnos', 'infoAlumno', 'infotTutor', 'hojamatricula', 'salir');
                break;
            default:
                return array();
                break;
        }
    }

    public static function tieneAcceso($pagina) {
        if (isset($_SESSION['rol'])) {
            $rol = $_SESSION['rol'];
            $permisos = self::obtenerPermisosPorRol($rol);
            return in_array($pagina, $permisos);
        }
        return false;
    }
}
?>
