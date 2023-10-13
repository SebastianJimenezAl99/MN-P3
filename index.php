<?php
//$editar = false;
session_start();
if (isset($_POST["close"])) {
    unset($_SESSION["USER"]);
    
    header("Location:index.php" );//. $_SERVER["REQUEST_URI"]
    //exit; // Finaliza el script después de redirigir
}

if (isset($_POST["edit"])) {
    $editar = $_POST["edit"]=="Edit" ? true : false;
    echo "<script>console.log('hola')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="./img/devchallenges.png" type="image/x-icon">
    <title>Authentication App</title>
</head>
<body>
    <?php 
        if (isset($_SESSION["USER"])) {
            include("./view/header.php");
            if (isset($editar)) {
                if ($editar) {
                    include("./view/editInfo/editInfo.php");
                }else{
                    include("./view/personalInfo/personalInfo.php"); 
                }   
            }else{
                include("./view/personalInfo/personalInfo.php"); 
            }
            
        } else {
            include("./view/login/login.php");
        }
    ?>
</body>
</html>
