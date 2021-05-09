<?php 
include 'dbConn.php';
$obj1= new DB ();


$cat=$_POST['cat'];

//$_SESSION['cat']= $cat;


$record = $obj1->qus_show($cat);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
       function timeout()
       {   
           var hours = Math.floor(timeLeft/3600);
           var minute = Math.floor((timeLeft-(hours*60*60)-30)/60);
          
           var second = timeLeft%60;
           var hrs = checktime(hours);
           var mint=checktime(minute);
           var sec=checktime(second);
           if(timeLeft<=0){

               clearTimeout(tm);
               document.getElementById("form1").submit();
           }else{
               document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
           }
           timeLeft--;
           var tm = setTimeout (function(){timeout()},1000);
       }

       //for 00:00:00 formate 

       function checktime(msg){
           if(msg<10){
               msg="0" + msg;
           }
           return msg;
       }

  </script>

</head>
<body onload=timeout();>

<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8">
  <h2>Online quize in php  
 
    <script type="text/javascript">
       var timeLeft=2*60*60;
    </script>
    
    <div id="time" style="float:right">timeout</div></h2>
  
 
<?php 
  $i=1;
  
  foreach($record as $val) {?>

  <form method ="post" action="answer.php" id="form1">
  
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><?php echo $i++;?>&emsp;<?php echo $val['question'];?></th>
       
      </tr>
    </thead>
    <tbody>

    <?php if(isset($val['ans1'])){?>
      <tr class="active">
        <td>&nbsp;1&emsp;<input type="radio" value="<?php echo $val['id']."_0";?>" name="<?php echo $val['id'];?>" /> &nbsp;<?php echo $val['ans1'];?></td>
       
      </tr>
      <?php }?>

      <?php if(isset($val['ans2'])){?>
      <tr class="active">
        <td>&nbsp;2&emsp;<input type="radio" value="<?php $val['id']."_1";?>" name="<?php echo $val['id'];?>" />  &nbsp;<?php echo $val['ans2'];?></td>
       
      </tr>
      <?php }?>

      <?php if(isset($val['ans3'])){?>
      <tr class="active">
        <td>&nbsp;3&emsp;<input type="radio" value="<?php echo $val['id']."_2";?>" name="<?php echo $val['id'];?>" /> &nbsp; <?php echo $val['ans3'];?></td>
       
      </tr>
      <?php }?>

      <?php if(isset($val['ans4'])){?>
      <tr class="active">
        <td>&nbsp;4&emsp;<input type="radio" value="<?php echo $val['id']."_3";?>" name="<?php echo $val['id'];?>" /> &nbsp; <?php echo $val['ans4'];?></td>
       
      </tr>
      <?php }?>

      <tr class="active">
        <td><input type="radio" checked="checked" style="display:none" value="not answered" name="<?php echo $val['id'];?>" /> </td>
       
      </tr>
      
    </tbody>
  </table>
  <?php } ?>

  <center><input type="submit" value="submit Quize" class="btn btn-success" /></center>

  </form>
</div>
<div class="col sm 2"></div>
</div>

</body>
</html>
