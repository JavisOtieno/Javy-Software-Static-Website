<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Javy Software | An IT Services Company</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="keywords" content="Moil Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /> -->
     <meta name="keywords" content="Javy Software is a software company that offers web systems development, mobile apps(android and IOS) development, website development, website management and online advertising" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!--//meta tags ends here-->
    <link rel="shortcut icon" href="favicon2.ico" />
    <!--booststrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <!-- For Clients slider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <!--flexs slider-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
  </head>
  <body>
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <!--//navigation section -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="hedder-up">
            <h1><a class="navbar-brand" href="index.php">Javy Software</a></h1>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
           
<ul class="navbar-nav">
<?php
// Get the current path from the URL (without query string)
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($currentPath === '') $currentPath = 'index'; // default home page
?>
<li class="nav-item <?php if($currentPath=='index'){ echo 'active'; } ?>">
    <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item <?php if($currentPath=='about'){ echo 'active'; } ?>">
    <a class="nav-link" href="/about">About</a>
</li>
<li class="nav-item <?php if($currentPath=='services'){ echo 'active'; } ?>">
    <a class="nav-link" href="/services">Services</a>
</li>
<li class="nav-item <?php if($currentPath=='projects'){ echo 'active'; } ?>">
    <a class="nav-link" href="/projects">Projects</a>
</li>
<li class="nav-item <?php if($currentPath=='contact'){ echo 'active'; } ?>">
    <a class="nav-link" href="/contact">Contact</a>
</li>
</ul>

          </div>
		  
        <div class="clearfix"> </div>
        </nav>
        <div class="clearfix"> </div>
      
      </div>
      <!-- //Navigation -->
