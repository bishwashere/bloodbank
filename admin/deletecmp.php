<?php require('connect.php');
//query starts here
$id=$_GET['id'];
$query="delete from camp where camp_id=$id";
//query ends here

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
header("location:home.php");
?>
