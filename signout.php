<?php
  $pageName = 'sign out';
  session_unset();
  session_destroy();
  header('Location: ' . 'http://www.screenplaygenerator.com');
  exit; // Ensures, that there is no code _after_ the redirect executed
?>
