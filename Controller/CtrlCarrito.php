<?php
session_start();

require_once "../Model/Carrito.php";
require_once "../DAO/CarritoDAO.php";

$accion = $_GET["accion"];

$carritoDAO = new CarritoDAO();

// AGREGAR AL CARRITO
if ($accion == "agregar") {

    $id_usuario = $_SESSION["id_usuario"];
    $id_curso   = $_POST["id_curso"];

    $carrito = new Carrito($id_usuario, $id_curso);
    $carritoDAO->agregarCurso($carrito);

    echo json_encode(["status" => "ok"]);
}

// LISTAR CARRITO
if ($accion == "listar") {
    $id_usuario = $_SESSION["id_usuario"];
    $result = $carritoDAO->obtenerCarrito($id_usuario);

    $cursos = [];
    while ($row = $result->fetch_assoc()) {
        $cursos[] = $row;
    }

    echo json_encode($cursos);
}
