<?php
  $pageName = 'homepage';
  require_once('header.php');
  if (!isset($_SESSION['username']))
  {
    echo "<p>To generate screen plays, please sign into your account or make a new account.</p>";
  }
  ?>
<?php
  require_once('footer.php');
  ?>
