<?php
  $pageName = 'contact us';
  require_once('header.php');
  ?>
  <div id="contactFormDiv" class="">
    <div class="container">
      <form action="contactSubmissionConfirmation.php" method="post">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." >

        <label for="lname"><br>Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country"><br>Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>

        <!--<label for="subject"><br>Subject</label>-->
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" >
        <input type="submit" value="Submit">

    </form>
  </div>
</div>
<?php
  require_once('footer.php');
  ?>
