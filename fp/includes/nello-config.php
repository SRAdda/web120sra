<?php

/*
nello-config.php
Used to store all of our Nello of Seattle configuration information
*/
//echo $_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE)
{
    case 'nelloindex.php':
        $title = "Nello";
        $PageID = "<a href='nelloindex.php'>HAIR & MAKEUP DESIGN</a><a href='tel:012064410304'> &#45; 206.441.0304</a>";
    break;

    case 'profile.php':
        $title = "Profile";
        $PageID = 'PROFILE';
    break;
    
    case 'gallery.php':
        $title = "Gallery";
        $PageID = 'GALLERY';
    break;
 
    case 'portfolio.php':
        $title = "Portfolio";
        $PageID = 'PORTFOLIO';
    break;

    case 'brides.php':
        $title = "Brides";
        $PageID = 'BRIDAL AND SPECIAL OCCASION';
    break;

    case 'services.php':
        $title = "Services";
        $PageID = 'SERVICES BY NELLO';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $PageID = 'CALENDAR';
    break;

    case 'map.php':
        $title = "Map";
        $PageID = 'MAP TO NELLO';
    break;
    
    case 'contactme.php':
        $title = "Contact";
        $PageID = 'CONTACT NELLO';
    break;

    default:
        $title = THIS_PAGE;
        $PageID = 'NELLO ADDABBO';
}

$nav1['../index.php'] = "Portal";
$nav1['nelloindex.php'] = "Nello";
$nav1['profile.php'] = "Profile";
$nav1['gallery.php'] = "Gallery";
    $nav2['portfolio.php'] = "Portfolio";
    $nav2['brides.php'] = "Brides";
$nav1['services.php'] = "Services";
    $nav2['calendar.php'] = "Calendar";
    $nav2['map.php'] = "Location";
$nav1['contact.php'] = "Contact Nello";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links

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
}*/

?>