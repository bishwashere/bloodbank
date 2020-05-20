<?php
//here starts the database
session_start();
require('connect.php');
//query starts here
$query="insert into camp(name,place,date) values('$_POST[name]','$_POST[place]','$_POST[date]')";
//query ends here

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

mysqli_close($con);
header('location:home.php');
?>
