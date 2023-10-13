<?php
    include("./config/conexion.php");

    function BuscarPorId($id){
        $conexion = conectarBaseDeDatos();
        $ID_USER = $id;

        $sql = "SELECT * FROM users WHERE ID_USER = ?";
        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("d", $ID_USER);
        $stmt->execute();
        $resultado = $stmt->get_result();

        $fila = $resultado->fetch_assoc();
        $stmt->close();
        $conexion->close();
        return $fila;
    }

    
?>