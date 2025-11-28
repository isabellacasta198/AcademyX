<?php
// Model/Usuario.php
class Usuario {
    public $id;
    public $nombre;
    public $correo;
    public $password; // hashed
    public $rol; // 'estudiante'|'instructor'|'administrador'
}
