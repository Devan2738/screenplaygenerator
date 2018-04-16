<?php
  $pageName = 'contact us';
  require_once('header.php');
  ?>
  <!--
  <div id="contactFormDiv" class="">
    <div class="container">
      <form action="contactSubmissionConfirmation.php" method="post">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." >

        <label for="lname"><br>Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
        <input type="hidden" name="username" value=">?php echo $_SESSION['username'] ?>">
        <input type="submit" value="Submit">
    </form>
  </div>
</div>
-->
<p><b>Contact Us Page</b></p><br>
<p>heroko doesn't natively support emailing from php</p>
<p>we will be working on an add-on or work around soon!</p>
<br>
<p>for now, keep your opinions to yourself</p>
<?php
  require_once('footer.php');
  ?>
