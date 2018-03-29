<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<?php
  echo '<p>username: ' . htmlspecialchars($_GET["uname"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_GET["psw"]) . '</p>';
  ?>
<?php
  require_once('footer.php');
  ?>
