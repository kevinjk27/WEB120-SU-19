<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!--this is doing to fit the browser with the screen size-->
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="../big/includes/nav-script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    
<link rel="stylesheet" href="../big/css/nav-style.css">
<link rel="stylesheet" href="../big/css/portal.css"/>
<link rel="stylesheet" href="../big/css/form.css"/>
<link rel="stylesheet" href="../big/css/nav.css"/>
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo <?=$logo?>"></i> Kevin's BIG - Final Project</a></h1>
  <nav>
      
<div id="cssmenu">
  <ul>
     <li><a href="../big/index.php"><span><i class="fas fa-home"></i> Home</span></a></li>
     <li><a href="../big/calendar.php"><span><i class="fas fa-calendar-day"></i>Calendar</span></a></li>
     <li><a href="#"><span><i class="fas fa-newspaper"></i> Research </span></a>
        <ul>
           <li><a href="../big/research1.php"><span><i class="fas fa-mobile-alt"></i>Mobile Apps vs Responsive Design</span></a></li>
           <li><a href="../big/research2.php"><span><i class="fas fa-images"></i>Gallery</span></a></li>
           <li><a href="../big/research3.php"><span><i class="fas fa-boxes"></i>Flexbox</span></a></li>
           <li><a href="../big/research4.php"><span><i class="fas fa-shopping-cart"></i>Shopping Cart</span></a></li>
        </ul>
     </li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Webcam </span></a></li>
    <li><a href="../big/findus.php"><span><i class="fas fa-map-marked-alt"></i> Find Us</span></a></li>
    <li><a href="../index.php"><span><i class="fas fa-laptop-code"></i> Kevin's Portal Page</span></a></li>   
  </ul>
</div>

  </nav>
</header>
        
<!-- START LEFT COL -->
<section class="<?=$class?>">
 <h2 class="pageID"><?=$PageID?></h2>
<!--header ends here-->