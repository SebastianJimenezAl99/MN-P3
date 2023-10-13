<?php 
    if (!empty($_POST)) {
        include('../config/conexion.php');
        session_start();
        $id_user = $_SESSION['USER'][0];
        $name = $_POST['name'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];

        $conexion = conectarBaseDeDatos();
        
        if(empty($_POST['pass'])){
            $sql = "UPDATE users SET NAME = ? , BIO = ?, PHONE = ?, EMAIL = ? WHERE ID_USER = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("ssssd", $name, $bio, $phone, $email, $id_user);
        }else{
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $sql = "UPDATE users SET NAME = ? , BIO = ?, PHONE = ?, EMAIL = ?, PASSWORD = ? WHERE ID_USER = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("sssssd", $name, $bio, $phone, $email, $pass, $id_user);
        }
        
        $stmt->execute();
        /* $resultado = $stmt->get_result();

        $fila = $resultado->fetch_assoc(); */
        $stmt->close();
        $conexion->close();

        header("refresh:2;url=/index.php");
    }else{
        header("refresh:2;url=/index.php");
    }

?>