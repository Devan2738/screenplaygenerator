<?php
  $pageName = 'submission confirmation';
  require_once('header.php');
  ?>
<div>

  <?php
    // the message
    $msg = $_POST['subject'];
    $msg .= "<br>(sent from user '" . $_POST['username'] . "'')";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    mail("devankarsann@u.boisestate.edu","contact us form submission from \"" . $_POST['firstname'] . " " . $_POST['lastname'] . "\" in " . $_POST['Country'],$msg);
  ?>

  <p>Thanks for submitting the contact form! We will take your input into consideration and reply if necessary.</p>
</div>
<?php
  require_once('footer.php');
  ?>
