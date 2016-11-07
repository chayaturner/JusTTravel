<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <title>New Activity</title>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
    </header>
    <body> 
        Would you like to create a new activity, or search existing activities?<br>
       <!-- Create new activity button-->
       <form action="createActivity.php" method="post">
            <input type="submit" name="create_button" value="Create">
       </form>
       <form action="activitySearch.php" method="post">
       <!-- Search existing activities button -->
            <input type="submit" name="search_button" value="Search"/>
       </form>
       
              
    </body>
</html>


     
