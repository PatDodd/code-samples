<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<footer>
      <a <?php if($page == 'index.php') {print 'class="current2"';}?> href="index.php" id="text3">scenic design</a>
      <a <?php if($page == 'artwork.php') {print 'class="current2"';}?> href="artwork.php" id="text4">a<span class="kern">r</span><span class="kern1">t</span>wo<span class="kern1">r</span>k</a>
      <a <?php if($page == 'bio.php') {print 'class="current2"';}?> href="bio.php">bio & resum&eacute;</a>
      <a href="#logo" class="btp">back to top</a>
       <p>&copy; 2014, All Rights Reserved ~ Site Design by Patrick Dodd</p>
        <small>
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~
      <a href="disclaimer.php">disclaimer</a>
      </small>
      
    </footer>  
    
<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js"></script>
<script>
$(document).ready(function() {
 $(".fancybox").fancybox({
        helpers:  {
            thumbs : {
                width: 50,
                height: 50
            }
        }
    });
	});
	</script>
    
</body>
</html>