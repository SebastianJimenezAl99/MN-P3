<?php 
    if(isset($_SESSION['USER'])){
        header("refresh:2;url=/index.php");
    }
?>
<div class="contenedores-secundarios">
    <div>
        <img src="../../img/devchallenges.svg" alt="Logo">
    </div>
    <h2>Join thousands of learners from around the world </h2>
    <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
    <form action="controller/controllerRegister.php" method="post">
        <span>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" name="user" required>
        </span>
        <span>
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="pass" placeholder="Password" required>
        </span>
        
        
        <input class="boton-formulario" type="submit" value="Start coding now ">
    </form>
    <div class="contenedor-tercero">
        <p>or continue with these social profile</p>
        <div class="contenedor-logos">
            <img src="../../img/Google.svg" alt="Google">
            <img src="../../img/Facebook.svg" alt="Facebook">
            <img src="../../img/Twitter.svg" alt="twiter">
            <img src="../../img/Gihub.svg" alt="Github">
        </div>
        <p>Adready a member? <a href="/">Login</a></p>
    </div>
    
</div>
<div class="contenedo-detalle">
    <span>Created by <strong>username</strong></span>
    <span>devChallenges.io</span>
</div>



