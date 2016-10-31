<!DOCTYPE html>
<html>  
    <body>

        <?php
        require_once "dbConnect.php";
        include 'loginpage.php';
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

        $dbquery = sprintf("select username, password from user where email='%s' and password='%s'", $username, $password);
        $dbresult = mysql_query($dbquery, $dbhandle);

        if ($dbresult) {
            //cookie that stores the username who logged in
            setcookie('username', $username);
            //set the session variable to true
            $_SESSION['LoggedIn'] = TRUE;
            echo "<a href = 'index.php'> <br> Go!</a>";
        } else {
            //set the session varibale to false
            $_SESSION['LoggedIn'] = FALSE;
            echo '<br>Incorrect username or password. 
           Please <a href="loginpage.php"> try again. </a>';
        }
        ?>    
    </body>

</html>





