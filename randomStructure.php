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

  for ($x = 0; $x < 10; $x++) {
    echo "<p>";
    $initStructDeterminer = rand(0, 100);
    $output = '';
    if ($initStructDeterminer < 60){
      $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
      if ($result=mysqli_query($con,$sql)) {
        while ($obj=mysqli_fetch_object($result)) {
          $interjection = $obj->word;
        }
        mysqli_free_result($result);
      }
      $output .= $interjection;
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
      $output .= $interjection;
    }
    else if ($initStructDeterminer < 90) {
      $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
      if ($result=mysqli_query($con,$sql)) {
        while ($obj=mysqli_fetch_object($result)) {
          $interjection = $obj->word;
        }
        mysqli_free_result($result);
      }
      $output .= $interjection;
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
      $output .= ucfirst($pronoun) . " " . $verb . " the " . $noun;
    }
    else {
      $sql="SELECT word FROM words WHERE isInterjection = 1 ORDER BY RAND() LIMIT 1";
      if ($result=mysqli_query($con,$sql)) {
        while ($obj=mysqli_fetch_object($result)) {
          $interjection = $obj->word;
        }
        mysqli_free_result($result);
      }
      $output .= $interjection;
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
      $output .= ucfirst($pronoun) . " " . $verb . " the " . $noun;
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
    echo $output;
    echo "</p>";
  }
  echo "<br>";
  mysqli_close($con);
  require_once('footer.php');
?>
