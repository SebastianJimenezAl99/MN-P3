<?php 
    if(isset($_SESSION['USER'])){
        header("refresh:2;url=/index.php");
    }
?>
<div>
    <div>
        <img src="../../img/devchallenges.svg" alt="Logo">
    </div>
    <h2>Join thousands of learners from around the world </h2>
    <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
    <form action="controller/controllerRegister.php" method="post">
        <input type="email" placeholder="Email" name="user" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <input type="submit" value="Start coding now ">
    </form>
    <p>or continue with these social profile</p>
    <div>
        <img src="../../img/Google.svg" alt="Google">
        <img src="../../img/Facebook.svg" alt="Facebook">
        <img src="../../img/Twitter.svg" alt="twiter">
        <img src="../../img/Gihub.svg" alt="Github">
    </div>
    <p>Adready a member? <a href="/">Login</a></p>
</div>
<div>
    <span>Created by username</span>
    <span>devChallenges.io</span>
</div>



