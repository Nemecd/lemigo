<?php require_once('connect/confile.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Decanter 1800 | Food &amp; Wine</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/bgStretch.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(document).ready(function () {
    $('#bgStretch')
        .bgStretch({
            align: 'leftTop'
        })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div id="bgStretch"><img src="images/6.jpg" alt=""></div>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="our-story.php">Our Story</a></li>
            <li class="current"><a href="food-and-wine.php">Facilites</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content_wrapper">
  <div class="container_12">
    <div class="grid_9">
      <div class="content">
        <div class="grid_5 alpha">
          <div class="block1"> <img src="images/pexels-photo-265947.jpeg" alt="" class="img_inner fleft">
            <div>
              <h3>Nice Resturant</h3>
              <ul class="list">
                <li><a href="#">Vivamus at magna non nunc tristiqu</a></li>
                <li><a href="#">Certlo ivamus deagnno </a></li>
                <li><a href="#">Dertomilo sate magnor non </a></li>
                <li><a href="#">Sewrtvamus na noewn nunu ristiqewe </a></li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
          <div class="block1"> <img src="images/pexels-photo-338504.jpeg" alt="" class="img_inner fleft">
            <div>
              <h3>OutDoor Comfort</h3>
              <ul class="list">
                <li><a href="#">In vitae variusVivamus at magna </a></li>
                <li><a href="#">Etiam dui eros, laoreetertlo </a></li>
                <li><a href="#">Quisque viverra nulla nuncertomilo </a></li>
                <li><a href="#">Gaseramus na noewn nunu ristiqewe </a></li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
          <div class="block1"> <img src="images/pexels-photo-261251.jpeg" alt="" class="img_inner fleft">
            <div>
              <h3>Swimming pool</h3>
              <ul class="list">
                <li><a href="#">Nanaivamus at magna non nunc </a></li>
                <li><a href="#">Vestibulum nec metus feugiatrtlo </a></li>
                <li><a href="#">Integer convallis orci vel mi laoreet</a></li>
                <li><a href="#">Meherus na noewn nunu ristiqewe li</a></li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="grid_2 omega">
          <h4>We Also Feature</h4>
          <ul class="list">
            <li><a href="#">Nice Toiletrys</a></li>
            <li><a href="#">Cinema House</a></li>
            <li><a href="#">Game House</a></li>
            <li><a href="#">Hall For Occassions</a></li>
            <li><a href="#">Gymnasium House </a></li>
            <li><a href="#">Free Internet Within</a></li>
            <li><a href="#">24 Hours Electricty</a></li>
            <li><a href="#">Good Car Park</a></li>
             <li><a href="#">And More....</a></li>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="alright"><a href="#" class="btn">Read More</a></div>
      </div>
    </div>
    <div class="grid_3">
      <h1><a href="index.html"><img src="images/images (1).png" alt=""></a></h1>
    </div>
  </div>
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