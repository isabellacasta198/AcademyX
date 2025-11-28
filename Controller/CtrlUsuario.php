<?php
// Controller/CtrlUsuario.php
require_once __DIR__ . '/../DAO/UsuarioDAO.php';

class CtrlUsuario {
    public function perfil() {
        if(!isset($_SESSION['user_id'])) {
            header("Location: index.php?controller=Auth&function=index"); exit;
        }
        $user = UsuarioDAO::getById($_SESSION['user_id']);
        include __DIR__ . '/../View/Usuarios/ViewPerfil.php';
    }
}
