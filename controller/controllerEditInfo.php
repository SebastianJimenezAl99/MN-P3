<?php 
    if (!empty($_POST)) {
        include('../config/conexion.php');
        session_start();
        $id_user = $_SESSION['USER'][0];
        $name = $_POST['name'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];
        $archivo_a_eliminar = $_SESSION['USER'][2];
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $foto_temporal = $_FILES['foto']['tmp_name'];
            $extesion = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $ruta_foto = '../public/' . $id_user . '_Perfil' . '.' . $extesion;
            move_uploaded_file($foto_temporal, $ruta_foto);
        }

        $conexion = conectarBaseDeDatos();
        
        if(empty($_POST['pass'])){
            if(empty($ruta_foto)){
                $sql = "UPDATE users SET NAME = ? , BIO = ?, PHONE = ?, EMAIL = ? WHERE ID_USER = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ssssd", $name, $bio, $phone, $email, $id_user);
            }else{
                $sql = "UPDATE users SET NAME = ?, FOTO = ? , BIO = ?, PHONE = ?, EMAIL = ? WHERE ID_USER = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("sssssd", $name, $ruta_foto, $bio, $phone, $email, $id_user);
            }
            
        }else{
            if(empty($ruta_foto)){
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $sql = "UPDATE users SET NAME = ? , BIO = ?, PHONE = ?, EMAIL = ?, PASSWORD = ? WHERE ID_USER = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("sssssd", $name, $bio, $phone, $email, $pass, $id_user);
            }else{
                $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $sql = "UPDATE users SET NAME = ? , FOTO = ? , BIO = ?, PHONE = ?, EMAIL = ?, PASSWORD = ? WHERE ID_USER = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ssssssd", $name, $ruta_foto, $bio, $phone, $email, $pass, $id_user);
            }
            
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

