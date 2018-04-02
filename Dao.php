<?php
class Dao {

 private $hostname = "us-cdbr-iron-east-05.cleardb.net";
 private $db = "heroku_d66a31f2e552f3e";
 private $user = "b2cf23ed5d39cc";
 private $password = "f49471ca";
 private $conn;

 public function __construct() {
   echo 'Dao constructor was called';
   $this->conn = mysqli_connect($this->hostname,$this->user,$this->password,$this->db);
   // Check connection
   if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 }

 public function accountAlreadyExists() {
   try{
       $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
       $stmt->bind_param("s", $_POST['email']);
       $stmt->execute();
       $stmt->store_result();
       if($stmt->num_rows > 0) {
           return 1;
       }
       $stmt->close();
     } catch (Exception $e){
       $_SESSION["info message"] = '<p> oops an error occurred while making your account </p>';
       header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
       exit;
     }
 }

 public function getSentence() {
   $initStructDeterminer = rand(0, 100);
   $output = '<p>';
   if ($initStructDeterminer < 60){
     $pronoun = '';
     $sql="SELECT word FROM words WHERE isPronoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $pronoun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $verb = '';
     $sql="SELECT word FROM words WHERE isVerb = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $verb = $obj->word;
       }
       mysqli_free_result($result);
     }
     $noun = '';
     $sql="SELECT word FROM words WHERE isNoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $noun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= ucfirst($pronoun) . " " . $verb . " the " . $noun;
   }
   else if ($initStructDeterminer < 80){
     $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $interjection = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= ucfirst($interjection);
   }
   else if ($initStructDeterminer < 90) {
     $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $interjection = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= ucfirst($interjection) . " ";
     $outupt .= ", ";
     $pronoun = '';
     $sql="SELECT word FROM words WHERE isPronoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $pronoun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $verb = '';
     $sql="SELECT word FROM words WHERE isVerb = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $verb = $obj->word;
       }
       mysqli_free_result($result);
     }
     $noun = '';
     $sql="SELECT word FROM words WHERE isNoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $noun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= $pronoun . " " . $verb . " the " . $noun;
   }
   else {
     $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $interjection = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= ucfirst($interjection) . " ";
     $output .= "... ";
     $pronoun = '';
     $sql="SELECT word FROM words WHERE isPronoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $pronoun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $verb = '';
     $sql="SELECT word FROM words WHERE isVerb = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $verb = $obj->word;
       }
       mysqli_free_result($result);
     }
     $noun = '';
     $sql="SELECT word FROM words WHERE isNoun = 1 ORDER BY RAND() LIMIT 1";
     if ($result=mysqli_query($con,$sql)) {
       while ($obj=mysqli_fetch_object($result)) {
         $noun = $obj->word;
       }
       mysqli_free_result($result);
     }
     $output .= $pronoun . " " . $verb . " the " . $noun;
   }
   $puncDeterminer = rand (0, 100);
   if ($puncDeterminer <= 50){
     $output .= '.';
   }
   else if ($puncDeterminer <= 70){
     $output .= '!';
   }
   else if ($puncDeterminer <= 90){
     $output .= '?';
   }
   else{
     $output .= '...';
   }
   //echo strtoupper($speaker) . "<br>" . ucfirst($pronoun) . " " . $verb . " the " . $noun . ".";
   $output .= strtoupper($speaker) . "<br>" . $output . "</p>";
 }

}
