<?php session_start(); ?>

<HTML>
    <HEAD>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
    </HEAD>
    <BODY>

        <DIV class="image">
            <IMG src="images/beach1.jpg" alt="Beach" width="100%" height="310">
            <IMG id ="logo" src="images/logogreen.jpg" alt="JusTTravel" width="150" height="150">
            <?php
            if ((isset($_SESSION['LoggedIn'])) && ($_SESSION['LoggedIn'] == TRUE)) {
                echo "<a href = 'myActivities.php' id='hello'>Hello " . $_COOKIE['username'] . "</a>";
                echo "<a href ='logout.php' id='logout'>Log Out</a>";
            } else {
                echo "<a href = 'login.php' id ='hello'> <br> Log In</a>";
                //echo "<meta http-equiv='refresh' content='5;login.php' />";
            }
            ?>
            <P id="slogan"> "Plan less. Travel more." </P>
                <?php include "menu.php"; ?>
        </div>
        <HR />

