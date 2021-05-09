
<?php
include 'dbConn.php';
include 'Navbar/navbar.php';
session_start();

//include_once 'User2.php';

//$obj1 = new  DB ();

//$record = $obj1->TableList();


?>






<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Questions page</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
      <style>
    .cus{
    margin:5px;
    min-height: 100px;
    background-color:#D8BFD8;
    text-align:center;
    font-size: large;
  }
  .cus1{
    margin:5px;
    min-height: 600px;
    background-color:#FFF0F5;
    text-align:center;
    font-size: large;
  }
  .thumbnail img{
    height: 250px;
    width:100%;
  }
  a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }
  
  a:visited {
    color:#900C3F;
    background-color: transparent;
    text-decoration: none;
  }
  
  a:hover {
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }
  
  a:active {
    color:#900C3F;
    background-color: transparent;
    text-decoration: none;
  }
  .well{
    background-color: #3CB371;
  }
  
  .jumbotron{
    background-color: #FFDAB9;
  }
  
      </style>
     
</head>
<body >
    <div id="app">
       

        <main class="py-4">
            
						 <nav class="navbar navbar-default navbar-inverse bg-warning navbar-fixed-top">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#main" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>      </div>

                <div class="navbar-collapse collapse" id="main">
                  <ul class="nav navbar-nav ">
                      <li ><a href="dashboard.php">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                      
                  </ul>

                  <ul class="nav navbar-nav navbar-right" style="margin-right:15px; margin-top:8px;">
                
                            
                  <div class="dropdown">
                  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <li class="active"><<?php $user->get_username($id); ?></li>
                  </button>
                 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                  <?php if($check){ ?>
                  <a class="dropdown-item" href="usertable.php" style="margin-left:10px;">USER-TABLE</a>
                   <br/>
                   <a class="dropdown-item" href="exam.php?id=<?php echo $id?>" style="margin-left:10px;">SET-EXAM</a><br/>
                   <?php
                   }?>
                  <a class="dropdown-item" href="profilepage.php?id=<?php echo $id?>" style="margin-left:10px;">PROFILE</a>
                   <br/>
                  <a class="dropdown-item" href="index2.php" style="margin-left:10px;">LOGOUT</a>
                  </div>
                  </div>
                     
                  </ul>
                  
                  
                </div>
                  
             </nav>
           
            <div class="container" style="margin-top:80px; margin-left:150px;">
                <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    <h2 class="panel-title">Questions List</h2>
                                    <a href="addquest.php?id" class="btn btn-primary" style="margin-left:150px;">Add Question</a><br/><br/>
                                </div>
                                <div class="col-md-3">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                      <table id="exam_data_table" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                    <tr>
                                                          <th>User_id</th>
                                                          <th>Question_id</th>
                                                          <th>Question Type</th>
                                                          <th>Question Topic</th>
                                                          <th>Question</th>
                                                          <th>Status</th>
                                                          <th>Options</th>
                                                          <th>Action</th>
                                                    </tr>
                                            </thead>





                                            </tr>//
<?php foreach($record as $val){?>
        <tr>
            <td> <?php echo $val['user_id'];?></td>
          <td><?php echo $val['question_id'];?></td> 
            <td><?php echo $val['q_type'];?></td> 
            <td><?php echo $val['topic'];?></td>  
            
           <td><?php echo $val['status'];?></td> 
           <td><a href="updateData.php?id=<?php echo $val['id'];?>">Edit  </a><br>
           <td><a href="updateData.php?id=<?php echo $val['id'];?>">View option  </a><br>
           <a href="TableData.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
          


        </tr>
<?php } ?>
</table>














                                      </table>
                              </div>
                        </div>
                </div>
            </div>
        </main>
    </div>
    <script>
    $(document).ready(function(){
      var dataTable=$('#exam_data_table').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
        url:"ajax_action.php",
        method:"POST",
        data:{action:'fetch',page:'exam'}
      },
      "columnDef" :[
        {
          "targets":[7],
          "orderable":false,

        },
      ],
      
    });
    });
    
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
