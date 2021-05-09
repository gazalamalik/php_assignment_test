<?php
include 'dbConn.php';

session_start();
  $obj1 = new  DB ();

  $record = $obj1->UserList();


  if(isset($_GET['id'])){
      $del = $obj1->deleteData($_GET['id']);
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
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


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
                               <li><a href="index.php">Dashboard</a> </li>
                              
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















<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>



<div class="container" style="margin-top:80px; margin-left:150px;">
                <div class="card">
                        <div class="card-header">
                            <div class="row">
                            <br><br><br>
<hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">

                            <div class="col-md-10">
                                <h1 class="panel-title">User List</h1>
                                   
                                <button type="button" class="btn btn-primary" action ="ragister.php" style="margin-left:1000px;"><a href="ragister.php" style="color:black;">Add User</a></button><br><br>
                                </div>
                                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                      <table id="exam_data_table" class="table table-bordered table-striped table-hover"  >
                               <tr>
                                  <th> ID</th> 
                                  <th> username </th>
                                  <th>email </th>
            
                                   <th> password </th>
                                   <th> role </th>
                                   <th> Action </th>

                               </tr>



<?php foreach($record as $val){?>
        <tr>
            <td> <?php echo $val['id'];?></td>
          <td><?php echo $val['username'];?></td> 
            <td><?php echo $val['email'];?></td> 
            <!-- <td><?php echo $val['role'];?></td>-->   
            <td><?php echo $val['password'];?></td> 
            <td><?php echo $val['role'];?></td> 
           <!-- <td><?php echo $val['status'];?></td> -->
           <td><a href="updateUserData.php?id=<?php echo $val['id'];?>"><i style='font-size:24px' class='fas'>&#xf044;</i> </a>
           <a href="UserTableData.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i style='font-size:24px' class='fas'>&#xf2ed;</i>
 </a>
          


        </tr>
<?php } ?>


</table>



</body>
</html>