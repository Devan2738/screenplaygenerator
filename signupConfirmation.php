<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign up form.</p>
<p>echo 'email: ' . htmlspecialchars($_POST["email"]);</p>
<p>echo 'password: ' . htmlspecialchars($_POST["password"]);</p>
<p>echo 'password-repeat: ' . htmlspecialchars($_POST["password-repeat"]);</p>
<?php
  require_once('footer.php');
  ?>
