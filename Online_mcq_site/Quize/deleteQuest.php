<?php

include_once 'User.php';
$db=new DB();

$qid = $_GET['qid'];
$id = $_GET['id'];
//$check=$user->isAdmin($id);
//if($check){
echo $q = " DELETE FROM question WHERE question_id = $qid ;";
 $result = $db->query2($q);
header("location:question.php?id=$id");
//}
?>