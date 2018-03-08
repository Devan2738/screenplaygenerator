<?php
class Dao {
 private $host = "us-cdbr-iron-east-05.cleardb.net";
 private $db = "heroku_f36640796dba974"; # private $db = "heroku_d66a31f2e552f3e";
 private $user = "b007dde3ed6cbd"; #private $user = "b2cf23ed5d39cc";
 private $pass = "def99b02"; #private $pass = "f49471ca";

 public function __construct () { }

 public function getConnection () {
   try {
        $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
        return $conn;
      } catch (Exception $e) {
        echo "connection failed: " . $e->getMessage();
      }
 }

 public function getWords() {
     $conn = $this->getConnection();
     $getQuery = "SELECT * FROM words;
     $q = $conn->prepare($getQuery);
     $q->execute();
     return reset($q->fetchAll());
   }

}
