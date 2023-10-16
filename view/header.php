<div class="header">
    <div class="div-logo-header">
        <img src="../img/devchallenges.svg" alt="Logo">
    </div>
    <div class="div-ajustes-header">
        <img src="<?php echo $_SESSION['USER'][2]; ?>" alt="foto" width="30px">
        <span><?php echo $_SESSION['USER'][1]; ?></span>
        <form action="index.php" method="post">
            <input type="submit" name="close" value="Cerrar sección">
        </form>
    </div>
</div>