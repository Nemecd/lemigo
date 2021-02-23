<?php require_once('connect/confile.php');?>
<?php $msg='';
if(isset($_POST['sub'])){
	$cname=mysqli_real_escape_string($link,$_POST['cname']);
	$cphone=mysqli_real_escape_string($link,$_POST['cphone']);
	$cmail=mysqli_real_escape_string($link,$_POST['cmail']);
	$cmsg=mysqli_real_escape_string($link,$_POST['cmsg']);
	if(!empty($cname)&&!empty($cphone)&&!empty($cmail)&&!empty($cmsg)){
		$select = mysqli_query($link,"SELECT * FROM contact where phone_number='".$cphone."' ");
		if(mysqli_num_rows($select)>0){
			$msg='Phone Number alredy Exists';
			}else{
		$insert="insert into contact VALUES(null,'".$cname."','".$cphone."','".$cmail."','".$cmsg."', now())";
		 if(mysqli_query($link,$insert)){
							  $msg='Successful!!';
							  }else{
								  $msg='Message Sending Failed';
								  print mysqli_error($link);
								  }
			}
		
	}else{
		$msg='Please Fill all Fields';
		}
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Decanter 1800 | Contact</title>
<meta charset="utf-8">
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
<div id="bgStretch"><img src="images/bg_body.jpg" alt=""></div>
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
            <li><a href="index.html">Home</a></li>
              <li><a href="our-story.php">Our Story</a></li>
			  <li><a href="food-and-wine.php">Facilites</a></li>
            <li><a href="events.php">Events</a></li>
			  <li class="current"><a href="contact.php">Contact</a></li>
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
        <div class="grid_4 alpha">
          <h3>Find Us</h3>
          <div class="map">
            <figure>
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </figure>
            <p class="style1"> Our free templates do not fall under support services. But you can always hire professional developers from <a href="#">Template Tuning</a> who will help you customize the chosen theme to meet your needs. </p>
            <p class="style1">If you want to get all in one package, choose premium <a href="#">website templates</a> with support and special offers.</p>
            <div class="style1">If you have any ideas about free website templates, or maybe you would like to see something particular on our blog, feel free to drop us a line.</div>
          </div>
        </div>
        <div class="grid_3 omega">
          <h3>Contact Us</h3>
          <form  action="" method="post" enctype="multipart/form-data">
           <h4><?php print $msg ?></h4>
            <div class="success_wrapper">
              <div class="success">Contact form submitted!<br>
                <strong>We will be in touch soon.</strong> </div>
            </div>
               <fieldset> 
              <label class="name">Name:</label>
                <input name="cname" type="text"  required value="<?php if(!empty($cname)) print $cname;?>">
                <br class="clear">
                 
              <label class="phone">Phone Number:</label>
                <input name="cphone" type="tel" required value="<?php if(!empty($cphone)) print $cphone;?>">
                <br class="clear">
                
              <label class="email">Email:</label>
                <input name="cmail" type="text" required value="<?php if(!empty($cmail)) print $cmail;?>">
                <br class="clear">
                 
              <label class="message">Message:</label>
                <textarea name="cmsg"><?php if(!empty($cmsg)) print $cmsg;?></textarea>
           
                <br class="clear">
                 
              <div class="clear"></div>
              
               <button type="reset" class="btn1">clear</button>
               <button type="submit" class="btn1" name="sub">send</button>
                <div class="clear"></div>
           </fieldset>
          </form>
          <div class="style1"> Marketing Department: <br>
            E-mail:&nbsp;<a href="../../lets try dis/decanter-1800/gmail.com">Chinemeremsam91@gmail.com</a> <br>
            Phone: +2340923348678 </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="grid_3">
      <h1><a href="../../lets try dis/decanter-1800/index.html"><img src="../../lets try dis/decanter-1800/images/images (1).png" alt=""></a></h1>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Lemigo Hotels &copy; 2018 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.digtalnet.com/">digtalnet.com</a> </div>
    </div>
  </div>
</footer>
</body>
</html>