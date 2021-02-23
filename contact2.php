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
			$msg='Phone Number already Exists';
			
			
			}else{
		$insert="insert into contact VALUES(null,'".$cname."','".$cphone."','".$cmail."','".$cmsg."', now())";
		 if(mysqli_query($link,$insert)){
							  $msg='We Would Conact You soon!';
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
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/forms.js"></script>
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
<div id="bgStretch"><img src="images/7.jpg" alt=""></div>
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
            <li><a href="food-and-wine.php">Facilites</a></li>
            <li><a href="events.html">Events</a></li>
            <li class="current"><a href="contact2.php">Contact</a></li>
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
               <fieldset> 
              <label class="lab">Name:</label><br>
                <input class="txtbox" name="cname" type="text"  required value="<?php if(!empty($cname)) print $cname;?>">
                <br class="clear">
                 
              <label class="lab">Phone Number:</label><br>
                <input class="txtbox" name="cphone" type="tel" required value="<?php if(!empty($cphone)) print $cphone;?>">
                <br class="clear">
                
              <label class="lab">Email:</label><br>
                <input class="txtbox" name="cmail" type="text" required value="<?php if(!empty($cmail)) print $cmail;?>">
                <br class="clear">
                 
              <label class="lab">Message:</label><br>
                <textarea class="txtbox" name="cmsg"><?php if(!empty($cmsg)) print $cmsg;?></textarea>
           
                <br class="clear">
                 
              <div class="clear"></div>
              
               <button type="reset" class="btn1">clear</button>
               <button type="submit" class="btn1" name="sub">send</button>
                <div class="clear"></div>
           </fieldset>
          </form>
          <div class="style1"> Marketing Department: <br>
            E-mail:&nbsp;<a href="gmail.com">Chinemeremsam91@gmail.com</a> <br>
            Phone: +2340923348678 </div>
        </div>
        <div class="clear"></div>
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
      <div class="copy"> Lemigo Hotels &copy; 2018 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.digtalnet.com/">digtalnet.com</a> </div>
    </div>
  </div>
</footer>
</body>
</html>