<?php
    include("./func/php/funciones.php");
    $fila = BuscarPorId($_SESSION["USER"][0]);
?>
<div>
    <h1>Personal Info</h1>
    <p>Basic info, like your name and photo</p>
    <div>
        <div>
            <div>
            <h2>Profile</h2>
            <p>Some info may be visible to other people</p>
            </div>
            <form action="index.php" method="post">
                <input type="submit" name="edit" value="Edit">
            </form>
        </div>
        <div>
           <span>PHOTO</span> <img src='<?php echo $fila['FOTO'] ? $fila['FOTO'] : "https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" ?>' width="50px" >
        </div>
        <div>
            <span>NAME</span> <span><?php echo $fila['NAME'] ?></span>
        </div>
        <div>
            <span>BIO</span> <span><?php echo $fila['BIO'] ?></span>
        </div>
        <div>
            <span>PHONE</span> <span><?php echo $fila['PHONE'] ?></span>
        </div>
        <div>
            <span>EMAIL</span> <span><?php echo $fila['EMAIL'] ?></span>
        </div>
        <div>
            <span>PASSWORD</span> <span>*******************</span>
        </div>
    </div>
    <div>
        <span>Created by username</span>
        <span>devChallenges.io</span>
    </div>
</div>