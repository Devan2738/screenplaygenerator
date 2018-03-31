<?php
  $pageName = 'sign up';
  require_once('header.php');
  ?>
<p>You have submitted the sign up form.</p>
<?php
  echo '<p>email: ' . htmlspecialchars($_POST["email"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_POST["psw"]) . '</p>';
  echo '<p>password-repeat: ' . htmlspecialchars($_POST["psw-repeat"]) . '</p>';
  ?>
<?php
  require_once('footer.php');
  ?>
