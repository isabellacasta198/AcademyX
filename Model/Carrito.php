<?php

class Carrito {
    private $id;
    private $id_usuario;
    private $id_curso;

    public function __construct($id_usuario, $id_curso) {
        $this->id_usuario = $id_usuario;
        $this->id_curso = $id_curso;
    }

    public function getIdUsuario() { return $this->id_usuario; }
    public function getIdCurso() { return $this->id_curso; }
}
