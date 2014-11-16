<?php
/*
switch.php - will allow us to swap html pieces dynamically
include this file at the top 'top.php'!
*/

//place URL & labels in array here for navigation:
$nav1['index.php'] = "Home";
$nav1['store.php'] = "Store";
$nav1['contact.php'] = "Contact";
$nav1['aboutus.php'] = "About Us";


//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

/* below we can create 'case' statements to accommodate
 unique data items (title, a page id and an image) that will
reside in the 'top.php' file
*/
switch(THIS_PAGE)
{
  case "index.php":
  $myTitle = "Wonderland Home Page!";
  $myPic = "chesire-cat.gif";
  $myPageID = "Welcome!";
  break;
  
  case "alice.php":
  $myTitle = "Alice Page!";
  $myPic = "croquet.gif";
  $myPageID = "Alice's Page!";
  break; 
  
  case "rabbit.php":
  $myTitle = "Rabbit Page!";
  $myPic = "rabbit.gif";
  $myPageID = "Rabbit's Page!";
  break;
  
  case "queen.php":
  $myTitle = "Queen Page!";
  $myPic = "off-with-her-head.gif";
  $myPageID = "The Red Queen's Page!";
  break;
  
  case "madhatter.php":
  $myTitle = "Mad Hatter's Page!";
  $myPic = "mad-hatter.gif";
  $myPageID = "Mad Hatter's Page!";
  break;        

  //fallback values for undefined pages
  default:
  $myTitle = THIS_PAGE; #the file name is unique
  $myPic = "chesire-cat.gif";  
  $myPageID = "Welcome!";
}
//--------------END CONFIG AREA --------------------------------
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="current"><a  href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


#uncomment to test:
/*
echo 'THIS_PAGE is: ' . THIS_PAGE . '<br />';
echo '$myTitle is: ' . $myTitle . '<br />';
echo '$myPageID is: ' . $myPageID . '<br />';
echo '$myPic is: ' . $myPic . '<br />';
echo 'Nav:<br />';
echo makeLinks($nav1);
die;
*/

/*

saved below as the original HTML for the nav:

<nav>
	<ul id="navlist">
		<li id="active"><a href="index.php" id="current">Welcome</a></li>
		<li><a href="alice.php">About Alice</a></li>
		<li><a href="rabbit.php">About the Rabbit</a></li>
		<li><a href="queen.php">About the Queen</a></li>
		<li><a href="madhatter.php">Mad Hatter</a></li>
	</ul>
</nav>

*/


?>