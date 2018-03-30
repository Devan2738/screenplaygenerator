<?php
  session_start();
  $pageName = 'sign in';
  /*if (!filter_var($_POST["uname"], FILTER_VALIDATE_EMAIL))  {
    $_SESSION["invalid email address"] = 'true';
    header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
    exit; // Ensures, that there is no code _after_ the redirect executed
  }*/
  require_once('header.php');

      echo '<p>username: ' . htmlspecialchars($_POST["uname"]) . '</p>';
      echo '<p>password: ' . htmlspecialchars($_POST["psw"]) . '</p>';

      $hostname = "us-cdbr-iron-east-05.cleardb.net";
      $db = "heroku_d66a31f2e552f3e";
      $user = "b2cf23ed5d39cc";
      $password = "f49471ca";
      $con=mysqli_connect($hostname,$user,$password,$db);
      //if (mysqli_connect_errno()) {
      //  echo "Failed to connect to MySQL: " . mysqli_connect_error();
      //}
      $sql="SELECT * FROM users WHERE email = " . $_POST["uname"];
      if ($result=mysqli_query($con,$sql)) {
        if ($obj=mysqli_fetch_object($result)) {
          $_SESSION['email address'] = $_POST["uname"];
          //echo "username was found";
          $password = $obj->password;
          echo '$password: ' . $password;
          echo '$_POST["psw"] ' . $_POST["psw"];
        }
        mysqli_free_result($result);
      }
      /*if ($password != $_POST["psw"]){
        $_SESSION["invalid password"] = 'true';
        header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
        exit; // Ensures, that there is no code _after_ the redirect executed
      }
      else {
        echo 'username and password match an existing account!';
      }*/
      if ($password = $_POST["psw"])
        echo "username and password match an existing account";
  ?>
<?php
  require_once('footer.php');
  ?>
