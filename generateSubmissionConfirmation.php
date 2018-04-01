<?php
  $pageName = 'submission confirmation';
  require_once('header.php');
  $hostname = "us-cdbr-iron-east-05.cleardb.net";
  $db = "heroku_d66a31f2e552f3e";
  $user = "b2cf23ed5d39cc";
  $password = "f49471ca";
  $con=mysqli_connect($hostname,$user,$password,$db);
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo "<p>Here's your brand new screenplay! Good luck making sense of it.</p>";
  echo "<br>";

  // establishing characters
  $mainCharacter = $_POST['mainCharacter'];
  $otherCharacter = $_POST['otherCharacter'];

  // short = 10 scenes, medium = 20 scenes, long = 30 scenes
  for ($x = 0; $x < 10*$_POST['length']; $x++) {

    // scene description here
    echo "scene number $x: ";
    $sceneDescription = '';
    $sql="SELECT word FROM words WHERE isPreposition = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      $obj=mysqli_fetch_object($result);
      $sceneDescription .= $obj->word . " ";
      mysqli_free_result($result);
    }
    $sql="SELECT word FROM words WHERE isLocation = 1 ORDER BY RAND() LIMIT 1";
    if ($result=mysqli_query($con,$sql)) {
      $obj=mysqli_fetch_object($result);
      $sceneDescription .= $obj->word;
      mysqli_free_result($result);
    }
    // generate description here
    echo "scene description: " . $sceneDescription;

    // decide on random length (within range) of scene
    $sceneLength = rand(8,16);

    // for i in sceneLength
    for ($y = 0; $y < $sceneLength; $y++) {

        // randomly choose between narration and dialog (40/60 split)
        $sceneDeterminer = rand(0,100);

        /*// if narration
        if ($sceneDeterminer <= 40){
            // generate narration
            echo "<p>insert scene narration here<p>";

        }
        // if dialog
        else {*/
        if ($sceneDeterminer >= 0){

            // decide who will speak
            $speakerDeterminer = rand(0, 100);

            if ($speakerDeterminer <= 50){
                $speaker = $mainCharacter;
            } else {
                $speaker = $otherCharacter;
            }

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
            echo strtoupper($speaker) . "<br>" . ucfirst($pronoun) . " " . $verb . " the " . $noun . ".";
            echo "</p>";
        }
        echo "<br>";
     }
  }

  echo "<br>";
  mysqli_close($con);
  require_once('footer.php');
  ?>
