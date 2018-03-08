<?php
  $pageName = 'testing';
  require_once('header.php');
  require_once "Dao.php";
  $dao = new Dao();
  $words = $dao->getWords();
?>
  <ul>
    <?php
      print_r($words);
    ?>
  </ul>
<?php
  require_once('footer.php');
?>
