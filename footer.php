        <div id="footerContainer">
          <ul id="footerLinks" class="horizontalLinks">
            <?php
              if (isset($_SESSION['username'])){
                  echo  "<li class=\"footerLinks\"><a href=\"contactus.php\">contact us</a></li>";
              }
            ?>
            <li class="footerLinks"><a href="careers.php">careers</a></li>
            <li class="footerLinks"><a href="commonquestions.php">common questions</a></li>
            <li class="footerLinks"><a href="aboutus.php">about us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
