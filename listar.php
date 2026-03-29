<?php
require_once("Usuario.php");

$usuario = new Usuario();
$datos = $usuario->listar();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="text-center mb-4">Usuarios Registrados</h2>

<table class="table table-bordered table-striped text-center">
<thead class="table-dark">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>
<?php while($row = $datos->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['correo']; ?></td>
    <td><?php echo $row['telefono']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="eliminar.php?id=<?php echo $row['id']; ?>" 
           onclick="return confirm('¿Seguro que deseas eliminar?');"
           class="btn btn-danger btn-sm">Eliminar</a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>

<a href="index.php" class="btn btn-primary">Volver</a>

</body>
</html>