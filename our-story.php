<?php require_once('connect/confile.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Decanter 1800 | Our Story</title>
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
<div id="bgStretch"><img src="images/5.jpg" alt=""></div>
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
            <li class="current"><a href="our-story.php">Our Story</a></li>
            <li><a href="food-and-wine.php">Facilites</a></li>
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
      <div class="content"> <img src="images/pexels-photo-518244.jpeg" alt="" class="img_inner">
        <h3>Welcome to Our Site</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat mattis neque facilisis, sit rew amet ultricies erat rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis trrore malesuada nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis accumsanel. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel, aliquet sit der amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. Ut nisi nibh, sagittis ut semper fertilom elementum, pellentesque a odio. Phasellus vitae libero vel justo pretium dignissim. Integer sempin est nec congue. In laoreet lacus eros, vel pulvinar urna ultricies ut.</p>
        Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est velewyl commodo venenatis eros. Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. Proin ut tincidunt nulla, eu sodales arcu. Quisque viverra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan justo vitae feugiat placerat.	Nullam consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla ullamcorper fermentum.
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