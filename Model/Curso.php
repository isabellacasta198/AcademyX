<?php
class Curso {
    public $id;
    public $nombre;
    public $descripcion;
    public $nivel;
    public $instructor;

    public function __construct($nombre, $descripcion, $nivel, $instructor) {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->nivel = $nivel;
        $this->instructor = $instructor;
    }
}
?>
