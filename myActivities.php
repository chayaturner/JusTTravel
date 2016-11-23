<?php

include "header.php";
require_once 'dbConnect.php';



if ((isset($_SESSION['LoggedIn'])) && ($_SESSION['LoggedIn'] == TRUE)) {

    if (isset($_SESSION['Add.Message'])) {
        echo '<h5 class="error">' . $_SESSION['Add.Message'] . '</h5>';
        unset($_SESSION['Add.Message']);
    }
    $email = $_COOKIE['email'];

    $dbquery = sprintf('select userid, firstname, lastname,email from user '
            . 'inner join useractivity on user.userid = activity.activityid'
            . 'where email = "%s"', $email);
    $dbresult = mysql_query($dbquery, $dbhandle);
    if ($dbresult) {
        while ($dbrow = mysql_fetch_assoc($dbresult)) {
            echo '<div class="list">';
            echo '<a href=#>' . $dbrow['userid'];
            echo '</a><br>' . $dbrow['firstname'] . '<br>' . $dbrow['lastname'] . '<br>';
            echo '</div>';
        }
    } else {
        echo 'Error ID: ' . mysql_errno() . 'occured while processing your request. Please try again. If the error persists, <a href ="contactus.php">Contact Us!</a>';
    }
} else {
    echo 'You must be logged in to view your activities!!';
}

include "footer.php";


/*
  $dbquery = sprintf("select distinct activity.activityid, activityname, rating, description,location.locationid from activity"
  . "inner join useractivity on useractivity.ActivityID = activity.ActivityID"
  . "inner join user on user.userid = useractivity.userid"
  . "inner join location on location.LocationID = activity.LocationID"
  . "where email ='%s'", $email);
 * 
 * 
 * if ($dbresult) {
  while ($dbrow = mysql_fetch_assoc($dbresult)) {
  $bNum = $dbrow['activityid'];
  echo '<div class="list">';
  echo '<form method="get" action="removeUserActivity.php" id="addUserActivity">';
  echo '<input type="hidden" name="activityid" value="' . $dbrow['activityid'] . '">';
  echo '<input type="submit" class="addsubbutton" value="-" id="button"/>';
  echo '</form>';
  echo '<a href=#>' . $dbrow['activityname'];
  echo '</a><br>' . $dbrow['description'] . '<br>' . $dbrow['locationid'] . '<br>';
  echo '</div>';
  }
 */
?>

