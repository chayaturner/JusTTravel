<!DOCTYPE html>
<?php include "header.php"; ?>
        Would you like to create a new activity, or search existing activities?<br>
       <!-- Create new activity button-->
       <form action="createActivity.php" method="post">
            <input type="submit" name="create_button" value="Create">
       </form>
       <form action="activitySearch.php" method="post">
       <!-- Search existing activities button -->
            <input type="submit" name="search_button" value="Search"/>
       </form>
       
         
<?php include "footer.php"; ?>


     
