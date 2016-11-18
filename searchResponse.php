<?php

include "header.php";
require_once "dbConnect.php";

if ($_POST['search'] == 'Search') {
    if ($_POST['location'] == 'None') {
        if ($_POST['activityType'] == 'None') {
            $dbquery = 'select activityname, description from activity inner join activitytype on activitytype.ActivityTypeID = activity.ActivityTypeID inner join location on location.LocationID = activity.LocationID';
        } else {
            $dbquery = 'select activityname, description from activity inner join activitytype on activitytype.ActivityTypeID = activity.ActivityTypeID inner join location on location.LocationID = activity.LocationID where activitytype.ActivityTypeID = ' . $_POST['activityType'];
        }
    } else {
        if ($_POST['activityType'] == 'None') {
            $dbquery = 'select activityname, description from activity inner join activitytype on activitytype.ActivityTypeID = activity.ActivityTypeID inner join location on location.LocationID = activity.LocationID where location.locationid = ' . $_POST['location'];
        } else {
            $dbquery = 'select activityname, description from activity inner join activitytype on activitytype.ActivityTypeID = activity.ActivityTypeID inner join location on location.LocationID = activity.LocationID where location.locationid = ' . $_POST['location'] . ' and activitytype.ActivityTypeID = ' . $_POST['activityType'];
        }
    }
} else {
    $dbquery = 'select activityname, description from activity inner join activitytype on activitytype.ActivityTypeID = activity.ActivityTypeID inner join location on location.LocationID = activity.LocationID';
}

$dbresult = mysql_query($dbquery, $dbhandle);

while ($dbrow = mysql_fetch_assoc($dbresult)) {
    echo '<div class="list">';
    echo '<a href=#>' . $dbrow['activityname'] .'</a><br>' . $dbrow['description'] . '<br>';
    echo '</div>';
}

include "footer.php";
?>

