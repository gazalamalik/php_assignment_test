<?php

include ('dbConn.php');

$obj= new DB();

 //echo $_POST['email'];


 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd'])) {
  //die('here');
 
   $result = $obj-> Ragister($_POST['name'],$_POST['email'],$_POST['pwd']);
      if($result){

       // print_r("hum");die;
  
          header('Location:home.php');
      // echo("hey");die;
      }else{
            echo "error";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>PHP PostgreSQL Registration & Login Example </title>
 <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--nav bar code-->

<style>
           #nav {
                font-size:20px;
           }
      </style>


      
  <div class="container" >
      
  <br><br><br>
    <center><h1><b> Please fill all details!</b></h1></center>
   
        <ul class="nav nav-tabs" id="nav">
            <nav class="navbar nav-default navbar-inverse navbar-fixed-top "  >
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" date-toggle="collapse">
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
                                   <li><a href="login.php">Login</a> </li>
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

 background-image: url("img/q3.jpg");
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;

}

</style>
<br><br>
<div class="container" >
     <div class="row">

            <div class="col-md-6">
           
                <div class="customDiv">This is the ragister page and you can ragister in here </div>
            </div>
            
            <div class="col-md-6" >
                <div class="customDiv">
                   
                    <div class="d-flex justify-content-center text-primary p-3">
                        <center> <h2 class="logo">Ragister Here </h2></center>
                    </div>      
                    <br>

                        <form  method="POST"  style="border:grey; border-width:5px; border-style:solid;">
 
                             <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" class="form-control"  placeholder="Enter name" name="name"  required />
                             </div>
   
                             <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" />
                            </div>
   
   
                             <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="pwd" />
                             </div>

   
    
                             <input type="submit"  name="submit" class="btn btn-primary" value="Submit">
   
                         </form>
                   <br>
                   <form action="login.php">
                          <input type="submit"   name="submit" class="btn btn-primary" value="Cancel">
                   </form>
                 </div>
              </div>
        </div>
  </div>

</body>
</html>

<?php  
include 'Navigation/footer.php';

?>


