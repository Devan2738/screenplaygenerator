<?php
    $pageName = 'sign in';
    require_once('header.php');
    $email = '';
    $order66 = 'false';
    if (isset($_SESSION['invalid email address']))
    {
        echo '<p>you did not enter an email address</p>';
        $order66 = 'true';
    }
    if (isset($_SESSION['email address'])){
        echo '<p>you entered an invalid password, but a correct email</p>';
        //echo $_SESSION['email address'];
        $email  = $_SESSION['email address'];
        $order66 = 'true';
    }
    if (isset($_SESSION['info message'])){
        echo '<p>' . $_SESSION['info message'] . '</p>';
        $order66 = 'true';
    }
    if ($order66 == 'true'){
      session_unset();
      session_destroy();
    }
    echo '<p>';
    echo '</p>';
?>
<!--div id="signInDiv"-->
    <form action="signinConfirmation.php" method="post">
        <div class="imgcontainer">
        </div>
        <br>
        <div class="container">
          <p><b>You are on the Sign In Page</b></p><br>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter email" value = "<?php echo $email ?>" name="uname" required>

            <label for="password"><br><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <!--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>-->
    </form>
<!--/div-->
<br>
<?php
  require_once('footer.php');
?>
