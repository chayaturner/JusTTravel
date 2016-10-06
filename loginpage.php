<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
    </head>
    <body>
        <img src="images/logogreen.jpg" alt="JusTTravel" height="100" width="100"><br>
            <form action="index.php" method="post">
                Sign up to our website! <br><br>
                Name: <input type="text" name="name"/><br>
                Email: <input type="text" name="email"/><br>
                Username: <input type ="text" name="username"/><br>
                Password: <input type="password" name="password" size="10"/><br>
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
                    <input type="RADIO" name="travelAmount" value="Average"> When I can
                    <input type="RADIO" name="travelAmount" value="Not Often"> I need to get out more often
                    <br><br>
                    <input type="submit" name="signup_button" value="Sign Up"/>
                    <br><br>
                    
                     Already have an account? <br>
                     Username: <input type="text" name="username"/><br>
                    Password: <input type="password" name="password" /><br>
                    <input type="submit" name="login_button" value="Login">
            </form>  
    </body>
</html>
