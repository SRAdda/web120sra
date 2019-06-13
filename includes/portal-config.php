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
        $title = "Sally's WEB120 Title Page";
        $logo = 'far fa-portrait';
        $PageID = 'Welcome!';
    break;
    
    case 'aia.php':
        $title = "Sally's Final Project AIA";
        $logo = 'far fa-users';
        $PageID = 'Audience, Issues and Approach';
        $logo_color = ' style="color:#00f"';
    break;
 
    case 'contactme.php':
        $title = "Sally's WEB120 Contact Page";
        $logo = 'far fa-envelope';
        $PageID = 'Contact Sally';
        $logo_color = ' style="color:#ff0"';
    break;

    case 'flowchart.php':
        $title = "Final Project Flowchart";
        $logo = 'images/nellologo.jpg';
        $PageID = 'Final Project Flowchart (Google Doc)';
    break;

    case 'nelloindex.php':
        $title = "Nello";
        $logo = 'images/nellologo.jpg';
        $PageID = 'Final Project';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fas fa-door-open';
        $PageID = 'Welcome to my website';
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/nelloindex.php'] = "Final Project";
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