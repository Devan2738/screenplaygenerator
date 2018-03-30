<?php
    session_start();
    $pageName = 'sign in';
    require_once('header.php');
    if (isset($_SESSION['invalid email address']))
    {
        echo 'you entered an invalid email address';
    }
    if (isset($_SESSION['email address'])){
        echo '<p>you entered an invalid password, but a correct email</p>';
        echo $_SESSION['email address'];
    }

?>
<div id="signInDiv">
    <form action="signinConfirmation.php" method="post">
        <div class="imgcontainer">
        </div>
        <br>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <!--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>-->
    </form>
</div>
<br>
<?php
  require_once('footer.php');
?>
