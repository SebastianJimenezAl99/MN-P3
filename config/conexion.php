<?php

function conectarBaseDeDatos() {
    
    $host = "localhost"; 
    $usuario = "root";
    $contraseña = ""; 
    $base_de_datos = "PRACTICAFUNVAL"; 

    try {
        
        $conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

        if ($conexion->connect_error) {
            throw new Exception("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;


    } catch (Exception $ex) {
        $mensajeError = $ex->getMessage();
        
        echo '
        <script>
            Swal.fire({
                        icon: "error",
                        title: "Error al conectar a la base de datos",
                        text: "'.$mensajeError.'"
                    })
        </script>
        ';
        //die("Error al conectar a la base de datos: " . $ex->getMessage());
    }
}




?>
