<!DOCTYPE html>

<?php include "header.php"; ?>

<html>  
    <body>

        <?php
        require_once "dbConnect.php";
        session_start();

        /*
          $users = array();
          $users[0] = array('username' => 'Chaya', 'password' => 'Turner');
          $users[1] = array('username' => 'elise', 'password' => 'elise');

          $loginArray = array('username' => $_POST['username'], 'password' => $_POST['password']);


          //check if user entered valid login info
          if (in_array($loginArray, $users)) {
          //cookie that stores the username who logged in
          setcookie('username', $loginArray['username']);
          //set the session variable to true
          $_SESSION['LoggedIn'] = TRUE;
          echo "<a href='index.php'> <br> Go! </a>";
          } else {
          //set the session varibale to false
          $_SESSION['LoggedIn'] = FALSE;
          echo '<br>Incorrect username or password.
          Please <a href="loginpage.php"> try again. </a>';
          }
         */

        $username = $_POST['username'];
        $password = $_POST['password'];

        $dbquery = sprintf("select username from user where username='%s' and password='%s'", $username, $password);
        $dbresult = mysql_query($dbquery, $dbhandle);
        $num_rows = mysql_num_rows($dbresult);

        if ($num_rows == 1) {
            //cookie that stores the username who logged in
            setcookie('username', $username);
            //set the session variable to true
            $_SESSION['LoggedIn'] = TRUE;
            header('Location: myActivities.php');
        } else {
            //set the session varibale to false
            $_SESSION['LoggedIn'] = FALSE;
            $_SESSION["Login.Error"] = 'Invalid credentials';
            header('Location: login.php');
        }
        ?>    
    </body>

</html>






