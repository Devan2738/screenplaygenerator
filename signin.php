<?php
    $pageName = 'sign in';
    require_once('header.php');
?>
<div id="signInDiv">
    <form action="signinConfirmation.php">
        <div class="imgcontainer">
        </div>
        <br>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
<br>
<?php
  require_once('footer.php');
?>
