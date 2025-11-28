<?php
require_once __DIR__ . '/../Library/Config/conexionSqli.php';
require_once __DIR__ . '/../Model/Curso.php';

class CursoDAO {

    private $conn;

    public function __construct() {
        $this->conn = (new Connection())->getConnect();
    }

    public function agregarCurso(Curso $curso) {
        $sql = "INSERT INTO cursos (nombre, descripcion, nivel, instructor)
                VALUES (
                    '{$curso->nombre}',
                    '{$curso->descripcion}',
                    '{$curso->nivel}',
                    '{$curso->instructor}'
                )";

        return mysqli_query($this->conn, $sql);
    }
}
?>
