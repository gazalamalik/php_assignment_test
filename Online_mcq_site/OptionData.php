<?php
include 'dbConn.php';

$cat = new  DB ();

$cat=$_POST['cat'];

$_SESSION['cat']= $cat;


if(isset($_GET['id'])){
    $del = $obj1->deleteData($_GET['id']);
    if($del){
        header('Location: OptionData.php');
    }else{
        echo $del;
    }
}

  
  

  $record = $obj1->OptionList();
 


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
                                                          <th>Option1</th><br>
                                                        <th> Option2</th>
                                                        <th> Option3</th>
                                                        <th> Option4</th>
                                                        <th> Answer</th>
                                                        <th> Action</th>
                                                          
                                                    </tr>
<?php foreach($record as $val){?>
    <tr>
            
            <td><?php echo $val['ans1'];?></td> 
            <td><?php echo $val['ans2'];?></td> 
            <td><?php echo $val['ans3'];?></td> 
            <td><?php echo $val['ans4'];?></td> 
            <td><?php echo $val['ans'];?></td> 
    
           
           
           
           <td><a href="updateData.php?id=<?php echo $val['id'];?>">Edit  </a><br>
           <a href="addOption.php?id=<?php echo $val['id'];?>">Add  </a><br>
           <a href="OptionData.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a><br>
           

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

