<?php session_start(); ?>

<HTML>
    <HEAD>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
    </HEAD>
    <BODY>

        <DIV class="image">
            <IMG src="images/beach1.jpg" alt="Beach" width="100%" height="310">
            <IMG id ="logo" src="images/logogreen.jpg" alt="JusTTravel" width="150" height="150">
            <?php
            if ((isset($_SESSION['LoggedIn'])) && ($_SESSION['LoggedIn'] == TRUE)) {
                echo "<a href = 'myActivities.php' id='hello'>Hello " . $_COOKIE['user'] . "</a>";
                echo "<a href ='logout.php' id='logout'>Log Out</a>";
            } else {
                echo "<a href = 'login.php' id ='hello'> <br> Log In</a>";
                //echo "<meta http-equiv='refresh' content='5;login.php' />";
            }
            ?>
            <P id="slogan"> "Plan less. Travel more." </P>
                <?php include "animatedMenu.php";
                //include "menu.php"
                ?>
           

        </div>
        <HR />

