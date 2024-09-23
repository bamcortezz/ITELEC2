<?php
session_start();
include_once __DIR__ . '/../database/dbconnection.php';


//error reporting
ini_set('display errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//csrf token
if (empty($_SESSION['csrf_token'])) {
   $csrf_token = bin2hex(random_bytes(32));
   $_SESSION['csrf_token'] = $csrf_token;
} else {
   $csrf_token = $_SESSION['csrf_token'];
}


class SystemConfig {

   private $conn;
   private $smpt_email;
   private $smpt_password;

   public function __construct()
   {
      $database = new Database();
      $db = $database->dbConnection();
      $this->conn = $db;

      //get email configuration 
      $stmt = $this->runQuery("SELECT * FROM email_config");
      $stmt->execute();
      $email_config = $stmt->fetch(PDO::FETCH_ASSOC);

      $this->smpt_email = $email_config['email'];
      $this->smpt_password = $email_config['password'];

   }

   public function getSmptEmail()
   {
      return $this->smpt_email;
   }

   public function getSmptPassword()
   {
      return $this->smpt_password;
   }

   public function runQuery($sql)
   {
      $stmt = $this->conn->prepare($sql);
      return $stmt;
   }
}

?>