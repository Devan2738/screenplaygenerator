<?php
    $pageName = 'sign up';
    require_once('header.php');
    $email = '';
    $order66 = 'false';
    if (isset($_SESSION['invalid email address']))
    {
        echo '<p>please enter a valid email address</p>';
        $order66 = 'true';
    }
    if (isset($_SESSION['email address'])){
        //echo '<p> session email: ' . $_SESSION['email address'] . '</p>';
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
<!--<div id="signInSignUpDiv">-->
<!--div id="signUpDiv"-->
    <form action="signupConfirmation.php" style="border:1px solid #ccc" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <p>(include a number and make sure your pasword is longer than 5 characters)</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" value="<?php echo $email?>" name="email" required>

            <label for="password"><br><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="password-repeat"><br><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <!--<label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>-->

            <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->

            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
<!--/div-->
<br>
<?php
  require_once('footer.php');
?>
