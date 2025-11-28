<?php
require_once "../DAO/UsuarioDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $dao = new UsuarioDAO();

    // Verificar si el correo ya existe
    if ($dao->existeCorreo($email)) {
        echo "<script>alert('El correo ya está registrado'); window.history.back();</script>";
        exit;
    }

    // Registrar nuevo usuario
    if ($dao->registrar($nombre, $email, $password, $tipo)) {
        echo "<script>alert('Registro exitoso'); window.location='../web/index.php';</script>";
    } else {
        echo "<script>alert('Error al registrar'); window.history.back();</script>";
    }
}
?>
