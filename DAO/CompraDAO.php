<?php
// DAO/CompraDAO.php
require_once __DIR__ . '/../Library/Config/conexionSqli.php';

class CompraDAO {
    public static function createCompra($usuario_id, $total) {
        $sql = "INSERT INTO compras (usuario_id, total, fecha) VALUES (:u, :t, NOW())";
        Conexion::query($sql, ['u'=>$usuario_id, 't'=>$total]);
        return Conexion::getPdo()->lastInsertId();
    }

    public static function addDetalle($compra_id, $curso_id, $precio) {
        $sql = "INSERT INTO detalle_compra (compra_id, curso_id, precio) VALUES (:c, :cr, :p)";
        Conexion::query($sql, ['c'=>$compra_id, 'cr'=>$curso_id, 'p'=>$precio]);
    }

    public static function getComprasByUser($usuario_id) {
        $sql = "SELECT * FROM compras WHERE usuario_id = :u ORDER BY fecha DESC";
        return Conexion::query($sql, ['u'=>$usuario_id])->fetchAll();
    }
}
