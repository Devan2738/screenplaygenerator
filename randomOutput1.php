<?php
  $pageName = 'testing';
  require_once('header.php');
  require_once "Dao.php";
  $dao = new Dao();
  $words = $dao->getWords();
?>
  <ul>
    <?php foreach ($words as $word) {
      echo "<li> . $word . </li>";
    } ?>
  </ul>
<?php
  require_once('footer.php');
?>
