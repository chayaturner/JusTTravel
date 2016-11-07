<!DOCTYPE hmtl>
<!-- <?php include header.php ?> -->
<html>
    <header>
        <meta charset="UTF-8">
        <title>Create Activity Page</title>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
    </header>
    <body>
        <form action="confirmationPage.php" method="post">
            <!-- Allow users to enter info about new Activity -->
            <!-- all data should be entered into database -->
            
            Create new Activity!<br><br>
           
            Location: <select name="locations">
                        <option value="None" SELECTED> None
                        <!-- input values from database -->
            </select> <br><br>
            Activity Type: <select name="activities">
                        <option value="None" SELECTED> None
                        <!--input values from database-->
            </select> <br><br>
            
            Company info: <br>
            Name: <input type ="TEXT" name="coName" id="coName" size="30"><br>
            Address: <input type ="TEXT" name="coAddress" id="coAddress" size="30"><br>
            Phone Number: <input type ="TEXT" name="coPhone" id="coPhone" size="30"><br>
            Email: <input type ="TEXT" name="coEmail" id="coEmail" size="30"><br><br>
            
            <input type="submit" name="create_button" value="Add Activity"/>
        </form>
    </body>
</html>

<!-- <?php include footer.php ?> -->


