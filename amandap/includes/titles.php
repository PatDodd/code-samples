<?php

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Scenic Design'; }

if ($page =='artwork.php') { print 'Artwork'; }

if ($page == 'bio.php') { print 'Bio'; }

if ($page == 'resume.pdf') { print 'Resum&eacute;'; }

if ($page == 'disclaimer.php') { print 'Disclaimer'; }

?>
