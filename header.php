<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="basic.css">
    <title>
      <?php
        session_start();
        if (!isset($_SESSION["info message"]) or !($_SESSION["info message"] === "you need an account to generate screenplays")){
          if ($pageName === 'generate' and !(isset($_SESSION['username']))){
            $_SESSION["info message"] = 'you need an account to generate screenplays';
            header('Location: ' . 'http://www.screenplaygenerator.com');
            exit; // Ensures, that there is no code _after_ the redirect executed
          }
        }
        if (!isset($_SESSION['username'])) {
            if (!isset($_SESSION["info message"])) {
                if ($pageName === 'contact us') {
                  $_SESSION["info message"] = "you need an account to use the 'contact us' form";
                  header('Location: ' . 'http://www.screenplaygenerator.com');
                  exit; // Ensures, that there is no code _after_ the redirect execute
                }
            }
        }
        echo $pageName
        ?>
    </title>
  </head>
  <body>
    <div id="backgroundBorder">
      <div id="onTopOfBackDiv">
        <h1>Screenplay <span><img src="favicon.ico" width=5% text-align: center; alt=""></span> Generator</h1>
        <?php

          if (isset($_SESSION['info message']))
          {
            echo "<h3> " . $_SESSION['info message'] . "</h3>";
            $_SESSION['info message'] = '';
          }
          if (isset($_SESSION['username']))
          {
            echo "<h3> hello " . explode('@', $_SESSION['username'])[0] . "</h3>";
          }
        ?>
        <ul id="linksInTheHeader" margin-left: >
          <!--<li class="headerLinks"><a href="discover.php">discover</a></li>-->
          <?php
          if (isset($_SESSION['username']))
          {
            if ($pageName == 'generate')
              echo "<li class=\"currentPage\"><a href=\"generate.php\">generate</a></li>";
            else
              echo "<li class=\"headerLinks\"><a href=\"generate.php\">generate</a></li>";
          }
          if ($pageName == 'science')
            echo "<li class=\"currentPage\"><a href=\"science.php\">science</a></li>";
          else
            echo "<li class=\"headerLinks\"><a href=\"science.php\">science</a></li>";
          if (isset($_SESSION['username'])){
              echo "<li class=\"headerLinks\"><a href=\"signout.php\">sign out</a></li>";
          }
          else {
            if ($pageName == 'sign in')
              echo "<li class=\"currentPage\"><a href=\"signin.php\">sign in</a></li>";
            else
              echo "<li class=\"headerLinks\"><a href=\"signin.php\">sign in</a></li>";
            if ($pageName == 'sign up')
              echo "<li class=\"currentPage\"><a href=\"signup.php\">sign up</a></li>";
            else
              echo "<li class=\"headerLinks\"><a href=\"signup.php\">sign up</a></li>";
            }
          ?>
        </ul>
