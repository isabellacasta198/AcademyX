<?php
require_once "../DAO/UsuarioDAO.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $dao = new UsuarioDAO();
    $user = $dao->login($email, $password);

    if ($user) {

        // GUARDAR DATOS EN SESIÓN
        $_SESSION["usuario"] = $user;

        echo "<script>
                alert('Bienvenido, has iniciado sesión correctamente');
                window.location='../web/home.php'; // 👈 tu página después del login
              </script>";
    } else {
        echo "<script>
                alert('Correo o contraseña incorrectos');
                window.history.back();
              </script>";
    }
}
?>
