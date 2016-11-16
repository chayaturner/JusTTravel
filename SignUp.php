<?php include "header.php"; ?>

<div class="center">
    <img src="images/logogreen.jpg" alt="JusTTravel" height="100" width="100"><br>
    <form action="#" method="post">
        <p class="loginheaders">Sign up to our website! </p>
        Name: <input type="text" name="name"/><br>
        Email: <input type="text" name="email"/><br>
        Username: <input type ="text" name="username"/><br>
        Password: <input type="password" name="password" size="10"/><br>
        <!--change options to states database-->
        Location: <select name="locations">
            <option value="United States" SELECTED> United States
            <option value="Canada"> North America
            <option value="Central America"> Central America
            <option value="South America"> South America
            <option value="Europe"> Europe
            <option value="Asia"> Asia
            <option value="Africa"> Africa
            <option value="Australia"> Australia
            <option value="Other"> Other
        </select><br>
        How often do you travel? <br><input type="RADIO" name="travelAmount" value="Often"> Very often
        <input type="RADIO" name="travelAmount" value="Average"> An average amount
        <input type="RADIO" name="travelAmount" value="Not Often"> I need to get out more often
        <br><br>
        <input type="submit" name="signup_button" value="Sign Up"/>
        <br><br>

        <a href= "loginpage.php">Already have an account? </a>

        <!--repsonse page to submit data and login-->
    </form>  
</div>
<HR />
</BODY>
</HTML>

