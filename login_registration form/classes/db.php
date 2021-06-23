<?php 
class db {

   private $host = "localhost"; // Private Variable
   private $username = "root";
   private $database = "login";
   private $password = "";
   protected $db;

   // Create Construct Method
   public function __construct(){
    try {
        
        /*
            * Create database connection
        */ 
    // protected Variable Access using this keyword
        $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

    } catch(PDOException $e){
        echo "Connection Problem: ". $e->getMessage();

    }

   }

}


 ?>