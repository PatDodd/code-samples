<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<footer>
  	  <a <?php if($page == 'store.php' || $page == 'lighttherapy.php' || $page == 'blueblock.php' || $page=='whitenoise.php'){ print ' class="current"'; }?> href="store.php">STORE</a>
        <a <?php if($page == 'help.php') {print 'class="current"';}?> href="help.php">HELP</a>
        <a <?php if($page == 'contactme.php') {print 'class="current"';}?> href="contactme.php">CONTACT</a>
        <a <?php if($page == 'aboutus.php') {print 'class="current"';}?> href="aboutus.php">ABOUT US</a>
      
      <p><small>&copy; 2014, All Rights Reserved ~ Site Design by Patrick Dodd</small></p>
      
  </footer>
  </body>
</html>