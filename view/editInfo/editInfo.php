<?php
    include("./func/php/funciones.php");
    $fila = BuscarPorId($_SESSION["USER"][0]);
?>

<div class="contendor-edit-principal">
    <form action="index.php" method="post">
        <input type="submit" name="edit" value="< Back"
        class="back-botton">
    </form>
    <div class="contendor-edit-2">
        <div class="titulo-edit">
            <h1>Change Info</h1>
            <p>Changes will be reflected to every services</p>
        </div>
        <form action="../../controller/controllerEditInfo.php" method="post" enctype="multipart/form-data">
    
            <div class="foto-edit">
                <img src="<?php echo $fila['FOTO'] ? $fila['FOTO'] : "https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" ?>" width="50px">
                
                <input type="file" name="foto" id="foto" value="CHANGE PHOTO">
            </div>
            <div class="data-edit">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Entre your name..."  value="<?php echo $fila['NAME'] ?>" >
            </div>
            <div class="data-edit">
                <label for="bio">Bio</label>
                <textarea name="bio" cols="30" rows="10" placeholder="BIO" required><?php echo $fila['BIO'] ?></textarea>
            </div>
            <div class="data-edit">
                <label for="phone">Phone</label>
                <input type="number" name="phone" placeholder="Entre your phone..." value="<?php echo $fila['PHONE'] ?>">
            </div>
            <div class="data-edit">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Entre your email..." required value="<?php echo $fila['EMAIL'] ?>">
            </div>
            <div class="data-edit">
                <label for="pass">Password</label>
                <input type="password" name="pass" placeholder="Entre your password">
            </div>
            <div class="boton-edit-div">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
<div class="detalle-edit">
    <span>Created by username</span>
    <span>devChallenges.io</span>
</div>