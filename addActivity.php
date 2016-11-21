<!DOCTYPE hmtl>
<?php
include "header.php";
require_once "dbConnect.php";
?>

<form action="addConfirmation.php" method="post">
    <!-- Allow users to enter info about new Activity -->
    <!-- all data should be entered into database -->
   <!--update form and add validation  and add inserts -->

    CREATE NEW ACTIVITY!<br><br>

    <?php
    $dbquery = 'select statename from location';
    $dbresult = mysql_query($dbquery, $dbhandle);
    echo 'Location: <select name = "locations">';
    echo '<option value="None" SELECTED> None</option>';
    while ($dbrow = mysql_fetch_assoc($dbresult)) {
        echo sprintf("<option value=%s>%s</option>", $dbrow['statecode'], $dbrow['statename']);
    }
    echo '</select><br>';

    $dbquery = 'select activitytypeid,activitytypename from activitytype';
    $dbresult = mysql_query($dbquery, $dbhandle);
    echo 'Activity Type: <select name = "activityType">';
    echo '<option value="Add" SELECTED>Add New</option>';
    while ($dbrow = mysql_fetch_assoc($dbresult)) {
        echo sprintf("<option value=%f>%s</option>", $dbrow['activitytypeid'], $dbrow['activitytypename']);
    }
    echo '</select>   Or new Activity: <input type = "TEXT" name = "newActivity" id = "newActivity" size = "30"<br><br>';
    ?>
    Company info: <br>
    Name: <input type ="TEXT" name="coName" id="coName" size="30"><br>
    Address: <input type ="TEXT" name="coAddress" id="coAddress" size="30"><br>
    Phone Number: <input type ="TEXT" name="coPhone" id="coPhone" size="30"><br>
    Email: <input type ="TEXT" name="coEmail" id="coEmail" size="30"><br><br>

    <input type="submit" name="create_button" value="Add Activity"/>
</form>
</body>
</html>

<?php include "footer.php"; ?>

