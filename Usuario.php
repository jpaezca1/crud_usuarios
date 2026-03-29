<?php
include("conexion.php");

class Usuario {

    public function insertar($nombre, $correo, $telefono){
        global $conexion;
        $sql = "INSERT INTO usuarios(nombre, correo, telefono)
                VALUES ('$nombre', '$correo', '$telefono')";
        return $conexion->query($sql);
    }

    public function listar(){
        global $conexion;
        return $conexion->query("SELECT * FROM usuarios");
    }

    public function obtener($id){
        global $conexion;
        return $conexion->query("SELECT * FROM usuarios WHERE id=$id");
    }

    public function actualizar($id, $nombre, $correo, $telefono){
        global $conexion;
        $sql = "UPDATE usuarios SET 
                nombre='$nombre',
                correo='$correo',
                telefono='$telefono'
                WHERE id=$id";
        return $conexion->query($sql);
    }

    public function eliminar($id){
        global $conexion;
        return $conexion->query("DELETE FROM usuarios WHERE id=$id");
    }

}
?>