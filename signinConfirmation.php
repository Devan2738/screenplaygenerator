<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<?php
  echo '<p>username: ' . htmlspecialchars($_POST["uname"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_POST["psw"]) . '</p>';
  ?>
  <?php
    $hostname = "us-cdbr-iron-east-05.cleardb.net";
    $db = "heroku_d66a31f2e552f3e";
    $user = "b2cf23ed5d39cc";
    $password = "f49471ca";
    $con=mysqli_connect($hostname,$user,$password,$db);
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM users WHERE email = " . $_POST["uname"];
    if ($result=mysqli_query($con,$sql)) {
      while ($obj=mysqli_fetch_object($result)) {
        echo "username was found";
        $password = $obj->word;
      }
      mysqli_free_result($result);
    }
    if ($password = $_POST["psw"]){
      echo "password matches";
    }
    else {
      echo "password does not match";
    }
  ?>
<?php
  require_once('footer.php');
  ?>
