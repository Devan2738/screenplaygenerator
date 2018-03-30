<?php

  $pageName = 'testing';
  require_once('header.php');
  //require_once 'Dao.php';
  require_once 'Foo.php';
  //$dao = new Dao();
  echo "<p> serenity now </p>";
  $obj = new Foo();
  echo $obj->bar, PHP_EOL;
  echo $obj->bar(), PHP_EOL;
  /*echo "<p>";
  for ($x = 0; $x < 10; $x++) {
    $pronoun = $dao->getPronoun();
    $verb = $dao->getVerb();
    $noun = $dao->getNoun();
    echo "<p>";
    echo ucfirst($pronoun) . " " . $verb . " the " . $noun . ".";
    echo "</p>";
    echo "<br>";
  }
  echo "</p>";
  $dao->close();*/
  require_once('footer.php');
?>
