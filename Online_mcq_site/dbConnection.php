<?php 

class Database
{
  // [Singleton]
  public static $connection;

  private function __construct()
  {
      echo "Connection created ";
  }

  public static function Connect()
  {
    if (!isset(self::$connection))
    {
      self::$connection = new Database;
    }
    return self::$connection;
  }
 
  public static function Query($sql){

    pg_query($sql);
  }
  
}

$db = Database::Connect();
$db2 = Database::Connect();

?>