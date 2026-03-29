<?php
require_once("Usuario.php");

$usuario = new Usuario();

$id = $_GET['id'];
$datos = $usuario->obtener($id);
$row = $datos->fetch_assoc();

if(isset($_POST['actualizar'])){
    $usuario->actualizar($id, $_POST['nombre'], $_POST['correo'], $_POST['telefono']);
    header("Location: listar.php");
}
?>

<h2>Editar Usuario</h2>

<form method="POST">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br><br>
    <input type="email" name="correo" value="<?php echo $row['correo']; ?>"><br><br>
    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br><br>
    <button name="actualizar">Actualizar</button>
</form>