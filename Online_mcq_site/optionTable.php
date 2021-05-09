<?php
include 'dbConn.php';


  $obj1 = new  DB ();

  $record = $obj1->OptionTableList($_GET['question_id']);
  // echo "<pre>"; print_r($record);die;
//to fetch data into the form and then edit it 

  if(isset($_GET['question_id'])){
      $del = $obj1->deleteData($_GET['question_id']);
      if($del){
          header('Location: optionTable.php');
      }else{
          echo $del;
      }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>


<style>
   
</style>




</head>
<body>

click here to add data : <a href="ragister.php">ragister</a><br>

<div class="container" style="margin-top:80px; margin-left:150px;">
                <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
                                    <center><h2 class="panel-title">Option List</h2><center>
                                   <button> <a href="addquest.php?id" class="btn btn-primary" style="margin-left:15px;">see question</a></buttons><br/>
                                </div>
                                <div class="col-md-3">

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                      <table id="exam_data_table" class="table table-bordered table-striped table-hover"  >




                                                   <tr>
                                                   <hr style=" color:lightgrey; width:100%;text-align:left;margin-left:0">
                                                          

                                                          <th>Option Title</th><br>
                                                          <th>Action</th>
                                                    </tr>
<?php foreach($record as $val){?>
    <tr>
   
            
           <td><?php echo $val['option_title'];?></td> 
           
           
          <th> <a href="updateData.php?id=<?php echo $val['question_id'];?>"> ADD Option</a><br>
           <a href="updateData.php?id=<?php echo $id; ?>&oid=<?php echo $val['option_id']; ?>" > Edit  </a><br>

           
           <a href="TableData.php?id=<?php echo $val['option_id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
           

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

