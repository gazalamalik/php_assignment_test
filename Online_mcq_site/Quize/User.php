<?php
include 'dbConn.php';


class User_Table{


public $ob ;

public function __construct(){
     $this->ob = new DB();
}



/**for ragister question   */

    public function Question_insert($id, $qtype, $topic,$quest,$duration ){
		
	
		$sql="insert into questions(user_id,q_type,topic,question,duration) values($id,'$qtype','$topic','$quest',$duration);";
        //$sql1 = "INSERT INTO posts (title , sort_desc,long_desc) Values('$title' ,'$sort','$long')";
        $result2 = $this->ob->query_InsertQuestion($sql1);
		
	  
	   if($result2)
	   {
		// echo "done";
		 return true;
	   }else{
		  //echo "please try again ";
	   }
   }   



/**to check is table exist or not  */

public function isTableExists($table) {

    
        
    $sql = "SELECT tablename
    FROM pg_catalog.pg_tables
    WHERE schemaname != 'pg_catalog' AND 
    schemaname != 'information_schema' AND tablename like '$table'";
    $ret = pg_query($this->db, $sql);
    $row = pg_fetch_all($ret);
    
    if($row == 1) {
       return true;
    }
    else {
       return false;
    }
 }  


/**for showing the username or full name */

   public function get_username($id){
        $sql3 = "SELECT username FROM users WHERE id= $id";
        $result = pg_query($db ,$sql3);
        $user_data = pg_fetch_row($result);
        echo$user_data['username'];
   }


/**starting the session  */
    public function get_session(){
        return $_SESSION['login'];
        
    }
    public function user_logout(){
        $_SESSION['login']= FALSE;
        session_destroy();
    }
} 





?>