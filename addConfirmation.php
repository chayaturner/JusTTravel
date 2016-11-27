<!DOCTYPE html>

<?php
include "header.php";
require_once "dbConnect.php";



echo $_POST['activityType'];
echo $_POST['newActivity'];
echo $_POST['coname'];
echo $_POST['description'];
echo $_POST['rating'];
echo $_POST['contact'];
echo intval($_POST['phone']);
echo $_POST['email'];
echo htmlspecialchars($_POST['other']);
echo $_POST['street'];
echo $_POST['city'];
echo $_POST['locations'];
echo intval($_POST['zip']);

$type = $_POST['activityType'];
$new = $_POST['newActivity'];
$name = $_POST['coname'];
$description = $_POST['description'];
$rating = $_POST['rating'];
$contact = $_POST['contact'];
$phone = intval($_POST['phone']);
$email = $_POST['email'];
$other = htmlspecialchars($_POST['other']);
$street = $_POST['street'];
$city = $_POST['city'];
$location = $_POST['locations'];
$zip = intval($_POST['zip']);

  if ($type === 'Add') {
  $dbquery = sprintf("insert into activitytype (ActivityTypeName) values('%s')", $new);
  $dbresult = mysql_query($dbquery, $dbhandle);
  $type = mysql_insert_id();
  }
  $dbquery = sprintf("insert into address (Street, City, LocationID, Zip) values( '%s', '%s', '%f','%f')", $street, $city, $location, $zip);
  $dbresult = mysql_query($dbquery, $dbhandle);
  $addressid = mysql_insert_id();

  $dbquery = sprintf("insert into activitycontact(ContactName, ContactEmail, ContactPhone, OtherInfo, AddressID) values( '%s', '%s', '%f','%s', '%f')", $contact, $email, $phone, $other, $addressid);
  $dbresult = mysql_query($dbquery, $dbhandle);
  $activitycontactid = mysql_insert_id();


  $dbquery = sprintf("insert into activity(ActivityName, Description, ActivityTypeID, Rating, ActivityContactID, LocationID) values( '%s', '%s', '%f','%f', '%f','%f')", $name, $description, $type, $rating, $activitycontactid,$location);
  $dbresult = mysql_query($dbquery, $dbhandle);

include 'footer.php';











