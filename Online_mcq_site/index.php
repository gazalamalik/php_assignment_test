<?php 
include 'dbConn.php';

$cat=new DB();
session_start();

$catogery= $cat->category_show();

  // print_r($catogery);

// user tabel 
$record = $cat->UserList();


if(isset($_GET['id'])){
    $del = $cat->deleteData($_GET['id']);
    if($del){
        header('Location: UserTableData.php');
    }else{
        echo $del;
    }
}








?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/admin.css" />
  
   
    <title>AdminDashboard</title>
    
    <style>
        
        
    </style>

   
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
                               <li><a href="ragister.php">Home</a> </li>
                               <li><a href="ragister.php">profile</a> </li>
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
                       
                       <li style="margin-right:70px;"><a href="#">Dashboard</a></li>
          
        </ul>


         </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="TableData.php/">QuestionTable</a></li>
            <li><a href="UserTableData.php" >Users_data</a></li>
            <li><a data-toggle="tab" href="#menu1">Add Question</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="massege.php">Message</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">More</a></li>
            
          </ul>
        </div>


        <!-- body page -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h1 class="page-header">Dashboard</h1></center>
        <div>
       <h2 class="sub-header">Section title</h2>




              
<div id="menu1" class="tab-pane fade">
      <h3>Profile</h3>
     
   

          <div class="container">
                    
                   <form action="addQuiz.php" method="post" id="addForm">
                       <div class="form-group">
                           <label for="text">Question 1</label>
                           <input type="text" class="form-control" name="qus" placeholder="Enter Question">
                      </div>

                      <div class="form-group">
                           <label for="text">option 1</label>
                           <input type="text"  class="form-control" name= "op1" placeholder="Enter Option-1">
                      </div>

                      <div class="form-group">
                           <label for="text">option 2</label>
                           <input type="text" class="form-control"   name= "op2" placeholder="Enter Option-2">
                      </div>

                      <div class="form-group">
                           <label for="text">option 3</label>
                           <input type="text" class="form-control"    name= "op3" placeholder="Enter Option-3">
                      </div>

                      <div class="form-group">
                           <label for="text">option 4</label>
                           <input type="text"  class="form-control"   name= "op4" placeholder="Enter Option-4">
                      </div>

                      <div class="form-group">
                           <label for="text">Answer</label>
                           <input type="text"  class="form-control"   name= "ans" placeholder="Enter Answer">
                      </div>
                     <div class="form-group">
                      
                     
              <select class="form-control" id="sell" name="cat">

                 <option value="disable">choose category</option>

                       <?php 
                       
                       foreach($catogery as $c){

                        echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                       }
                       
                       ?>
                       
                     </select>
                      </div>
                      <br>
                  
                    <center><button type="submit" class="btn btn-default">Submit</button></center>
              </form>
         </div>
</div>


             
<div id="menu2" class="tab-pane fade">
      <h3>User data</h3>

       





<div>















































           
            </div>
        </div>
      </div>
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>