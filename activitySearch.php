<!DOCTYPE hmtl>
<?php include 'header.php'; ?>
<html>
    <header>
        <meta charset="UTF-8">
        <title>Activity Search Page</title>
        <LINK rel="stylesheet" href="styles.css" type="text/css" />
    </header>
    <body>
       <form action="searchResponse.php" method="post">
            <!-- Search existing activities button -->
            
            <!-- Fetching from a database: http://stackoverflow.com/questions/10009464/fetching-data-from-mysql-database-to-html-dropdown-list-->
            Search existing activities by location, activity, or both!<br><br>
           
            Location: <select name="location">
                        <option value="None" SELECTED> None
                        <!-- input values from database -->
                    </select> 
            Activity: <select name="activity">
                        <option value="None" SELECTED> None
                        <!--input values from database-->
                    </select>
                    <input type="submit" name="search_button" value="Search"/>
                    
                    <br><br>
                    Or <input type="submit" name="search_all_button" value="View All Activities"/>
        </form>
        
       <!-- search all activities -->
       
        
    </body>
</html>

<?php include 'footer.php'; ?>
