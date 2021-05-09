<?php 
  include 'dbConn.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Real Time Chat App</title>
<link rel="stylesheet" href="Style/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
<script>

.dot {
    height: 25px;
    width: 25px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
  }
</script>

 </head> 

 <body>



 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="#">Online MCQ Site</a>
        </div>

      <div id="navbar" class="navbar-collapse collapse">
                  
        
     
          <ul class="nav navbar-nav navbar-right ">

             <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: red;"><?php echo "" . $_SESSION['username'];?> 
                       <span class="caret"></span> 
                    </a>
                          <ul class="dropdown-menu">
                               <li><a href="home.php">Home</a> </li>
                               <li><a href="#">Users List </a> </li>
                               <li><a href="home.php"><?php

                                       session_start();
                                       session_destroy();

                                        setcookie('username' , $username, time()-1);
                                        setcookie('password' , $password, time()-1);
                                         //echo "you are successfully logout. click here to <a href='login.php'>login</a>";
                                        ?>Logout
                                    </a> 
                               </li>
     
                              
                          </ul>


                          
               </li>
            
         </ul>

         <ul class="nav navbar-nav navbar-right">
                       
                       <li style="margin-right:70px;"><a href="index.php">Dashboard</a></li>
          
        </ul>


         </div>
      </div>
    </nav>





<div class="wrapper">
    <section class="users">
       <header>
            <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="50px;" height="50px;">
                <div class="details">
                    <span>Gazala</span>
                    <p>Active now</p>
                </div>
           
            </div>
            <a href="#" class="logout">Logout</a>
        </header> 
        <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
        </div> 
        
        <div class="users-list">
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color: #5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>

            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color:#5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color: #5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color:#5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style="color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color: #5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color:#5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
       
            <a href="#">
                <div class="content">
                <img src="img/m2.jpeg" class="img-circle" alt="Cinque Terre" width="40px;" height="40px;">
                    <div class="details">
                        <span>Gazala </span>
                        <p>this is test msg</p>

                    </div>
                </div>
                <div class="status-dot" style = "position:relative; left:320px; top:2px; transform: translateY(-200%);color: #5f5a5a28;"><i class="fas fa-circle"></i></div>
                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
            </a>
       
            
       
        </div>
        
    
    </section>
    
<div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </body>
</html>