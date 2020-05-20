<?php include('connect.php');
error_reporting(0);
if(!$_GET[id]){
header('location:404.html');
}
?>
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
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
</head>
<body> 
<!--header-->
	<div class="banner-in">
		<div class="container">
			<h6>HOME / <span>directory</span></h6>
		</div>
	</div>
	  <!--header-->
<div class="header">
			<div class="container">			
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=" " /></a>
				</div>
				<div class="top-nav"></div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!---->
	<!--content-->
	<div class="content">
		<div class="container">
			<div class="what-we">
			  <div class="we-top-grids">
						<div class="we-head text-center">
							<h3>Blood bank directory</h3>
							<P>We house the largest blood bank directory in the region</P>
						</div>					
			    <div class="we-top-grid">
				<img src="images/whatgives_two2.jpg" style="float:right; max-width:800px">
				<div id="bld_dir" style="width:100%">
				   
						  <ol>
						  <?php
						   $result = mysqli_query($con,"SELECT * FROM members where blood_group like '%$_GET[id]%' and status='Enabled'");
while($row = mysqli_fetch_array($result))
  {
					echo"<li><strong>Name:</strong><code>".$row['name']."</code></br>
				      <strong>Blood Group:</strong><code>".$row['blood_group']."</code></br>
					  <strong>Phone:</strong><tt>".$row['phone']."</tt></br>
					  <strong>email:</strong><dfn>".$row['email']."</dfn>	<br>				
					  <span class=\"style1\">Place:</span><samp>".$row['place']."</samp></li>
					<hr>";
					}?>
					</ol>
					
				  </div>
				    <h4>&nbsp;</h4>
					
			    </div>						
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