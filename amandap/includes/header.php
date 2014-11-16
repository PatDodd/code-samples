<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
  <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
  <title><?php include('includes/titles.php'); ?> ~ Amanda K. Pitsch</title>
  <meta name="robots" content="noindex,nofollow" />
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/amandap.css">
    
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->

<script>
$(document).ready(function(){
	
 $("#pshow").click(function() { // when toggle is clicked...
 $(".descripttoggle").toggle(); // ... open or close the navigation
 $("#pshow").text($("#pshow").text() == '...read less' ? 'read more...' : '...read less');
 $(".ellipsis").toggle();
 
   });
   
 $("#pshow2").click(function() { // when toggle is clicked...
 $(".descripttoggle2").toggle(); // ... open or close the navigation
 $("#pshow2").text($("#pshow2").text() == '...read less' ? 'read more...' : '...read less');
 $(".ellipsis2").toggle();
 
   });
   
 $("#pshow3").click(function() { // when toggle is clicked...
 $(".descripttoggle3").toggle(); // ... open or close the navigation
 $("#pshow3").text($("#pshow3").text() == '...read less' ? 'read more...' : '...read less');
 $(".ellipsis3").toggle();
 
   });
   
 $("#pshow4").click(function() { // when toggle is clicked...
 $(".descripttoggle4").toggle(); // ... open or close the navigation
 $("#pshow4").text($("#pshow4").text() == '...read less' ? 'read more...' : '...read less');
 $(".ellipsis4").toggle();
 
   });

 $("#jump").click(function() { // when toggle is clicked...
 $("#jumplist").toggle(); // ... open or close the navigation
	$("#plusminus").text($("#plusminus").text() == '-' ? '+' : '-');
   });
  
 $("#mainmenu").click(function() { // when toggle is clicked...
 $("#mobilenav").toggle(); // ... open or close the navigation

   });
 
  //to make #mobilenav toggle responsive to resizing
  $(window).resize(function(){	
	if ($("footer").css("width") == "95%" || $("footer").css("width") == "90%" || $(".btp").css("padding-left") == "60px"){
		$("#mobilenav").hide();
	}
 });
  //to make the sidebarnav & text toggles responsive to resizing
  $(window).resize(function(){	
	if($(".col1 h1").css("display") == "none" || $("footer").css("display") == "none"){
		$(".descripttoggle").hide();
		$(".descripttoggle2").hide();
		$(".descripttoggle3").hide();
		$(".descripttoggle4").hide();
		$("#pshow").text('read more...');
		$("#pshow2").text('read more...');
		$("#pshow3").text('read more...');
		$("#pshow4").text('read more...');
		$(".ellipsis").show();
		$(".ellipsis2").show();
		$(".ellipsis3").show();
		$(".ellipsis4").show();
		$("#jumplist").hide();	
		$("#plusminus").text('+');
		}else {
		$(".descripttoggle").show();
		$(".descripttoggle2").show();
		$(".descripttoggle3").show();
		$(".descripttoggle4").show();
		$(".ellipsis").hide();
		$(".ellipsis2").hide();
		$(".ellipsis3").hide();
		$(".ellipsis4").hide();
		$("#jumplist").show();	
	}
 });

 
});


</script>

</head>
<body>
<header id="top">
 	  
      <div class="logotype">
      <a href="index.php"><img class="logo" id="logo" src="images/amandaplogo.png" alt="Amanda K. Pitsch - Scenic Design"></a>
      </div> 
      <div id="mobilecontainer">
        <a href="#" id="mainmenu"><img src="images/img-toggle.png" alt="menu img"></a>
        <ul id="mobilenav">
          <li><a <?php if($page == 'index.php') {print 'class="current"';}?> href="index.php">scenic design</a></li>
          <li><a <?php if($page == 'artwork.php') {print 'class="current"';}?> href="artwork.php">artwork</a></li>
          <li><a <?php if($page == 'bio.php') {print 'class="current"';}?> href="bio.php">bio & resum&eacute;</a></li>    
        </ul>
       </div>
    <nav>
      <a <?php if($page == 'index.php') {print 'class=" text current"';}?> href="index.php" id="text">scenic design</a>
      <a <?php if($page == 'artwork.php') {print 'class="current"';}?> href="artwork.php" id="text2">a<span class="kern">r</span><span class="kern1">t</span>wo<span class="kern1">r</span>k</a>
      <a <?php if($page == 'bio.php') {print 'class="current"';}?> href="bio.php">bio & resum&eacute;</a>    
  	</nav>
   
</header>