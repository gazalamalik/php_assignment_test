<?php

class DB {  

    public $db;

    public function __construct() {
   
	     $host = "host = 127.0.0.1";
	     $port = "port = 5432";
	     $dbname = "dbname =online_site";
	     $credentials = "user = postgres password=postgres";
 
	     $this->db = pg_connect( "$host $port $dbname $credentials"  );
	            if(!$this->db) {
	                 echo "Error : Unable to open database\n";
	            } else {
	              //echo "database connect successfully \n <br>";
	            }
    }
    
//user profile 

public function users_profile($uname){

    echo $uname;
}

public function category_show(){

        $query= "select * from category";
        $getQuery = pg_query($this->db, $query);
        //$getData = pg_fetch_array($ret);
        //echo "<pre>";print_r($getData); die;
        $responseArray = array();
        while($data = pg_fetch_array($getQuery)){
          //echo "<pre>"; print_r($data); 
            $responseArray[] = $data;
         }
            return $responseArray;
    

}


public function qus_show($qus){

    echo $qus;

    $query= "select * from question2";
   $getQuery = pg_query($this->db, $query);
    
   $responseArray = array();
   while($data = pg_fetch_array($getQuery)){
     
       $responseArray[] = $data;
    }
       return $responseArray;


}

function answer($data){

  //  print_r($data);die;

  
$right=0;
$wrong=0;
$no_answer=0;


    foreach($data as $answer){
        

         if($answer == 'not answered'){
           
              $no_answer = $no_answer + 1;
         }

         else{

            $ansarr = split ("_", $answer); 

           // print($ansarr);die;

            $query= "select ans from question2 where cat_id='".$_SESSION['cat']."' and id=".$ansarr[0] ;

            $getQuery = pg_query($this->db, $query);

            while($quest = pg_fetch_array($getQuery)){

                if($quest['ans'] == $ansarr[1]){
                    $right=$right+1;
                }else{
                    $wrong = $wrong + 1;
                }
            }
        }


         
    }

echo "not answered =".$no_answer;
echo "correctly answered =".$right;
echo "wrongly answered  =".$wrong;

$array =array();

$array['right']=$right;
$array['wrong']=$wrong;
$array['no_answer']=$no_answer;

return $array;


}
   
  public function getId(){
    $query= "select id from question2";
	$getQuery = pg_query($this->db, $query);
	$responseArray = array();
	while($data = pg_fetch_array($getQuery)){
	  //echo "<pre>"; print_r($data); 
		$responseArray[] = $data;
	 }
		return $responseArray;

  }


//for add question admin end 


 public function add_quiz($rec){
       $a= $this->db->query($rec);
        
       
 }


 public function add_quiz_new( $qus, $option1, $option2, $option3, $option4, $answer,$cat){
		
	
		
    $sql1 = "INSERT INTO  question2 (question ,ans1, ans2, ans3, ans4,ans, cat_id) Values('$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
    $ret = pg_query($this->db, $sql1);
    $row = pg_num_rows($ret);
  
   if($row)
   {
    // echo "done";
     return true;
   }else{
      //echo "please try again ";
   }
}   

 







    
    //for login form 
    



	
	public function query_login($sql) {
		$ret = pg_query($this->db, $sql);
		$row = pg_num_rows($ret);

		//print_r($row);
		//die('dv');
		return $row;
	}

    public function query_login_admin($sql) {
		$ret = pg_query($this->db, $sql);
		$row = pg_num_rows($ret);

		//print_r($row);
		//die('dv');
		return $row;
	}

	


public function admin($sql1){
	$ret = pg_query($this->db, $sql1);
		$row = pg_num_rows($ret);

		//print_r($row);
		//die('dv');
		return $row;
}



	//for ragister form it goes to the user.php file and then validation 

	public function Ragister($name , $email, $pwd ){
		
	
		
		$sql1 = "INSERT INTO users (username ,email,password,role,status) Values('$name' ,'$email','$pwd','user',1)";
		$ret = pg_query($this->db, $sql1);
		$row = pg_num_rows($ret);
	  
	   if($row)
	   {
		// echo "done";
		//print_r("ragister");die;

		 return true;
	   }else{
		  echo "please try again ";
	   }
   }   

	//for table to show all records are show in the table 

