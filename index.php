<?php require_once('connect/confile.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Decanter 1800</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/TMGPrototype2.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/TMGPrototype2.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(window).load(function () {
    $('#TMGPrototype2').TMGPrototype2({});
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <form id="search" action="#" method="GET">
          <input type="text" name="s">
          <a onClick="document.getElementById('search').submit()"></a>
          <div class="clear"></div>
        </form>
        <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
        <nav>
          <ul class="sf-menu">
			  <li class="current"><a href="index.html">Home</a></li>
              <li><a href="our-story.php">Our Story</a></li>
			  <li><a href="food-and-wine.php">Facilites</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="contact2.php">Contact</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div id="TMGPrototype2">
  <h1><a href="index.html"><img src= "images/images (1).png" alt=""></a></h1>
  <ul class='sets'>
    <li data-setName="Executive">
      <ul>
        <li data-srcPreview="images/1.jpg">
          <div>
            <div class="content"> <img src="images/download (1).jpg" alt=""><br> 
              <h3>Executive</h3>
              <p><h4> Executive comfort for you with your complete facilities</h4></p>
              <p> </p>
              <ul>
                <li><span>Type</span>Executive Suite</li>
                <li><span>Price</span> $70,000.00</li>
                <li><span>Limit Of Stay: </span> 4 Months</li>
				  <li><span>Guarantee:</span> Your Comfortablity</li>
              </ul>
			  <div class="alright"><a href="school form/index.php">Book Now</a></div>
            </div>
          </div>
        </li>
      </ul>
    </li>
    <li data-setName="Royal Suite">
      <ul>
        <li data-srcPreview="images/3.jpg">
          <div>
            <div class="content"> <img src="images/download (3).jpg" alt="">
              <h3>Royal Suite</h3><br>
              <p> <h4> Royal comfort for you with your complete facilities</h4></p>
              <p></p>
              <ul>
                <li><span>Type:</span>Royal Suite </li>
                <li><span>Price:</span>$40,000.00</li>
                <li><span>Limit Of Stay: </span> 3 Months</li>
				  <li><span>Guarantee:</span> Your Relaxtion</li>
              </ul>
               <div class="alright"><a href="school form/index.php">Book Now</a></div>
            </div>
          </div>
        </li>
      </ul>
    </li>
    <li data-setName="Economic Suite">
      <ul>
        <li data-srcPreview="images/4.jpg">
          <div>
            <div class="content"> <img src="images/download (4).jpg" alt="">
              <h3>Economic Suite</h3>
              <p>Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcper fermentum. In vitae augue, eu. </p>
              <p></p>
              <ul>
                 <li><span>Type:</span>Economic Suite </li>
                <li><span>Price:</span>$20,000.00</li>
                <li><span>Limit Of Stay: </span> 2 Months</li>
				  <li><span>Guarantee:</span> Your Relaxtion</li>
              </ul>
               <div class="alright"><a href="school form/index.php">Book Now</a></div>
            </div>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Decanter 1800 &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </div>
  </div>
</footer>
</body>
</html>