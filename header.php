<?php session_start(); ?>

<HTML>
    <HEAD>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
    </HEAD>
    <BODY>

        <DIV class="image">
            <IMG src="images/beach1.jpg" alt="Beach" width="100%" height="350">
            <IMG id ="logo" src="images/logogreen.jpg" alt="JusTTravel" width="150" height="150">
            <?php
            if ($_SESSION['LoggedIn']==TRUE) {
                echo "<p id='hello'>Hello ".$_COOKIE['username']."</p>";
            }
            else{
                echo "<meta http-equiv='refresh' content='5;loginpage.php' />";
            }
            ?>
            <P id="slogan"> "Plan less. Travel more." </P>
                <?php include "menu.php"; ?>
        </div>
        <HR />

