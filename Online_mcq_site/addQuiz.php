<?php 
extract ($_POST);
include 'dbConn.php';
 $quiz=new DB();
 
 //print_r($_POST);
$qus = htmlentities($qus);
$option1 = htmlentities($op1);
$option2 = htmlentities($op2);
$option3 = htmlentities($op3);
$option4 = htmlentities($op4);

$array =[$option1 ,$option2 ,$option3 ,$option4];



$answer = array_search($ans, $array);
//Print_r($answer);

$i = $quiz->getId();
print_r($i);

$id1= implode(',', $i);

print_r($id1);die;




//$idQuery= "select max(id) as id_value from question2";

//$result = pg_query($this->db, $idQuery);


//Print_r($result->num_rows);

//$idValue = 0;
//while($row = $result->fetch_assoc()) {
	//Print_r($row['id_value']);
	//Print_r($row["id_value"]);
	//$idValue = $row["id_value"] + 1;
//}


//$idsql="select max(id) as id_value from question2";






//while($row_value = pg_fetch_array($idsql)){

 // echo "hy";
//print_r($row_value['id_value']);
   
//// $idvalue = $row_value['id_value']+ 1;
  
//}

//echo "here";

$sql1 = "INSERT INTO  question2 (id,question ,ans1, ans2, ans3, ans4,ans, cat_id) Values(, '$qus','$option1','$option2','$option3','$option4',$answer,$cat)";

print_r($sql1);

$ret = pg_query($this->db, $sql1);

die;

//$query = "INSERT  into question2 values('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
//$query = "INSERT  into question2 (question,ans1,ans2,ans3,ans4,ans,cat_id) values('$qus','$option1','$option2','$option3','$option4','$answer','$cat')";

//print_r($query);die;
//if
//($quiz->add_quiz_new($query)){
  //  echo "data inserted successfully";
//}else{
  //  echo "wrong ";
//}



if(isset($_POST['qus']) && isset($_POST['option1']) && isset($_POST['option2']) && isset($_POST['option3']) && isset($_POST['option4']) && isset($_POST['answer'])  && isset($_POST['cat']))  {
    //die('here');
     $result = $quiz->add_quiz_new($_POST['qus'],$_POST['option1'],$_POST['option2'],$_POST['option3'],$_POST['option4'],$_POST['answer'],$_POST['cat']);
     
     
    // header('Location:posts.php');
    if($result){

        echo "data successfully";
       // header('Location:posts.php');
    }else{
        echo "false";
    }


  }


?>