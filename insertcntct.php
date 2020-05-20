<?php include('connect.php');
//query starts here
$query="insert into contact(name,subject,email,url,message) values('$_POST[name]','$_POST[subject]','$_POST[email]','$_POST[url]','$_POST[message]')";
//query ends here

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

mysqli_close($con);
header('location:thanks.php');
?>
