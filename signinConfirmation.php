<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<?php
  echo '<p>username: ' . htmlspecialchars($_GET["username"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_GET["password"]) . '</p>';
  ?>
<?php
  require_once('footer.php');
  ?>
