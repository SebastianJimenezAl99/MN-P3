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
            echo "CARGANDO... ";
            $fila = $resultado->fetch_assoc();

            if (password_verify($password,$fila['PASSWORD'])) {
                
                $_SESSION["USER"] = [$fila['ID_USER'],$fila['NAME']];
                header("refresh:2;url=/index.php");
            }else{
                echo '
                <script>
                    alert("Contraseña incorrecta");
                </script>
                ';
                header("refresh:2;url=/index.php");
            }
        } else {
            echo '
                <script>
                    alert("El usuario no se encuentra registrado");
                </script>
                ';
                header("refresh:2;url=/index.php");
        }

        // Cerrar la conexión
        $stmt->close();
        $conexion->close();
    } catch (Exception $e) {
        // Manejar la excepción aquí, por ejemplo, mostrar un mensaje de error o registrarla
        echo "Error en la base de datos: " . $e->getMessage();
    }
} else {
    header("refresh:2;url=/index.php");
} 

?>
