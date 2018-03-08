<?php
class Dao {

 private $hostname = "us-cdbr-iron-east-05.cleardb.net";
 private $db = "heroku_d66a31f2e552f3e";
 private $user = "b2cf23ed5d39cc";
 private $password = "f49471ca";
 private $conn;

 public function __construct() {
   $this->conn = mysqli_connect($hostname,$user,$password,$db);
   // Check connection
   if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 }

 public function getPronoun() {
   $sql="SELECT word FROM words WHERE isPronoun = 1 ORDER BY RAND() LIMIT 1";
   if ($result=mysqli_query($conn,$sql)) {
     $obj=mysqli_fetch_object($result)
     mysqli_free_result($result);
     return $obj->word;
   }
 }

 public function getVerb() {
   $sql="SELECT word FROM words WHERE isVerb = 1 ORDER BY RAND() LIMIT 1";
   if ($result=mysqli_query($conn,$sql)) {
     $obj=mysqli_fetch_object($result)
     mysqli_free_result($result);
     return $obj->word;
   }
 }

 public function getNoun() {
   $sql="SELECT word FROM words WHERE isNoun = 1 ORDER BY RAND() LIMIT 1";
   if ($result=mysqli_query($conn,$sql)) {
     $obj=mysqli_fetch_object($result)
     mysqli_free_result($result);
     return $obj->word;
   }
 }

 public function close() {
     mysqli_close($conn);
 }

}
