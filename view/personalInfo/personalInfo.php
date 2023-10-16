<?php
    include("./func/php/funciones.php");
    $fila = BuscarPorId($_SESSION["USER"][0]);
?>
<div class="contenedor-personalInfo">
    <h1>Personal Info</h1>
    <p>Basic info, like your name and photo</p>
    <div class="contenedor-secundario-personalInfo">
        <div class="perfil-contenedor-personalInfo">
            <div>
                <h2>Profile</h2>
                <p>Some info may be visible to other people</p>
            </div>
            <form action="index.php" method="post">
                <input type="submit" name="edit" value="Edit">
            </form>
        </div>
        <div class="perfil-contenedor-personalInfo foto">
           <span>PHOTO</span> <img src='<?php echo $fila['FOTO'] ? $fila['FOTO'] : "https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" ?>' width="50px" >
        </div>
        <div class="info-contenedor-personalInfo">
            <span>NAME</span> <p class="bio"><?php echo $fila['NAME'] ?></p>
        </div>
        <div class="info-contenedor-personalInfo">
            <span>BIO</span> <p class="bio"><?php echo $fila['BIO'] ?></p>
        </div>
        <div class="info-contenedor-personalInfo">
            <span>PHONE</span> <p class="bio"><?php echo $fila['PHONE'] ?></p>
        </div>
        <div class="info-contenedor-personalInfo">
            <span>EMAIL</span> <p class="bio"><?php echo $fila['EMAIL'] ?></p>
        </div>
        <div class="info-contenedor-personalInfo ultimo">
            <span>PASSWORD</span> <p class="bio">*******************</p>
        </div>
    </div>
    <div class="contenedor-detalle-personalInfo">
        <span>Created by username</span>
        <span>devChallenges.io</span>
    </div>
</div>