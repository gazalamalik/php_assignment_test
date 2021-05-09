<?php
include 'dbConn.php';

session_start();


$obj1 = new  DB ();

  //$record = $obj1->category_show();

  print_r($record);



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quize</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
 
  background-image: url("img/n2.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.btn{
  height:50px;
  width: 200px;
  color: pink;
}
</style>



 <nav  style="color:purple; ">
  
  <ul class="nav nav-tabs" >
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>

  



  <ul class="nav navbar-nav navbar-right ">

<li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color:purple;"><?php echo "" . $_SESSION['username'];?> 
          <span class="caret"></span> 
       </a>
             <ul class="dropdown-menu">
                  <li><a href="home.php">Home</a> </li>
                  <li><a href="#">profile</a> </li>
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
</ul>



<nav>




  <div class="tab-content">

  <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <div class="panel panel-danger">
            <center><h1 style="color:red;"><h1>Welcome :<?php echo "" . $_SESSION['username'];?> </h1></h1></center>
        </div>
      <div>
   </div>
</div>

<div id="home" class="tab-pane fade in active">
     
      <br>
     <center>  <button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quize</button></center>
      <br>

<div class="col-sm-4"></div>

<div class="col-sm-4"><br>
<div id="select" class="tab-pane fade">


<form method="post" action="qus_show.php">
      <select class="form-control" id="" name="cat">
      <option>Select Category</option>

      <?php foreach($record as $val){?>

      
       
        <option value="<?php echo $val['id'];?>"><?php echo $val['cat_name'];?></option>
       


        <?php } ?>
      </select>

    <br>
    <center><input type="submit" value="submit" class="btn btn-primary" /></center>
   </form>
  </div>
</div>
 </div>


    <div id="menu1" class="tab-pane fade">
      <h3>Profile</h3>
     
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
