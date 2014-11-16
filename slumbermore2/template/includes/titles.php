<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page =='store.php' || $page=='lighttherapy.php' || $page=='blueblock.php' || $page=='whitenoise.php') { print 'Store'; }

if ($page == 'help.php') { print 'Help'; }

if ($page == 'contact.php') { print 'Contact'; }

if ($page == 'aboutus.php') { print 'About Us'; }

?>