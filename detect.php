<?php
  $pageName = 'detect';
  require_once('header.php');
  ?>
  <div id="scienceDiv">
    <p>This is the device detection page.</p><br>
      <?php
        // Include and instantiate the class.
        require_once "Mobile-Detect-2.8.31/Mobile_Detect.php";
        $detect = new Mobile_Detect;

        // Any mobile device (phones or tablets).
        if ( $detect->isMobile() ) {
          echo "<p>you are on a mobile device</p>";
        }

        // Any tablet device.
        if( $detect->isTablet() ){
         echo "<p>you are on a tablet</p>";
        }

        // Exclude tablets.
        if( $detect->isMobile() && !$detect->isTablet() ){
         echo "<p>you are on a mobile device which is not a tablet</p>";
        }

        // Check for a specific platform with the help of the magic methods:
        if( $detect->isiOS() ){
         echo "<p>you are using an iOS device</p>";
        }

        if( $detect->isAndroidOS() ){
         echo "<p>you are using an andriod device</p>";
        }
       ?>
  </div>
<?php
  require_once('footer.php');
  ?>
