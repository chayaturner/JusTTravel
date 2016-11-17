
<?php include "header.php"; ?>

<div class="center">
    <img src="images/logogreen.jpg" alt="JusTTravel" height="100" width="100"><br>
    <form action="loginResponse.php" method="post">
        <p>Login</p>
        Username: <input type="text" name="username"/><br>
        Password: <input type="password" name="password" /><br><br>
        <input type="submit" name="login_button" value="Login"><br>
    </form> 

    <?php
    if (isset($_SESSION['Login.Error'])) {
        echo "<p>" . $_SESSION['Login.Error'] . "</p>";
        unset($_SESSION['Login.Error']);
    }
    ?>

    <a href="signUp.php">Sign Up to create account!</a>
</div>

<HR />
</BODY>
</HTML>

