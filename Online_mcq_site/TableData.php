<?php
include 'dbConn.php';
session_start();


$obj1=$_POST['cat'];

$_SESSION['cat']= $cat;



  $obj1 = new  DB ();
  

  $record = $obj1->TableList();
  // echo "<pre>"; print_r($record);die;
//to fetch data into the form and then edit it 

  if(isset($_GET['id'])){
   
      $del = $obj1->deleteData($_GET['id']);
      if($del){
          header('Location: TableData.php');
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
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
                               <li><a href="home.php">Home</a> </li>
                               <li><a href="index.php">Back</a> </li>
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














click here to add data : <a href="ragister.php">ragister</a><br>

<div class="container" style="margin-top:80px; margin-left:150px;">
                <div class="card">
                        <div class="card-header">
                            <div class="row">
                           
                                <div class="col-md-10">
                                <h1 class="panel-title">Questions List</h1>
                                   
                                <button type="button" class="btn btn-primary" action ="addques.php" style="margin-left:1000px;">Add Question</button>
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                      <table id="exam_data_table" class="table table-bordered table-striped table-hover"  >




                                                   <tr>
                                                   <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
                                                          <th>Question</th><br>
                                                        <th> Action</th>
                                                          
                                                    </tr>
<?php foreach($record as $val){?>
    <tr>
            
            <td><?php echo $val['question'];?></td> 
    
           
           
           
           <td><a href="updateData.php?id=<?php echo $val['id'];?>">Edit  </a><br>
           
           <a href="TableData.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a><br>
           <a href="OptionData.php?id=<?php echo $val['id'];?>">View option  </a>

           </td> 
        </tr>
           
<?php } ?>

</table>
<hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">












</div>
</div>
<div>
</div>



</body>
</html>

