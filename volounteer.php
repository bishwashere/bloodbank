
<!DOCTYPE html>
<html>
<head>
<title>Blood Bank</title>
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
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>Volounteer</span></h6>
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
						<li  ><a href="index.php" class="scroll">HOME </a></li>
						<li class="active"><a href="contact.html" class="scroll">CONTACT US</a></li>
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
			<div class="contact">
			<h3>WELCOME VOLOUNTEERS</h3>
			<form action="insertvlntr.php" method="post">
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="Name" name="name"onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Email-id" name="mail" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Email-id';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="Education" name="education" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Education';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Phone" name="phone" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Phone';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="Place" name="place" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Place';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Age" name="age" onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Age';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" name="message" value=" " onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" value="SEND" style="float:right">
					</div>
				</form>
				<div class="contact-bottom">
					<div class="col-md-3 sit-contact">
						<h5>Address 1:</h5>
						<div class="contact-add">
							<p>Tavanur</p>
							<p>Malappuram dt. 679573</p>
							<p>72044320373</p>
						</div>
						<h5>Address 2:</h5>
						<div class="contact-add">
							<p>Tavanur</p>
							<p>Malappuram dt. 679573</p>
							<p>72044320373</p>
						</div>
						<ul class="face">
							<li class="active"><a href="#">facebook </a><span>/</span></li>
							<li><a href="#">twitter </a><span>/</span></li>
							<li><a href="#">linked in </a><span>/</span></li>
							<li><a href="#">dribbble</a></li>
						</ul>
					</div>
					<div class="col-md-9">
						<div class="map">
							<img src="images/sin1.jpg">
						
					</div><hr>
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