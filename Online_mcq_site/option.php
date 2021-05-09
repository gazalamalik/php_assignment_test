<?php
session_start();
include_once 'dbConn.php';

//$db=new DB();
//$id = $_SESSION['id'];
//if (!$user->get_session()){
    //echo 'hi';
//header("location:login.php");
//}

//if (isset($_GET['q'])){
 //$user->user_logout();
 //header("location:login.php");
 //}
// $id = $_GET['id'];
//$qid=$_GET['qid'];
// $quest="select question from questions where question_id=$qid;";
 //$ret=$db->query($quest);
 //$res=$db->fetch_row($ret);
//  $q2="select q_type from questions where question_id=$qid;";
//  $ret2=$db->query($q2);
//  $res2=$db->fetch_row($ret2);
// $q = "select * from options where question_id=$qid; ";
//// $result = $db->query($q);
// $rows=$db->fetch_all($result);

// $check=$user->isAdmin($id); 
// print_r($res);
//$rows=$posts->fetchAllPosts();


?>






<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Choices</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
     
     
</head>
<body>
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

                  <ul class="nav navbar-nav navbar-right ">

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: red;"><?php echo "" . $_SESSION['username'];?> 
<span class="caret"></span> 
</a>
    <ul class="dropdown-menu">
  
    <li><a href="#">Profile</a> </li>
    <li><a href="home.php"><?php

                       session_start();
                       session_destroy();

                       setcookie('username' , $username, time()-1);
                       setcookie('password' , $password, time()-1);
                       //echo "you are successfully logout. click here to <a href='login.php'>login</a>";
                      ?>Logout</a> 
     </li>
     
   
                           
    </ul>
 </li>
</ul>

                  
                </div>
                  
             </nav>
           
            <div class="container" style="margin-top:80px; margin-left:150px;">
            <h1 style="text-align: center"><b>welcome</b></h1>
            <br/>

                    <div class="row">
                    <a href="addoption.php?id=<?php echo $id; ?>&qid=<?php echo $qid; ?>&qtype=<?php echo $res2[0]; ?>" class="btn btn-primary" style="margin-left:150px;">Add Option</a><br/><br/>
                                <div class="col-md-12 col-sm-8">

                                        <?php foreach ($rows as $row=>$r) {?>
                          
                                        <div class="well" style="height:60px width:100%;">
                                      
                                                <h3><?php echo $r['option_title']."\n" ?></h3>
                                                <div class="col-md-12 bg-light text-right">
                                                <button class="btn-info btn " style="margin-top :-100px"> <a href="updateoption.php?id=<?php echo $id; ?>&oid=<?php echo $r['option_id']; ?>&qid=<?php echo $qid;?>&otitle=<?php echo $r['option_title']?>" class="text-white"> Edit </a>  </button>
                                                <button class="btn-danger btn " style="margin-top :-100px"> <a href="deloption.php?id=<?php echo $id; ?>&oid=<?php echo $r['option_id']; ?>&qid=<?php echo $qid; ?>" class="text-white"> Delete </a>  </button>
 
                                        </div>
                                          </div>
                                              
                                
                                <?php  } ?>  
                        
                        </div>
                    </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>