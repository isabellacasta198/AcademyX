<?php
// Controller/CtrlCompra.php
require_once __DIR__ . '/../DAO/CarritoDAO.php';
require_once __DIR__ . '/../DAO/CompraDAO.php';
require_once __DIR__ . '/../Library/Config/conexionSqli.php';

class CtrlCompra {
    public function confirmar() {
        if(!isset($_SESSION['user_id'])) { header("Location: index.php?controller=Auth&function=index"); exit; }
        $userId = $_SESSION['user_id'];
        $items = CarritoDAO::getByUser($userId);
        if(empty($items)) {
            $_SESSION['error'] = "Carrito vacío.";
            header("Location: index.php?controller=Carrito&function=view"); exit;
        }
        $total = CarritoDAO::total($userId);
        // Crear compra
        $compraId = CompraDAO::createCompra($userId, $total);
        // Guardar detalles
        foreach($items as $it){
            CompraDAO::addDetalle($compraId, $it['curso_id'], $it['precio']);
        }
        // Vaciar carrito
        CarritoDAO::empty($userId);
        $_SESSION['success'] = "Compra realizada con éxito.";
        header("Location: index.php?controller=Curso&function=misCursos"); exit;
    }

    public function view() {
        include __DIR__ . '/../View/Carrito/ViewCompra.php';
    }
}
