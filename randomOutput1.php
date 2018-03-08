<?php
  $pageName = 'testing';
  require_once('header.php');
  require_once('Dao.php');
  ?>
<p>random output: <?php require_once('randomGenerator1.php');?> </p>
<p></p>
<p>something from database:
  <?php
    $dao = new Dao();
    echo $dao->getWords();
  ?>
</p>
<?php
  require_once('footer.php');
  ?>
