<?php
include ('dbConn.php');
//require_once 'User.php';

session_start();

$con = new DB();


//$db = new User_Table();
    if(isset($_POST['uname']) && isset($_POST['pswd'])) {
        //die('here');
       // echo "$uname";
       unset($_SESSION['errors']);
       $uname = $_POST['uname'];
       $pswd = $_POST['pswd'];
      

       $sql = "SELECT username FROM  admin WHERE username ='$uname' and password = '$pswd'";

     

              

      
       $row = $con->query_login_admin($sql);
      

    

  

      

        if($row > 0) {
          //  die('here');



            if(!empty($_POST["remember"])) {
                setcookie ("username",$_POST["uname"],time()+ 3600);
                setcookie ("password",$_POST["pswd"],time()+ 3600);
                 echo "Cookies Set Successfuly";

            } else {

                setcookie("username","");
                setcookie("password","");

            } 
                
                
            $_SESSION['username'] = $_POST['uname'];
            $_SESSION['password'] = $_POST['pswd'];
            
            
              $_SESSION['login'] = true;
              $_SESSION['success'] = array("you are successfully loged in ");
              

                header('Location:index.php');
            }
        
            
    }
    else{
        $_SESSION['errors'] = array("Username or password was incorrect.");
        header('Location:welcomeUser.php');
    }
    
?>