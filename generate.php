<?php
  $pageName = 'generate';
  require_once('header.php');
  ?>
  <div class="container">
    <form action="generateSubmissionConfirmation.php">

      <label for="fname">Main Character 1</label>
      <input type="text" id="main1" name="mainCharacter" placeholder="main character 1..">

      <label for="fname">Main Character 2</label>
      <input type="text" id="main2" name="mainCharacter" placeholder="main character 2..">

      <label for="year">Year</label>
      <select id="length" name="length" value="2000-present">
        <option value="1900-1950">1900-1950</option>
        <option value="1951-2000">1951-2000</option>
        <option value="2000-present">2000-present</option>
      </select>

      <label for="length">Length</label>
      <select id="length" name="length" value="1">
        <option value="1">short</option>
        <option value="2">medium</option>
        <option value="3">long</option>
        <option value="4">extra long</option>
      </select>

      <label for="genre">Genre</label>
      <select id="genre" name="genre" value="comedy">
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
