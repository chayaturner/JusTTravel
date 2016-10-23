<!DOCTYPE html>
<html>  
    <body>
        
  <?php       
    include 'loginpage.php';

        $users = array();
        $users[0] = array('username' =>'Chaya', 'password'=>'Turner');
        $users[1] = array('username' =>'Elise', 'password'=>'Rozenberg');
  
        $loginArray = array('username'=> $_POST['username'], 'password'=> $_POST['password']);
        
    if(in_array($loginArray, $users)){
      echo "<a href='index.php'> <br> Go! </a>";
    } else {
      echo '<br>Incorrect username or password. 
           Please <a href="loginpage.php"> try again. </a>';
    }
    ?>    
    </body>

</html>
    
        
