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
  function getEndPunc(){
    echo "getEndPunc was called";
    $puncDeterminer = rand (0, 100);
    if ($puncDeterminer <= 50){
      echo '.';
    }
    else if ($puncDeterminer <= 70){
      echo '!';
    }
    else if ($puncDeterminer <= 90){
      echo '?';
    }
    else{
      echo '...';
    }
  }
  function getIndependentClause(){
    echo "getIndependentClause was called";
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
    return ucfirst($pronoun) . " " . $verb . " the " . $noun;
  }
  function getInterjection(){
    echo "getInterjection was called<br>";
    $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      while ($obj=mysqli_fetch_object($result)) {
        $interjection = $obj->word;
      }
      mysqli_free_result($result);
    }
    return $interjection;
  }
  function getSentence(){
    echo "getSentence was called<br>";
    $initStructDeterminer = rand(0, 100);
    if ($initStructDeterminer < 60){
      echo getIndependentClause();
    }
    else if ($initStructDeterminer < 80){
      echo getInterjection();
    }
    else if ($initStructDeterminer < 90) {
      echo getInterjection();
      echo ", ";
      echo getIndependentClause();
    }
    else {
      echo getInterjection();
      echo "... ";
      echo getIndependentClause();
    }
    getEndPunc();
  }
  for ($x = 0; $x < 10; $x++) {
    echo "<p>";
    getSentence();
    echo "</p>";
  }
  echo "<br>";
  mysqli_close($con);
  require_once('footer.php');
?>
