<?php
  $pageName = 'testing';
  require_once('header.php');
  #require_once "Dao.php";
  #$dao = new Dao();
  $hostname = "us-cdbr-iron-east-05.cleardb.net";
  $db = "heroku_d66a31f2e552f3e";
  $user = "b2cf23ed5d39cc";
  $password = "f49471ca";
  $con=mysqli_connect($hostname,$user,$password,$db);
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  function testFunc(){
    echo "this is testFunc";
  }
  for ($x = 0; $x < 10; $x++) {
    echo "<p>";
    testFunc();
    echo "</p>";
  }
  echo "<br>";
  mysqli_close($con);
  require_once('footer.php');
?>
