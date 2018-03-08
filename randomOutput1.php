<?php

  $pageName = 'testing';
  require_once('header.php');
  require_once "Dao.php";
  $dao = new Dao();

  echo "<p>";
  for ($x = 0; $x < 10; $x++) {
    echo "hello good sir";
    $pronoun = $dao->getPronoun();
    $verb = $dao->getVerb();
    $noun = $dao->getNoun();
    echo strtoupper($pronoun) . " " . $verb . " " . $noun . ".";
    echo "<br>";
  }
  echo "</p>";

  $dao->close();

  /*$hostname = "us-cdbr-iron-east-05.cleardb.net";
  $db = "heroku_d66a31f2e552f3e";
  $user = "b2cf23ed5d39cc";
  $password = "f49471ca";

  $con=mysqli_connect($hostname,$user,$password,$db);
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT word FROM words LIMIT 100";

  if ($result=mysqli_query($con,$sql)) {
    echo "<p>";
    while ($obj=mysqli_fetch_object($result)) {
      #printf("%s\n",$obj->word);
      echo $obj->word . " ";
      echo "<br>";
    }
    echo "</p>";
    // Free result set
    mysqli_free_result($result);
  }
  mysqli_close($con);
  */



  require_once('footer.php');
?>
