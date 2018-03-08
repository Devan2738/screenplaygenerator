<?php
  $pageName = 'testing';
  require_once('header.php');
  ?>
<p>random output: <?php require_once('randomGenerator1.php');?> </p>
<p></p>
<p>something from database:
  <?php
    require_once('Dao.php');
    $dao = new Dao();
    $wordList = $dao->getWords();
    for ($wordList as $word) {
      echo "$word\n";
    }
  ?>
</p>
<?php
  require_once('footer.php');
  ?>
