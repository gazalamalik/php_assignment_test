<?php 

include 'User.php';

 $obj = new User_Table();
 die('here');
 

  
 if(isset($_POST['qtype']) && isset($_POST['topic']) && isset($_POST['quest'])  && isset($_POST['duration'])) {
  
     $result = $obj->Question_insert($_POST['qtype'],$_POST['topic'],$_POST['quest'], $_POST['duration']);
     
     
    
    if($result){
       header("location:question.php?id=$id");
    }else{
        echo "false";
    }
  
    
   
  
    
  }




?>