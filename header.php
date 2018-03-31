<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="basic.css">
    <title>
      <?php
        echo $pageName
        ?>
    </title>
  </head>
  <body>
    <div id="backgroundBorder">
      <div id="onTopOfBackDiv">
        <h1>Screenplay <span><img src="favicon.ico" width=5% text-align: center; alt=""></span> Generator</h1>
        <?php
          session_start();
          if (isset($_SESSION['username']))
          {
            echo "<h3> hello " . $_SESSION['username'] . "</h3>";
          }
        ?>
        <ul id="linksInTheHeader" margin-left: >
          <!--<li class="headerLinks"><a href="discover.php">discover</a></li>-->
          <li class="headerLinks"><a href="generate.php">generate</a></li>
          <li class="headerLinks"><a href="science.php">science</a></li>
          <li class="headerLinks"><a href="signin.php">sign in</a></li>
          <li class="headerLinks"><a href="signup.php">sign up</a></li>
        </ul>
