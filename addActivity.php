<?php
include "header.php";
require_once "dbConnect.php";
?>


<script>
  $(function () {
        $("#addActivity").validate({
            rules: {
                email: "required",
                street: "required",
                coName: {
                    required: true,
                    minlength: 3
                },
                description: {
                    required: true,
                    minlength: 4
                },
                contact: {
                    required: true,
                    minlength: 4,
                    maxlength: 15
                },
                phone: {
                    required: true,
                    length: 10
                },
                zip: {
                    required: true,
                    length: 5
                }
            }
        });
    });
</script>


<p>CREATE NEW ACTIVITY!</p>

<form action="addConfirmation.php" method="post" id="addActivity">
    <!-- all data should be entered into database -->
    <!--update form and add validation-->

    <?php
    $dbquery = 'select activitytypeid,activitytypename from activitytype';
    $dbresult = mysql_query($dbquery, $dbhandle);
    echo ' <label>Activity Type:</label> <select name = "activityType" id="activityType">';
    //echo '<option value="Add" SELECTED>Add New</option>';
    while ($dbrow = mysql_fetch_assoc($dbresult)) {
        echo sprintf("<option value=%f>%s</option>", $dbrow['activitytypeid'], $dbrow['activitytypename']);
    }
    echo '</select>';
    ?>
    <br>
    <!--<div id="addnew">
        <label>Or add new Activity:</label> 
        <input type = "TEXT" name = "newActivity" id ="newActivity" size = "30"<br><br>
    </div>-->
    <label>Company Name:</label> 
    <input type ="TEXT" name="coName" id="coName" size="30"><br>
    <label>Description:</label> 
    <input type ="TEXT" name="description" id="description"><br>
    <label>Rating:</label> 
    <select name ="rating" id="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>
    <label>Contact Name:</label>   
    <input type ="TEXT" name="contact" id="contact" size="30"><br>
    <label>Phone Number:</label>   
    <input type ="TEXT" name="phone" id="phone" size="30"><br>
    <label>Email:</label>  
    <input type ="email" name="email" id="email" size="30"><br>
    <label>Other Contact Info/Note:</label>   
    <textarea name="other" id="other" form="addConfirmation" rows="2"></textarea><br>
    <label>Street:</label>  
    <input type ="TEXT" name="street" id="street" size="30"><br>
    <label>City:</label>  
    <input type ="TEXT" name="city" id="city" size="30"><br>
    <?php
    $dbquery = 'select statename,locationid  from location';
    $dbresult = mysql_query($dbquery, $dbhandle);
    echo ' <label>Location:</label> <select name = "locations" id="locations">';
    echo '<option value="None" SELECTED> None</option>';
    while ($dbrow = mysql_fetch_assoc($dbresult)) {
        echo sprintf("<option value=%s>%s</option>", $dbrow['locationid'], $dbrow['statename']);
    }
    echo '</select><br>';
    ?>
    <label>Zip:</label>  
    <input type ="TEXT" name="zip" id="zip" size="30"><br><br>
    <input type="submit" id="button" value="Add Activity"/>
</form>

<?php include "footer.php"; ?>

