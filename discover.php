<?php
  session_start();
  $pageName = 'discover';
  require_once('header.php');
  ?>
  <div class="container">
    <form action="discoverSubmissionConfirmation.php">

      <label for="length">Length</label>
      <select id="length" name="length">
        <option value=">0-60 minutes">0-60 minutes</option>
        <option value="60-120 minutes">60-120 minutes</option>
        <option value="120+ minutes">120+ minutes</option>
      </select>

      <label for="genre">Genre</label>
      <select id="genre" name="genre">
        <option value="comedy">Comedy</option>
        <option value="action">Action</option>
        <option value="drama">Drama</option>
      </select>

      <input type="submit" value="Submit">

  </form>
</div>
<?php
  require_once('footer.php');
  ?>
