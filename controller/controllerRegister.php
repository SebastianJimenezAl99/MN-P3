<?php 
 
 session_start();
 if (!empty($_POST)) {
     include('../config/conexion.php');
     
     try {
         $conexion = conectarBaseDeDatos();
         $email = $_POST['user'];
         $password = $_POST['pass'];
 
         $sql = "SELECT * FROM users WHERE EMAIL = ?";
         $stmt = $conexion->prepare($sql);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $resultado = $stmt->get_result();
 
         if ($resultado->num_rows > 0) {
            echo '
                 <script>
                     alert("El usuario ya se encuentra registrado");
                 </script>
                 ';
                 //header("refresh:2;url=/index.php?register=true");
         } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (ID_USER, NAME, FOTO, BIO, PHONE, EMAIL, PASSWORD) VALUES (NULL, NULL, NULL, NULL, NULL, ?, ?);";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute(); 

            $sql = "SELECT * FROM users WHERE EMAIL = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fila = $resultado->fetch_assoc();
            $_SESSION["USER"] = [$fila['ID_USER'],$fila['NAME']];
            header("refresh:2;url=/index.php?register=true");
         }
 
         // Cerrar la conexión
         $stmt->close();
         $conexion->close();
     } catch (Exception $e) {
         // Manejar la excepción aquí, por ejemplo, mostrar un mensaje de error o registrarla
         echo "Error en la base de datos: " . $e->getMessage();
     }
 } else {
     header("refresh:2;url=/");
 } 
?>