	public function get_session(){

	//	return $_SESSION['login'];
		
    echo "getsession here ";
        
	}

//user table data fetch code


public function TableList(){

	$query= "select question from question2";
	$getQuery = pg_query($this->db, $query);
	//$getData = pg_fetch_array($ret);
	//echo "<pre>";print_r($getData); die;
	$responseArray = array();
	while($data = pg_fetch_array($getQuery)){
	  //echo "<pre>"; print_r($data); 
		$responseArray[] = $data;
	 }
		return $responseArray;
}

public function OptionList(){

	$query= "select * from question2";
	$getQuery = pg_query($this->db, $query);
	//$getData = pg_fetch_array($ret);
	//echo "<pre>";print_r($getData); die;
	$responseArray = array();
	while($data = pg_fetch_array($getQuery)){
	  //echo "<pre>"; print_r($data); 
		$responseArray[] = $data;
	 }
		return $responseArray;
}







public function UserList(){

	$query= "select * from users";
	$getQuery = pg_query($this->db, $query);
	//$getData = pg_fetch_array($ret);
	//echo "<pre>";print_r($getData); die;
	$responseArray = array();
	while($data = pg_fetch_array($getQuery)){
	  //echo "<pre>"; print_r($data); 
		$responseArray[] = $data;
	 }
		return $responseArray;
}




public function AddQuestion($uid, $qtype , $topic, $ques , $duration ){
		
	
		
    $sql1 = "INSERT INTO question (user_id, q_type, topic,question,duration,) Values('uid','$qtype' ,'$topic','$ques','$duration')";
    
    $ret = pg_query($this->db, $sql1);
    $row = pg_num_rows($ret);

   
  
   if($row)
   {   
    // echo "done";
     return true;
     
   }else{
     // echo "please try again ";
   }
}   




public function OptionTableList($question_id){

    $query= "select option_title from options";
    
   // $query= "select option_title from options where question_id = '".$question_id."' ";
	$getQuery = pg_query($this->db, $query);
	//$getData = pg_fetch_array($ret);
	//echo "<pre>";print_r($getData); die;
	$responseArray = array();
	while($data = pg_fetch_array($getQuery)){
	  //echo "<pre>"; print_r($data); 
		$responseArray[] = $data;
	 }
		return $responseArray;
}
	
	public function deleteData($question_id){

		$query = "delete from question where  id = '".$question_id."' ";

		$getQuery =pg_query($this->db, $query);
		if($getQuery){
			 return true;
			 
		}else{
			return  pg_error($this->db);
		}

	}


	//to update the user list 

	public function getFormData($id){
		$query= "select * from users where id ='".$id."' ";
		$getQuery = pg_query($this->db, $query);
		$getData = pg_fetch_array($getQuery);
		//echo "<pre>";print_r($getData); die;
		return $getData;
	}

	public function updateData($data , $id){

		$query = "UPDATE users set username = '".$data['name']."', email= '".$data['email']."',password = '".$data['pwd']."' where  id= '".$id."' ";

		$runQuery =pg_query($this->db, $query);
		if($runQuery)
		{
			return true;
		}else{
			return false;

		}
	}



	public function query($sql2) {
		$ret = pg_query($this->db, $sql2);
		

		return $ret;
	}

	  

	 public function isAdmin($id){
		 $sql= "SELECT role FROM users where role='admin'";
		 $ret = pg_query($this->db, $sql);
		 
			//$check =  pg_query($this->db->db, $sql) ;
			//$rows = pg_num_rows($ret);
			
            $rows = pg_fetch_array($ret);
			//$rows=$this->db->pg_fetch_all($ret);

			if($rows[0]['role']=='admin'){
				return true;
			}else{
				return false;
			}
	
		 

			

	 }

	 



			


public function query2($sql) {
        $ret = pg_query($this->db, $sql);
       return $ret;
}



       
 


  
  

private function tableexists($table){

   $sql2="SELECT tablename
   FROM pg_catalog.pg_tables
   WHERE schemaname != 'pg_catalog' AND 
       schemaname != 'information_schema' AND tablename like '$table';";
    $tableInDB=pg_query($this->db,$sql2);
    if($tableInDB){
        $rows = pg_num_rows($tableInDB);
        
        if($rows==1){
        
            return true;
        }else{
            array_push($this->result,$table.'does not exist in this database');
            return false;
        }
    }
}
public function getResult(){
   
    print_r( $val=$this->result);
    $this->result=array();
    return $val;
}




















   
    public function Connection_close(){
	     pg_close($db); 
	}




	

	

	
	  


//$con = new dbConnection();




}


//$con= new DB ();

 ?>
     
    


