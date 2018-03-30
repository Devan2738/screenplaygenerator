<?php
  session_start();
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
  echo "<p>";
  for ($x = 0; $x < 10; $x++) {
    $sql="SELECT word FROM words WHERE isPronoun = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      while ($obj=mysqli_fetch_object($result)) {
        $pronoun = $obj->word;
      }
      mysqli_free_result($result);
    }
    $sql="SELECT word FROM words WHERE isVerb = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      while ($obj=mysqli_fetch_object($result)) {
        $verb = $obj->word;
      }
      mysqli_free_result($result);
    }
    $sql="SELECT word FROM words WHERE isNoun = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      while ($obj=mysqli_fetch_object($result)) {
        $noun = $obj->word;
      }
      mysqli_free_result($result);
    }
    echo "<p>";
    echo ucfirst($pronoun) . " " . $verb . " the " . $noun . ".";
    echo "</p>";
    echo "<br>";
  }
  echo "</p>";
  mysqli_close($con);
  require_once('footer.php');
?>
