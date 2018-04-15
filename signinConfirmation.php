<?php
  $pageName = 'sign in';
  require_once('header.php');
  $email = "";
  $password = "";
  if (!filter_var($_POST["uname"], FILTER_VALIDATE_EMAIL))  {
    $_SESSION["invalid email address"] = 'true';
//    header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
//    exit; // Ensures, that there is no code _after_ the redirect executed
}else {
    $output = '<p> (before db) username: ' . htmlspecialchars($_POST["uname"]) . '</p>';
    $output .= '<p> (before db) password: ' . htmlspecialchars($_POST["psw"]) . '</p>';

    $hostname = "us-cdbr-iron-east-05.cleardb.net";
    $db = "heroku_d66a31f2e552f3e";
    $user = "b2cf23ed5d39cc";
    $dbPassword = "f49471ca";
    $mysqli = new mysqli($hostname, $user, $dbPassword, $db);
    if($mysqli->connect_error) {
      exit('Error connecting to database'); //Should be a message a typical user could understand in production
    }
try{
    $stmt = $mysqli->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $_POST['uname']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows === 0) {
        $_SESSION["info message"] = '<p> if you do no have an existing account, please create one </p>';
//        header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
//        exit;
        //exit('No rows');
    }
    $stmt->bind_result($email, $password);
    $stmt->fetch();
    $output .= '<p> (db info) $email: ' . $email . '</p>';
    $output .= '<p> (db info) $password: ' . $password . '</p>';
    $stmt->close();
  } catch (Exception $e){
    $_SESSION["info message"] = '<p> if you do no have an existing account, please create one </p>';
//    header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
//    exit;
  }
}
    /*$conn=mysqli_connect($hostname,$user,$password,$db);
    //if (mysqli_connect_errno()) {
    //  echo "Failed to connect to MySQL: " . mysqli_connect_error()
    //}
    $sql="SELECT * FROM users WHERE email = " . $_POST["uname"];
    if ($result=mysqli_query($conn,$sql)) {
      if ($obj=mysqli_fetch_object($result)) {
        $_SESSION['email address'] = $_POST["uname"];
        //echo "username was found";
        $password = $obj->password;
        echo '$password' . $password;
        echo '$_POST[psw]' . $_POST["psw"];
      }
      mysqli_free_result($result);
    }*/
    /*if ($password != $_POST["psw"]){
      $_SESSION["invalid password"] = 'true';
      header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
      exit; // Ensures, that there is no code _after_ the redirect executed
    }
    else {
      echo 'username and password match an existing account!';
    }*/
    if ($_POST["uname"] == $email and $_POST["psw"] == $password){
      //echo '$password' . $password;
      //echo '$_POST[psw]' . $_POST["psw"];
      $_SESSION['username'] = $_POST["uname"];
      $output .= "<p>username and password match an existing account</p>";
      $_SESSION['info message'] = "log in was successful!";
      header('Location: ' . 'http://www.screenplaygenerator.com');
      exit;
    }
    else {
        if ($_POST["uname"] == $email){
          $_SESSION['email address'] = $_POST["uname"];
          $_SESSION["info message"] .= "you entered the wrong password";
        }
        header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
        exit;
    }

  require_once('footer.php');
  ?>
