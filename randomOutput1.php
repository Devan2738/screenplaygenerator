<?php
  $pageName = 'testing';
  require_once('header.php');
  require_once "Dao.php";
  $dao = new Dao();
  echo 'hello from random output 1 .php';
  $words = $dao->getWords();
  require_once('footer.php');
?>
