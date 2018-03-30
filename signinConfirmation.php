<?php
  session_start();
  $pageName = 'sign in';
  if (!filter_var($_POST["uname"], FILTER_VALIDATE_EMAIL))  {
    $_SESSION["invalid email address"] = 'true';
    header('Location: ' . 'http://www.screenplaygenerator.com/signin.php');
    exit; // Ensures, that there is no code _after_ the redirect executed
  }
    require_once('header.php');

    echo '<p> username: ' . htmlspecialchars($_POST["uname"]) . '</p>';
    echo '<p> password: ' . htmlspecialchars($_POST["psw"]) . '</p>';

    $hostname = "us-cdbr-iron-east-05.cleardb.net";
    $db = "heroku_d66a31f2e552f3e";
    $user = "b2cf23ed5d39cc";
    $dbPassword = "f49471ca";
    $mysqli = new mysqli($hostname, $user, $dbPassword, $db);
    if($mysqli->connect_error) {
      exit('Error connecting to database'); //Should be a message a typical user could understand in production
    }
    $stmt = $mysqli->prepare("SELECT email, password, signUpDate FROM users WHERE email = ?");
    $stmt->bind_param("s", $_POST['uname']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows === 0) {
        echo '<p> the username entered was not found in the database </p>';
        //exit('No rows');
    }
    $stmt->bind_result($email, $password);
    $stmt->fetch();
    echo '<p> $email: ' . $email . '</p>';
    echo '<p> $password: ' . $password . '</p>';
    $stmt->close();
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
    if (strcmp($password,$_POST["psw"])){
      echo '$password' . $password;
      echo '$_POST[psw]' . $_POST["psw"];
      echo "username and password match an existing account";
    }

  require_once('footer.php');
  ?>
