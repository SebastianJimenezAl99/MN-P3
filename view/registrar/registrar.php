<?php 
    session_start();
    if(isset($_SESSION['USER'])){
        header("refresh:2;url=/index.php");
    }

    echo "Registrar";
?>




