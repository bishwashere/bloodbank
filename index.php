
<!DOCTYPE html>
<html>
<head>
<title>Blood Bank </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
</head>
<body> 
<!--header-->

	<!--banner-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
	<div class="slider">
	    <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li>
	          <img src="images/banner.jpg" alt="">
	          <div class="banner">
				<h2>Give a Helping hand</h2>
				<p>Give Blood.Give life.It doesn't cost you anything.</p>
			</div>
	        </li>
	        <li>
	          <img src="images/banner2.jpg" alt="">
	        	 <div class="banner">
				<h2>Give blood,Give life</h2>
				<p>The donar today may be recipient tomorrow.</p>
			</div>
	        </li>
	        <li>
	          <img src="images/banner.jpg" alt="">
	         <div class="banner">
				<h2>Give blood,Give life</h2>
				<p>Tears of mother can't save her child.But your blood can..</p>
			</div>
	        </li>
	      </ul>
	  </div>
	  </div>
	  <!--header-->
		<div class="header">
			<div class="container">			
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=" " /></a>
				</div>
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="index.php" class="scroll">HOME </a></li>
						<li><a href="contact.html" class="scroll">CONTACT US</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!---->
	<!--content-->
	<div class="content">
		<div class="container">
			<div class="donate">
				<div class="donate-grid">
					<p>Blood Bank is a non-profitable charity organisation working in Tavanur which is initiated by the youths.This service aim to provide blood who is in need.</p>
					<form action="directory.php" method="get">
					<div class="col-md-8 contact-us">
							<select style="min-height:60px" name="id">
							<option style="min-height:40px" value="apositive">A+ve</option>
							<option style="min-height:40px" value="anegative">A-ve</option>
							<option style="min-height:40px" value="bpositive">B+ve</option>
							<option style="min-height:40px" value="bnegative">B-ve</option>
							<option style="min-height:40px" value="opositive">O+ve</option>
							<option style="min-height:40px" value="onegative">O-ve</option>
							<option style="min-height:40px" value="abpositive">AB+ve</option>
							<option style="min-height:40px" value="abnegative">AB-ve</option>

							</select>
						</div>
						<div class="send ">
				<button class="btn  btn-1c" value="submit" >Find Blood</button>
					</div>
				</div>
				</form>
					<div class="sit-in">
						<div class="col-md-4 ad-in">
							<h5>OUR aim</h5>
							<p>Donating blood is a noble deed.We are providing you an initiative to help people by serving blood for those who are in need.Register in our website and be a part of this noble act. </p>
							<p>You can contribute to this charitable society in different ways.You can donate blood,attend or volounteer our medical camps,give donations to support our health programmes and other social welfare activities,etc.Your presence is the only thing which makes us feel rewarded for our activities.  </p>
							<p>
							Feel free to contact us or give feedback.We appreciate it.If you find it difficult to register in our website,call or email us.we will do it for you.All the contacts appearing in the blood bank directory are published on after verifying the details by the organisation.
							</p>
						</div>
						<div class="col-md-4 ad-in">
							<h5>Ready to donate?</h5>
							<form action="insert.php" method="post">
					<div class="contact-grid">
						<div class="col-md-12 contact-us">
							<input type="text" value="Name" name="name" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<select name="group">
							<option  value="apositive">A+ve</option>
							<option  value="anegative">A-ve</option>
							<option  value="bpositive">B+ve</option>
							<option  value="bnegative">B-ve</option>
							<option  value="opositive">O+ve</option>
							<option  value="onegative">O-ve</option>
							<option  value="abpositive">AB+ve</option>
							<option  value="abnegative">AB-ve</option>

							</select>
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="age" onFocus="this.value='';" name="age" onBlur="if (this.value == '') {this.value = 'Age';}">
						</div>
						<div class="col-md-12 contact-us">
							<input type="text" value="place" onFocus="this.value='';" name="place" onBlur="if (this.value == '') {this.value = 'Place';}">
						</div>
						<div class="col-md-12 contact-us">
							<input type="text" value="phone" onFocus="this.value='';" name="phone" onBlur="if (this.value == '') {this.value = 'Phone No.';}">
						</div>
						<div class="col-md-12 contact-us">
							<input type="text" value="mail" onFocus="this.value='';" name="mail" onBlur="if (this.value == '') {this.value = 'E-mail';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="send ">
				<button class="btn  btn-1c" value="submit" style=" padding:20px; margin:10px;">Register Now</button>
					</div>
				</form>
						</div>
						<div class="col-md-4 ad-in">
							<h5>&nbsp;</h5>
							<img src="images/gvbldcmp.jpg" style="max-width:350px; max-height:500px;">
						</div>
						<div class="clearfix"> </div>
					</div>
					
				
			</div>	
		</div>
		<!---->
		<div class="number-at">
		<div class="in-number-in">
				<div class="in-number" style="min-height:362px">
					<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
					  			<div class="welcome_box">
					  				<p>The blood you donate givess someone another chance at life.One day that someone may be a close relative,a friend,a loved one--or even you.</p>
					  			</div>
								<div class="clearfix"> </div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
					  			<div class="welcome_box">
					  				<p>Do you feel you don't have much to offer?You have the most precious resources of all;the ability to save a life by donating blood!Help share this invaluable gift with someone in need.</p>
					  			</div>
								<div class="clearfix"> </div> 	
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
				   				<div class="welcome_box">
					  				<p>To the young and healthy it's no loss.To stick it's hope of life.Donate Blood to give back life.</p>
					  			</div>
								<div class="clearfix"> </div>	   		 	
						</article>
			</div>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : false,
				});         
   		     </script> 	
			</div>
		</div>
		<?php require('connect.php');
	$result = mysqli_query($con,"SELECT count(*) FROM members");
