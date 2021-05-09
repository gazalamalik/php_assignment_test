<?php
include 'dbConn.php';
$ans = new DB ();

$_SESSION['cat'];
$record= $ans->answer($_POST);

//print_r($_POST);



?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <title>answer</title>
</head>
<body>

<?php
    $total_ques= $record['not answered'];+$record['not answered'];+ $record['not answered'];
    $attempt_ques= $record['not answered'];+$record['not answered'];
?>

<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8">
 <center> <h2>Your Quiz Results</h2></center>
 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php  echo $total_ques; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted Questions</td>
        <td><?php echo $attempt_ques;?></td>
      </tr>
      <tr>
        <td>Right Answer</td>
        <td><?php echo $record['right'] ; ?></td>
      </tr>
      <tr>
        <td>Wrong Answer</td>
        <td><?php echo $record['wrong']; ?></td>
      </tr>
      <tr>
        <td>No Answer</td>
        <td><?php echo $record['no_answer']; ?></td>
      </tr>

      <tr>
        <td>Your Reasult</td>
       <td> <?php 
           $per=($record['right'] * 100)/ ($total_ques);
           echo $per."%";
        ?></td>
     </tr>


    </tbody>
  </table>
  </div>
  <div class="col-sm-2"></div>
  </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>