<?php
require_once("Usuario.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuarios</title>
</head>
<body>

<h2>Registrar Usuario</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br><br>
    <input type="email" name="correo" placeholder="Correo" required><br><br>
    <input type="text" name="telefono" placeholder="Teléfono" required><br><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<?php
if(isset($_POST['guardar'])){
    $usuario = new Usuario();
    $usuario->insertar($_POST['nombre'], $_POST['correo'], $_POST['telefono']);
    echo "<p>Usuario registrado correctamente</p>";
}
?>

<br>
<a href="listar.php">Ver usuarios</a>

</body>
</html>