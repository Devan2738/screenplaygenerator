<?php
  $pageName = 'discover';
  require_once('header.php');
  ?>
  <div class="container">
    <form action="discoverSubmissionConfirmation.php">

      <label for="length">Length</label>
      <select id="length" name="length">
        <option value="0-30 minutes">short</option>
        <option value="30-60 minutes">medium</option>
        <option value="60-90 minutes">not medium or long</option>
        <option value="90+ minutes">long</option>
      </select>

      <label for="genre">Genre</label>
      <select id="genre" name="genre">
        <option value="comedy">Comedy</option>
        <option value="action">Action</option>
        <option value="drama">Drama</option>
        <option value="documentary">documentary</option>
      </select>

      <input type="submit" value="Submit">

  </form>
</div>
<?php
  require_once('footer.php');
  ?>
