<?php
class MenuController {
    public static function getSecondaryMenu($profileType) {
        switch ($profileType) {
            case 'alumno':
                return [
                    ['url' => 'index.php?pagina=infoAlumno', 'icon' => 'fas fa-user', 'text' => 'Alumnos'],
                    ['url' => 'index.php?pagina=tutores', 'icon' => 'fas fa-user-friends', 'text' => 'Tutor'],
                    ['url' => 'index.php?pagina=notas', 'icon' => 'fas fa-book', 'text' => 'Notas'],
                    ['url' => 'index.php?pagina=registro-matriculas', 'icon' => 'fas fa-clipboard-list', 'text' => 'Registro de Matriculas']
                ];
            default:
                return [];
        }
    }
}

?>