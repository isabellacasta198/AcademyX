<?php
require_once "../DAO/CursoDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $nivel = $_POST["nivel"];
    $instructor = $_POST["instructor"];

    $curso = new Curso($nombre, $descripcion, $nivel, $instructor);
    $dao = new CursoDAO();

    if ($dao->agregarCurso($curso)) {
        echo "<script>alert('Curso agregado correctamente'); 
        window.location='../web/home.php';</script>";
    } else {
        echo "<script>alert('Error al agregar el curso'); 
        window.history.back();</script>";
    }
}
?>
