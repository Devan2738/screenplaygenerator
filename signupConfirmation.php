<?php
  $pageName = 'sign up';
  require_once('header.php');
  ?>
<!--<p>You have submitted the sign up form.</p>-->
<?php

  $output = '';
  $output .= '<p>email: ' . htmlspecialchars($_POST["email"]) . '</p>';
  $output .= '<p>password: ' . htmlspecialchars($_POST["psw"]) . '</p>';
  $output .= '<p>password-repeat: ' . htmlspecialchars($_POST["psw-repeat"]) . '</p>';

  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  {
    $_SESSION["invalid email address"] = 'true';
//    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
//    exit; // Ensures, that there is no code _after_ the redirect executed
  }
  $hostname = "us-cdbr-iron-east-05.cleardb.net";
  $db = "heroku_d66a31f2e552f3e";
  $user = "b2cf23ed5d39cc";
  $dbPassword = "f49471ca";
  $mysqli = new mysqli($hostname, $user, $dbPassword, $db);
  if($mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
  }
  $_SESSION["name exists"] = "";
  $_SESSION["info message"] = "";
  try{
      $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $stmt->store_result();
      if($stmt->num_rows > 0) {
          $_SESSION["name exists"] = "true";
          $_SESSION["info message"] .= 'that username already exists! please use a different email<br>';
//          header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
//          exit;
          //exit('No rows');
      }
      $stmt->close();
    } catch (Exception $e){
      $_SESSION["info message"] = '<p> oops an error occurred while making your account </p>';
      header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
      exit;
    }
  if (!($_POST['psw'] === $_POST['psw-repeat'])) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
      $_SESSION["email address"] = $_POST['email'];
    $_SESSION['info message'] .= "please enter the same password twice<br>";
//    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
//    exit; // Ensures, that there is no code _after_ the redirect executed
  }
  // HERE IS MY PHP REGEX
  if(1 != preg_match('~[0-9]~', $_POST['psw'])){
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
      $_SESSION["email address"] = $_POST['email'];
    $_SESSION['info message'] .= "please enter a password that contains numbers<br>";
//    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
//    exit; // Ensures, that there is no code _after_ the redirect executed
  }
  if(strlen($_POST['psw']) < 6){
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
      $_SESSION["email address"] = $_POST['email'];
    $_SESSION['info message'] .= "please enter a password that is 6 or more characters long<br>";
//    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
//    exit; // Ensures, that there is no code _after_ the redirect executed
  }
  /* new code to work on*/
  if (strlen($_POST['psw']) >= 6 and preg_match('~[0-9]~', $_POST['psw']) == 1 and ($_POST['psw'] === $_POST['psw-repeat']) and $_SESSION["name exists"] != "true" and filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
  try{
      $stmt = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
      $stmt->bind_param("ss", $_POST['email'], hash("sha256", $_POST['psw']));
      $stmt->execute();
      $stmt->close();
    } catch (Exception $e){
      $_SESSION["info message"] = '<p> oops an error occurred while making your account </p>';
      header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
      exit;
    }
  }
  else{
    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
    exit; // Ensures, that there is no code _after_ the redirect executed
  }
    /* end of new code to work on */
  /*at this point, we can assume that the account creation was successful*/
  $_SESSION['info message'] = "account creation was successful!";
  $_SESSION['username'] = $_POST['email'];
  header('Location: ' . 'http://www.screenplaygenerator.com');
  exit;
  ?>
<?php
  require_once('footer.php');
  ?>
