<?php
require_once "Conexion.php";

class CarritoDAO {

    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    // Insertar curso al carrito
    public function agregarCurso($carrito) {
        $sql = "INSERT INTO carrito (id_usuario, id_curso) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ii", 
            $carrito->getIdUsuario(),
            $carrito->getIdCurso()
        );
        return $stmt->execute();
    }

    // Obtener los cursos del usuario
    public function obtenerCarrito($id_usuario) {
        $sql = "SELECT c.* FROM carrito ca 
                INNER JOIN cursos c ON ca.id_curso = c.id
                WHERE ca.id_usuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        return $stmt->get_result();
    }
}
