<?php
  $pageName = 'homepage';
  require_once('header.php');
  if (!isset($_SESSION['username']))
  {
    echo "<p>To generate screen plays, please sign into your account or make a new account.</p>";
  }
  else
  {
    echo "<p> Are you ready to generate more screenplays? Click on the 'generate' tab when you're ready.</p>";
  }
  ?>
<?php
  require_once('footer.php');
  ?>