while($row = mysqli_fetch_array($result))
{?>
		 <div class="grid-men">
				<div class="men-grid">
					<span><?php echo $row[0];}?>+</span>
					<p>We house the largest donars in the region.</p>
					<a href="#"><img class="img-responsive" src="images/pi2.jpg" alt=" " /></a>
				</div>
				<div class="men-grid number-ape">
				<?php $result = mysqli_query($con,"SELECT count(*) FROM volounteer");
while($row = mysqli_fetch_array($result))
{?>
					<span><?php echo $row[0];}?>+</span>
					<p>We have volounteers registered.</p>
					<a href="#"><img class="img-responsive" src="images/pic.jpg" alt=" " /></a>
				</div>
				<div class="men-grid ad-right">
				<?php $result = mysqli_query($con,"SELECT count(*) FROM camp");
while($row = mysqli_fetch_array($result))
{?>
					<span><?php echo $row[0];}?>+</span>
					<p>We organize lot of medical camps in the region.</p>
					<a href="#"><img class="img-responsive" src="images/p1.jpg" alt=" " /></a>
				</div>
				<div class="clearfix"> </div>
		</div>
			<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="services-in">
				<div class="container">
					<h3>Help us!!</h3>
					<div class="service-grid">
						<div class="col-md-4 ser-in">
							<a href="#" class="b-link-stripe b-animate-go  thickbox"><div class="b-line b-line1"></div><div class="b-line b-line2"></div><div class="b-line b-line3"></div><div class="b-line b-line4"></div><div class="b-line b-line5"></div>
						     <img class="img-responsive" src="images/pic.jpg" style="top: 0px;" alt=" " /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt="" style="top: 0px;"></h2>
						  </div></a>
							<h5>Volounteer</h5>
							<span>Join us as a volounteer</span>
							<p>Register as a volounteer in our group so that whenever we are conducting blood donation camps,we will seek your help.</p>														
							<a href="volounteer.php" class="btn  btn-1c btn1 btn-1d">Register</a>						
						</div>
						<div class="col-md-4 ser-in">
						<a href="#" class="b-link-stripe b-animate-go  thickbox"><div class="b-line b-line1"></div><div class="b-line b-line2"></div><div class="b-line b-line3"></div><div class="b-line b-line4"></div><div class="b-line b-line5"></div>
						     <img class="img-responsive" src="images/pic1.jpg" style="top: 0px;" alt=" " /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt="" style="top: 0px;"></h2>
						  </div></a>
							<h5>Donate</h5>
							<span>Make us stay alive</span>
							<p>Ofcourse,we are a non profitable charity organisation and your donations are always appreciated to keep us stay alive and conducting health programmes.,</p>
						</div>
						<div class="col-md-4 ser-in">
							<a href="#" class="b-link-stripe b-animate-go  thickbox"><div class="b-line b-line1"></div><div class="b-line b-line2"></div><div class="b-line b-line3"></div><div class="b-line b-line4"></div><div class="b-line b-line5"></div>
						     <img class="img-responsive" src="images/pic12.jpg" style="top: 0px;" alt=" " /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/plus.png" alt="" style="top: 0px;"></h2>
						  </div></a>
							<h5>Organize</h5>
							<span>Conduct medical camps</span>
							<p>Are you a medical organization or institute and want to conduct health camps?Please let us know and we can help you.</p>
							<a href="contact.html" class="btn  btn-1c btn1 btn-1d">Enquire</a>							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<span class="drop"> </span>
			<p>Blood Bank, Tavanur <span>Malappuram,Kerala</span> India, 679573</p>
				<p class="footer-class">Developed by <a href="http://iusolve.com/" target="_blank">IUsolve</a> </p>
				<ul class="social-icons">
					<li><a href="#"><span> </span> </a></li>
					<li class="twitter"><a href="#"><span> </span></a></li>
					<li class="gmail"><a href="#"><span> </span> </a></li>
					<li class="print"><a href="#"><span> </span> </a></li>
				</ul>
		</div>	
		</div>
</body>
</html>