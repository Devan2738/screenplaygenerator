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
    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
    exit; // Ensures, that there is no code _after_ the redirect executed
  }
  try{
      $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $stmt->store_result();
      if($stmt->num_rows > 0) {
          $_SESSION["info message"] = '<p> that username already exists! please use a different email </p>';
          header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
          exit;
          //exit('No rows');
      }
      $stmt->close();
    } catch (Exception $e){
      $_SESSION["info message"] = '<p> oops an error occurred while making your account </p>';
      header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
      exit;
    }
  if ($_SESSION['psw'] != $_SESSION['psw-repeat']){
    $_SESSION["email address"] = $_POST['email'];
    header('Location: ' . 'http://www.screenplaygenerator.com/signup.php');
    exit; // Ensures, that there is no code _after_ the redirect executed
  }

  /*at this point, we can assume that the account creation was successful*/
  $_SESSION['info message'] = "account creation was successful! (but account was not added to db yet)";
  header('Location: ' . 'http://www.screenplaygenerator.com');
  exit;
  ?>
<?php
  require_once('footer.php');
  ?>
