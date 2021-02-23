<?php require_once('connect/confile.php');?>
<?php $gen="";$room="";$msg='';
if(isset($_POST['sub'])){
	$name=mysqli_real_escape_string($link,$_POST['name']);
	$lname=mysqli_real_escape_string($link,$_POST['lname']);
	$mail=mysqli_real_escape_string($link,$_POST['mail']);
	$fone=mysqli_real_escape_string($link,$_POST['fone']);
	$tell=mysqli_real_escape_string($link,$_POST['tell']);
	$date=mysqli_real_escape_string($link,$_POST['date']);
	$bname=mysqli_real_escape_string($link,$_POST['bname']);
	$bran=mysqli_real_escape_string($link,$_POST['bran']);
	$amtp=mysqli_real_escape_string($link,$_POST['amtp']);
	$period=mysqli_real_escape_string($link,$_POST['period']);
	$gen=mysqli_real_escape_string($link,$_POST['gen']);
	$date2=mysqli_real_escape_string($link,$_POST['date2']);
	$age=mysqli_real_escape_string($link,$_POST['age']);
	$room=mysqli_real_escape_string($link,$_POST['room']);
	$bmsg=mysqli_real_escape_string($link,$_POST['bmsg']);
	$rand=rand();
if(!empty($name)&&!empty($lname)&&!empty($mail)&&!empty($fone)&&!empty($tell)&&!empty($date)&&!empty($bname)&&!empty($bran)&&!empty($amtp) &&!empty($period)&&!empty($gen)&&!empty($date2)&&!empty($age)&&!empty($room)&&!empty($bmsg)){
		$select = mysqli_query($link,"SELECT * FROM reservations where email='".$mail."' ");
		if(mysqli_num_rows($select)>0){
			$msg='Mail alredy Exists';
			}else{
						  $insert="Insert into reservations VALUES(null,'".$name."','".$lname."',
							'".$mail."','".$fone."','".$tell."','".$date."','".$bname."','".$bran."','".$amtp."'
							,'".$period."','".$gen."','".$date2."','".$age."','".$room."','".$bmsg."','".$rand."',now())";
						  if(mysqli_query($link,$insert)){
		
							$rand=rand(0000001111,000000099999);
							  $msg='Successful!! Your Booking Number is ' .$rand;
							  }else{
								  $msg='Registration Failed';
								  print mysqli_error($link);
								  }
						  }
						  
		}else{
	     $msg='please Fill all fields';
	   }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Get Your Choice Booked </title>
	<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Talent Application Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Meta tags -->
	<!--stylesheets-->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
<!--//style sheet end here-->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //Calendar -->

<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>
     <h1 class="header-w3ls">
Lemigo Hotel Booking Form</h1>
<h4 class="new animated bounceInUp"  align="center"><?php print $msg;?> </h4>
<div class="appointment-w3">
    <form action="" method="post" enctype="multipart/form-data">
    
<div class="personal">
<h2>Personal Details</h2>
  					<div class="form-left-w3l">
					<p>Name</p>
						<input type="text" name="name" placeholder="Name" required="<?php if(!empty($name)) print $name;?>">
					</div>
					   <div class="form-right-w3ls ">
					<p>Last Name</p>
						<input type="text" name="lname" placeholder="Last Name"  required="<?php if(!empty($lname)) print $lname;?>">
						 <div class="clear"></div>
					</div>
		   <div class="form-left-w3l">
			<p>Email</p>
				   <input type="email"  name="mail" placeholder="Mail@example.com" required="<?php if(!empty($mail)) print $mail;?>">
			</div>
           <div class="form-right-w3ls ">	
			<p>Phone</p>
				<input class="buttom" type="text" name="fone" placeholder="Phone Number" required="<?php if(!empty($fone)) print $fone;?>">
		   </div>
		      <div class="clear"></div>
</div>
<div class="information">
 <h3> Payment details</h3>
		              <div class="form-left-w3l">	
			<p>Teller Number</p>
				<input type="text" name="tell" placeholder="Teller no" required="<?php if(!empty($tell)) print $tell;?>">
		   </div>
	   		   <div class="form-right-w3ls">
				<p>Date of Payment</p>
     <input  id="datepicker1" name="date" type="text" placeholder="mm/dd/yyyy" required="<?php if(!empty($date)) print $date;?>">
	 </div>
		   		   <div class="form-left-w3l">
			<p>Bank Name</p>
				   <input type="text" name="bname" placeholder="Bank" required="<?php if(!empty($bname)) print $bname;?>">
			</div>
           <div class="form-right-w3ls ">	
			<p>Branch</p>
				<input type="text" name="bran" placeholder="Branch" required="<?php if(!empty($bran)) print $bran;?>">
		   </div>
		   <div class="clear"></div>
		               <div class="form-left-w3l">	
			<p>Amount Paid</p>
				<input type="text" name="amtp" placeholder="How Much Paid" required="<?php if(!empty($amtp)) print $amtp;?>">
		   </div>
		   		              						<div class="form-right-w3ls">
												<p>Period Of Stay</p>
				<input type="text" name="period" placeholder="How Long WIll You Stay" required="<?php if(!empty($period)) print $period;?>">	
		   </div>
		    <div class="clear"></div>
			</div>
<div class="education">	
<h3>Suite Details</h3>		
						<div class="form-left-w3l">
						<p>Gender</p>
					<select class="form-control" selected="select" name="gen">
					<option value="">Select Gender</option>
						<option value="male" <?php if($gen=='male') print 'selected="selected"';?>>Male</option>
						<option value="female" <?php if($gen=='female') print 'selected="selected"';?>>Female</option>
					</select>
			</div>
				<div class="form-right-w3ls">
				<p>Date To Report</p>
     <input  id="datepicker2" name="date2" type="text" placeholder="mm/dd/yyyy" required="<?php if(!empty($date2)) print $date2;?>">
	 </div>
				  <div class="clearfix"></div>			
				<div class="form-left-w3l ">
					<p>Age</p>
						<input type="text" name="age" placeholder="Age" required="<?php if(!empty($age)) print $age;?>">
				</div>					
				 <div class="form-right-w3ls">
				 <p>Suite Type</p>
					<select class="form-control" selected="select" name="room">
								<option value="">Select one</option>
								<option value="Executive" <?php if($room=='execu') print 'selected="selected"';?>>Executive Suite </option>
								<option value="Royal" <?php if($room=='roya') print 'selected="selected"';?>>Royal Suite </option>
								<option value="Economic"<?php if($room=='econo') print 'selected="selected"';?>>Economic Suite</option>
								
							</select>
			
					</div>

				  <div class="clear"></div>
<div class="form-control-w3l">
<p>Message</p>
 <textarea name="bmsg" placeholder="Message..." required></textarea>
 </div>
 </div>
 <input type="submit" value="Submit" name="sub">
</form>
   </div>
   
    <div class="copy">
    <p>&copy;2017 Talent Application Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
</div>
		<!-- js -->
  <script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
</body>
</html>