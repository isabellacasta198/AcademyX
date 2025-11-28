<?php
// Controller/CtrlAuth.php
session_start();
require_once __DIR__ . '/../DAO/UsuarioDAO.php';

class CtrlAuth {

    // Mostrar login
    public function index() {
        include __DIR__ . '/../View/Usuarios/ViewLogin.php';
    }

    // Mostrar formulario de registro
    public function registerForm() {
        include __DIR__ . '/../View/Usuarios/ViewRegistro.php';
    }

    // Registro de usuario
    public function register() {
        $nombre = $_POST['nombre'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $pass = $_POST['password'] ?? '';

        if(!$nombre || !$correo || !$pass) {
            $_SESSION['error'] = "Todos los campos son requeridos.";
            header("Location: index.php?controller=Auth&function=registerForm");
            exit;
        }

        // Verificar si existe el correo
        if(UsuarioDAO::getByEmail($correo)) {
            $_SESSION['error'] = "El correo ya está registrado.";
            header("Location: index.php?controller=Auth&function=registerForm");
            exit;
        }

        $hash = password_hash($pass, PASSWORD_DEFAULT);

        UsuarioDAO::create($nombre, $correo, $hash, 'estudiante');

        $_SESSION['success'] = "Registro exitoso. Ahora puedes iniciar sesión.";
        header("Location: index.php?controller=Auth&function=index");
        exit;
    }

    // LOGIN
    public function login() {
        $correo = $_POST['correo'] ?? '';
        $pass = $_POST['password'] ?? '';

        // Buscar usuario por email
        $user = UsuarioDAO::getByEmail($correo);

        if(!$user || !password_verify($pass, $user['password'])) {
            $_SESSION['error'] = "Credenciales inválidas.";
            header("Location: index.php?controller=Auth&function=index");
            exit;
        }

        // Login correcto
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nombre'] = $user['nombre'];
        $_SESSION['user_rol'] = $user['rol'];

        header("Location: index.php?controller=Curso&function=index");
        exit;
    }

    // Cerrar sesión
    public function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php?controller=Auth&function=index");
        exit;
    }
}
