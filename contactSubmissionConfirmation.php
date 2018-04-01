<?php
  $pageName = 'submission confirmation';
  require_once('header.php');
  ?>
<div>
  <?php
    // the message
    $msg = $_POST['subject'];
    $msg .= "(sent from user '" . $_POST['username'] . "'')";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    // start of testing
    echo "<p>\$_POST['firstname']: " . $_POST['firstname'] . "</p>";
    echo "<p>\$_POST['lastname']: " . $_POST['lastname'] . "</p>";
    echo "<p>\$msg: " . $msg . "</p>";
    // end of testing
    mail("devankarsann@u.boisestate.edu","contact us form submission from " . $_POST['firstname'] . " " . $_POST['lastname'],$msg);
  ?>
</div>
<?php
  require_once('footer.php');
  ?>
