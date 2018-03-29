<?php
  $pageName = 'sign up';
  require_once('header.php');
  ?>
<p>You have submitted the sign up form.</p>
<?php
  echo '<p>email: ' . htmlspecialchars($_GET["email"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_GET["password"]) . '</p>';
  echo '<p>password-repeat: ' . htmlspecialchars($_GET["password-repeat"]) . '</p>';
  ?>
<?php
  require_once('footer.php');
  ?>
