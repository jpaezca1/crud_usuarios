<?php
require_once("Usuario.php");

$usuario = new Usuario();

$id = $_GET['id'];
$usuario->eliminar($id);

header("Location: listar.php");
?>