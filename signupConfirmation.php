<?php
  $pageName = 'sign up';
  require_once('header.php');
  ?>
<p>You have submitted the sign up form.</p>
<?php
<p>echo 'email: ' . htmlspecialchars($_GET["email"]);</p>
<p>echo 'password: ' . htmlspecialchars($_GET["password"]);</p>
<p>echo 'password-repeat: ' . htmlspecialchars($_GET["password-repeat"]);</p>
  ?>
<?php
  require_once('footer.php');
  ?>
