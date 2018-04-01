<?php
  $pageName = 'generate';
  require_once('header.php');
  ?>
  <div class="container">
    <form action="generateSubmissionConfirmation.php" method="post">

      <label for="fname">Main Character</label>
      <input type="text" id="main1" name="mainCharacter" value="<?php echo explode('@', $_SESSION['username'])[0] ?>" placeholder="main character 1..">

      <label for="fname"><br>Main Character 2</label>
      <input type="text" id="main2" name="otherCharacter" placeholder="main character 2..">

      <!--<label for="year"><br>Year</label>
      <select id="length" name="length" value="2000-present">
        <option value="1900-1950">1900-1950</option>
        <option value="1951-2000">1951-2000</option>
        <option value="2000-present">2000-present</option>
      </select>-->

      <label for="length"><br>Length</label>
      <select id="length" name="length" value="1">
        <option value="1">short</option>
        <option value="2">medium</option>
        <option value="3">long</option>
      </select>

      <!--
      <label for="genre"><br>Genre</label>
      <select id="genre" name="genre" value="comedy">
        <option value="comedy">Comedy</option>
        <option value="action">Action</option>
        <option value="drama">Drama</option>
      </select>-->

      <input type="submit" value="Submit">

  </form>
</div>
<?php
  require_once('footer.php');
  ?>
