<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<?php
<p>echo 'username: ' . htmlspecialchars($_GET["username"]);</p>
<p>echo 'password: ' . htmlspecialchars($_GET["password"]);</p>
  ?>
<?php
  require_once('footer.php');
  ?>
