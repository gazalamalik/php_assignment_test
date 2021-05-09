<?php
include 'dbConn.php';


   $obj1 = new  DB ();

 // $record = $obj1->updateData();
  // echo "<pre>"; print_r($record);die;
//to fetch data into the form and then edit it 



if($_GET['id']){
   
   $editData = $obj1->getFormData($_GET['id']);
}
if(isset($_POST['update'])){
    $updates = $obj1->updateData($_POST, $_GET['id']);
    if($updates){
        header('Location: UserTableData.php');
    }else{
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>



<br><br>
<div class="container" style="border:grey; border-width:5px; border-style:solid;">
 <center> <h2>Update Users Data</h2>
  <form action ="" method="POST">
  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="name" required value="<?php echo $editData['username']?>"><br/>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php echo $editData['email']?>"><br/>
    </div>
    
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd" value="<?php echo $editData['password']?>">
    </div>

    <div class="form-group">
      <label for="pwd">Role:</label>
      
      <input type="text" class="form-control" placeholder="Enter role" name="role" value="<?php echo $editData['role']?>">
    </div>


    
     <input type="submit"  name="update" class="btn btn-primary" value="update">
    
   
    
  </form>
  <br>
  <form action="ragister.php">
  <input type="submit"   name="submit" class="btn btn-primary" value="Cancel">
  </form>
</div>


</body>
</html>