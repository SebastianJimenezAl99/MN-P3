<?php
    include("./func/php/funciones.php");
    $fila = BuscarPorId($_SESSION["USER"][0]);
?>

<div>
    <form action="index.php" method="post">
        <input type="submit" name="edit" value="Volver">
    </form>
    <div>
        <h1>Change Info</h1>
        <p>Changes will be reflected to every services</p>
    </div>
    <form action="../../controller/controllerEditInfo.php" method="post" enctype="multipart/form-data">
   
        <div>
            <img src="<?php echo $fila['FOTO'] ? $fila['FOTO'] : "https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Free-Download.png" ?>" width="50px">
            <span>CHANGE PHOTO</span>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" required  value="<?php echo $fila['NAME'] ?>" >
        </div>
        <div>
            <label for="bio">Bio</label>
            <textarea name="bio" cols="30" rows="10" placeholder="BIO" required><?php echo $fila['BIO'] ?></textarea>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="number" name="phone" placeholder="Phone" required value="<?php echo $fila['PHONE'] ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required value="<?php echo $fila['EMAIL'] ?>">
        </div>
        <div>
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="*************">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</div>
<div>
    <span>Created by username</span>
    <span>devChallenges.io</span>
</div>