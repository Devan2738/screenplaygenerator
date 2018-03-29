<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<?php
  echo '<p>username: ' . htmlspecialchars($_POST["uname"]) . '</p>';
  echo '<p>password: ' . htmlspecialchars($_POST["psw"]) . '</p>';
  ?>
<?php
  require_once('footer.php');
  ?>
