<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Nello Addabbo LLC Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!-- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <!-- Icon Library -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
  <link href="css/lightbox.css" rel="stylesheet" />
  <script src="js/script.js"></script>
 </head>
 <body> 
    <!-- A wrapper can be used to contain the web page -->
    <div class="wrapper">
    <header>
    <h1>Web Design Examples by Sally Addabbo</h1>
      <nav id="cssmenu">
        <ul>
          <li><a href="../index.php"><i class="fa fa-fw fa-institution" aria-hidden="true"></i> WEB120</a></li>
          <li><a href="index.php"><i class="fa fa-fw fa-home" aria-hidden="true"></i> BIG</a></li> 
          <li><a href="responsive.php"> Responsive vs Native</a></li> 
          <li><a href="flexbox.php"> Flexbox</a></li> 
          <li><a href="carts.php"> Shopping Carts</a></li> 
          <li><a href="galleries.php"> Galleries</a></li> 
       
         <!-- drop down menu for toogle tool pages -->
          <li><a href="#"> Google Tools</a>
            <ul>
              <li><a href="youtube.php"><i class="fa youtube" aria-hidden="true"></i> YouTube</a></li>
              <li><a href="calendar.php"><i class="fa fa-fw fa-home" aria-hidden="true"></i> Calendar</a></li>           
              <li><a href="map.php"><i class="fa fa-fw fa-globe" aria-hidden="true"></i> Map</a></li>
            </ul>         
          </li>
        </ul>      
       </nav>
    </header>

<section class="fullwidth">
  <h2>Contact Sally</h2>  
	<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
	 <p class="clear-recaptcha"></p>  
     
   </section>      
                
     <footer>
      <p><small>&copy; 2019 by Sally Ross-Addabbo, <a href="contact.php">Contact Sally Ross-Addabbo</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
    </div>
     
 </body>
</html>