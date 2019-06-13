<?php include 'nello-config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/nello.css" />
  <link rel="stylesheet" href="css/nav.css"  />
  
  <!-- jQuery -->
   <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <!-- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <link rel="stylesheet" href="css/lightbox.css" />
  <script src="js/script.js"></script>
  <script src="js/lightbox.js"></script>

   </head>
   <body>
    <div class="wrapper">

     <!-- A wrapper can be used to contain the web page -->
       <header> 
        <div id="wrapperHeader">
            <div id="header">
              <a href="nelloindex.php"><img src="images/nellologo.jpg" alt="Nello logo" /></a>
            </div>
        </div>    
       <nav id="cssmenu" class="align-center">
        <ul>

          <li><a href="../index.php">WEB120</a></li>
          <li><a href="nelloindex.php">NELLO</a></li>
            <!-- drop down menu for Gallery pages -->
          <li><a href="gallery.php">GALLERY</a>
            <ul>
                <li><a href="portfolio.php">PORTFOLIO</a></li>
                <li><a href="brides.php">BRIDES</a></li>
            </ul>         
          </li>
          <li><a href="profile.php">PROFILE</a></li>
          <!-- drop down menu for Services pages -->
          <li><a href="services.php">SERVICES</a>
            <ul>
                <li><a href="map.php">LOCATION</a></li>
            </ul>         
          </li>
          <li><a href="contactme.php">CONTACT</a></li>
          
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        </ul>     
       </nav>
    </header>

<section>
  <img class="background" src="images/heidi1440x1064.jpg" alt="Nello putting make-up on client">
  <h1 class="pageID"><?=$PageID?></h1>
