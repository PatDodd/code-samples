<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<h1>Shop by Product Type:</h1>
        <ul>
        	<li<?php if($page == 'lighttherapy.php'){print 'class="current"';} ?>><a href="lighttherapy.php">Light Therapy</a></li>
           <li<?php if($page == 'blueblock.php'){print 'class="current"';} ?>><a href="blueblock.php">Blue Blocking</a></li>
           <li<?php if($page == 'whitenoise.php'){print 'class="current"';} ?>><a href="whitenoise.php">White Noise</a></li>
           <li><a href="#">Ear Plugs</a></li>
           <li><a href="#">Weekly Deals</a></li>
        </ul>