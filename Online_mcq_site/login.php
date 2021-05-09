<?php 


//include_once 'components/header.php';
session_start();
//include('User.php');

//$object = new User_Table();






?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login here </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body >
<!-- this is navigation bar code-->


<style>
           #nav {
                font-size:20px;
           }
      </style>


      
  <div class="container" >
      
  <br><br><br>
    <center><h1 style=color:red;><b>  Log in here !</b></h1></center>
   
        <ul class="nav nav-tabs" id="nav">
            <nav class="navbar nav-default navbar-inverse navbar-fixed-top "  >
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" date-toggle="collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div>

                <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                      <li>
                       <img src="img/n4.jpg" class="img-circle" alt="Cinque Terre" width="70px;" height="60px;" >

                       </li>
                          <li class="active"><a href="" style="color: red;">Home</a></li>
                          <li><a href="" style="color: red;">Contact</a> </li>
                          <li><a href="postsDisplay.php" style="color: red;"></a> </li>
                          <li><a href="TableData.php" style="color: red;"></a> </li>
                         
                      </ul>
                            
                    

                       <ul class="nav navbar-nav navbar-right ">
                               <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: red;">select
                               <span class="caret"></span> 
                               </a>
                                   <ul class="dropdown-menu">
                                  <!-- <li><a href="logout.php">Logout</a> </li>  -->
                                  <li><a href="home.php">Home</a> </li>
                                                          
                                   <li><a href="ragister.php">Ragister  </a> </li>
                                   <li><a href="home.php">Cancel</a> </li>
                                   
                                   </ul>
                                </li>
                       </ul>
                

                    </div>  
            </nav>
      </ul>

</div>


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
 
  background-image: url("img/que1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 background-color: brown;
 overflow-x: hidden;
 
}




.user{
    background-color: pink;
    background-image: url("img/b3.jpeg");
}


.logo{
    color:blue;
}




.form form .field i{
    position: absolute;
    right: 15px;
    color:red;
    top: 70px;
    transform: translateY(-250%);
    cursor: pointer;
}
</style>
<!--form code-->



<div class="container" >
     <div class="row">

            <div class="col-md-6">
            <br>
                <div class="customDiv">This is the login page and you can log in here </div>
            </div>
            
            <div class="col-md-6" >
                <div class="customDiv">
                   
                    <div class="d-flex justify-content-center text-primary p-3">
                        <center> <h2 class="logo">Login User</h2></center>
                    </div>      
                    <br>


                    <form action="validate.php" method="POST" style="border:grey; border-width:5px; border-style:solid;">
                  
                   
                    
                         <!-- for wrong id pw -->
                             <?php if (isset($_SESSION['errors'])): ?>
                                <div class="form-errors m-auto">
                                  <?php foreach($_SESSION['errors'] as $error): ?>
                                       <p class="text-danger ml-auto"><?php echo $error ?></p>
                                  <?php endforeach; ?>
                                </div>
                             <?php endif; ?>

    
<!--  -->
             <div class="form-group">
                 <label for="uname"><h3 style=color:grey;>Username:</h3></label>
                 <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" 
                  value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>
        

            </div><br>

            <div class="form-group">
               <label for="pwd"><h3 style=color:grey;>Password:</h3></label>
               <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" 
               value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
               <i class="fas fa-eye"></i>
             </div>

             




             <div class="form-group form-check">
                 <label class="form-check-label"> </label>
                 <div class="invalid-feedback"><h3 style=color:grey;></b>please check this box to submit</b><h3></div>
                 <input class="form-check-input" type="checkbox" name="remember" required> <small><b>Remember me</b></small>
        
             </div>
              
   

   

             </p> <button type="submit" name="submit" class="btn btn-primary">Login</button>
              <button><a href="home.php" >Cancel</a></button>
    
            <button><a href="ragister.php" >Ragister</a></button>
            <div class="d-flex justify-content-center mt-2 mb-2">
               <center><a class="" href="#">forgot passowrd?</a></center>
     
               </div>
     </form>
    
               

        
  
 

              
              
              
              
              
              
              
                </div>
            </div>
           
        </div>
</div>






</body>
<html>
<br><br>

<?php
include 'Navigation/footer.php';

?>
	 


