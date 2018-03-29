<?php
  $pageName = 'sign in';
  require_once('header.php');
  ?>
<p>You have submitted the sign in form.</p>
<p>echo 'username: ' . htmlspecialchars($_POST["username"]);</p>
<p>echo 'password: ' . htmlspecialchars($_POST["password"]);</p>
<?php
  require_once('footer.php');
  ?>
