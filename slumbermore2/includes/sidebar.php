<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<h1 id="productheading">Shop by Product Type:</h1>
<h1 id="productmenu">Shop by Product Type:</h1>
        <ul class="productlist">
           <li><a <?php if($page == 'lighttherapy.php') {print 'class="current"';} ?> href="lighttherapy.php">Light Therapy</a></li>
           <li><a <?php if($page == 'blueblock.php') {print 'class="current"';} ?> href="blueblock.php">Blue Blocking</a></li>
           <li><a <?php if($page == 'whitenoise.php') {print 'class="current"';} ?> href="whitenoise.php">White Noise</a></li>
           <li><a href="store.php">View All</a></li>
        </ul>