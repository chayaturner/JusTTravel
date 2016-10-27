<?php session_start(); ?>

<!DOCTYPE html>
<html>  
    <body>
        
  <?php       
    include 'loginpage.php';

        $users = array();
        $users[0] = array('username' =>'Chaya', 'password'=>'Turner');
        $users[1] = array('username' =>'Elise', 'password'=>'Rozenberg');
  
        $loginArray = array('username'=> $_POST['username'], 'password'=> $_POST['password']);
        
        //check if user entered vaild login info
    if(in_array($loginArray, $users)){
        //cookie that stores the username who logged in
        setcookie('username', $loginArray['username'], time()+4800);
        //set the session variable to true
        $_SESSION['LoggedIn']= true;
        echo "<a href='index.php'> <br> Go! </a>";
    } else {
        //set the session varibale to false
        $_SESSION['LoggedIn'] = false;
      echo '<br>Incorrect username or password. 
           Please <a href="loginpage.php"> try again. </a>';
    }
    ?>    
    </body>

</html>
    
        
