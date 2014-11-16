<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
  <title><?php include('includes/titles.php'); ?> - Slumbermore</title>
  <meta name="robots" content="noindex,nofollow" />
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/slumbermoretest.css">
    
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
<script>

$(document).ready(function(){
$("#mobmenbtn").click(function() { // when toggle is clicked...
 $("#mobiletrigger").toggle(); // ... open or close the navigation

   });

  $("#productmenu").click(function() { // when toggle is clicked...
  $(".productlist").toggle(); // ... open or close the navigation
      
   });

  //to make #mobilenav toggle responsive to resizing
  $(window).resize(function(){	
	if ($("#search2").css("display") == "block"){
		$("#mobiletrigger").hide();
	}else{
		$("#mobiletrigger").show();	
	}
 });

  //to make product type toggle responsive to resizing
  $(window).resize(function(){  
  if ($("#productmenu").css("display") == "block" || $("#search2").css("display") == "block"){
    $(".productlist").hide();
  }else{
    $(".productlist").show(); 
  }
 });
});

</script>

</head>

<body>
  <header>
        
        <a href="index.php"><img id="logo" src="images/logo.png" alt="image"></a>
      	 <img id="mobmenbtn" src="images/img-toggle.png" alt="Mobile Menu Button">
        
		<div id="unav">
        <a href="">LOG-IN</a>
        <a href="" class="marleft">CART</a>
     </div>
     
        
        <nav id="mobiletrigger">
        <a <?php if($page == 'store.php' || $page == 'lighttherapy.php' || $page == 'blueblock.php' || $page=='whitenoise.php'){ print ' class="current"'; }?> href="store.php">STORE</a>
        <a <?php if($page == 'help.php') {print 'class="current"';}?> href="help.php">HELP</a>
        <a <?php if($page == 'contactme.php') {print 'class="current"';}?> href="contactme.php">CONTACT</a>
        <a <?php if($page == 'aboutus.php') {print 'class="current"';}?> href="aboutus.php">ABOUT US</a>
        <div id="mobileadd">
        <a href="">LOG-IN</a>
        <a href="" class="marleft">CART</a>
        </div>
        
        
       
        <div id="search">
        <input type="text" placeholder="Search here..." />&nbsp;<button type="submit" value="Search">SEARCH</button>
        </div>
        </nav> 
        
        <div id="search2">
        <input type="text" placeholder="Search here..." />&nbsp;<button type="submit" value="Search">SEARCH</button>
        </div>

  </header>
