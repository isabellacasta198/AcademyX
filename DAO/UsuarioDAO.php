<?php 
// DAO/UsuarioDAO.php
require_once __DIR__ . '/../Library/Config/conexionSqli.php';

class UsuarioDAO
{
    private $conn;

    public function __construct()
    {
        $this->conn = (new Connection())->getConnect();
    }

    // Verificar si ya existe el correo
    public function existeCorreo($email)
    {
        $sql = "SELECT id FROM usuarios WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($this->conn, $sql);

        return mysqli_num_rows($result) > 0;
    }

    // Registrar usuario nuevo
    public function registrar($nombre, $email, $password, $tipo)
    {
        $passHash = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO usuarios (name, email, password, tipo) 
                VALUES ('$nombre', '$email', '$passHash', '$tipo')";

        return mysqli_query($this->conn, $sql);
    }

    // LOGIN
    public function login($email, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($this->conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {

            // Verifica la contraseña
            if (password_verify($password, $row['password'])) {
                return $row; // LOGIN CORRECTO
            }
        }

        return false; // LOGIN INCORRECTO
    }
}
?>
