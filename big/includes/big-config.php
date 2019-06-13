<?php

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/
//echo $_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE)
{

    case 'index.php':
        $title = "Sally's BIG Title Page";
        $PageID = 'Welcome!';
    break;
    
    case 'responsive.php':
        $title = "Responsive vs Native";
        $PageID = 'Responsive Website vs Native Mobile Application';
    break;
 
    case 'contactme.php':
        $title = "Contact Sally";
        $PageID = 'Contact Sally';
    break;
    case 'flowchart.php':
        $title = "Final Project Flowchart";
        $logo = 'images/nellologo.jpg';
        $PageID = 'Final Project Flowchart (Google Doc)';
    break;
    case 'calendar.php':
        $title = "Calendar";
        $PageID = 'Google Calendar';
    break;
    case 'youtube.php':
        $title = "YouTube";
        $PageID = 'YouTube';
    break;
    case 'map.php':
        $title = "Map";
        $PageID = 'Google Map';
    break;
    case 'galleries.php':
        $title = "Galleries";
        $PageID = 'Galleries';
    break;
    case 'flexbox.php':
        $title = "Flexbox";
        $PageID = 'Flexbox';
    break;
    case 'carts.php':
        $title = "Shopping Carts";
        $PageID = 'Shopping Carts';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fas fa-door-open';
        $PageID = 'Welcome to my website';
}

$nav1['../index.php'] = "Welcome";
$nav1['index.php'] = "Big";
$nav1['responsive.php'] = "Responsive vs Native";
$nav1['flexbox.php'] = "Flexbox";
$nav1['carts.php'] = "Carts";
$nav1['galleries.php'] = "Galleries";
$nav1['webcam.php'] = "Webcam";
$nav1['youtube.php'] = "YouTube";
$nav1['calendar.php'] = "Calendar";
$nav1['map.php'] = "Googe Map";
$nav1['contactme.php'] = "Contact Sally";

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
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>