<?php include('connect.php');
//query starts here
$query="insert into volounteer(name,phone,email,place,education,age,message) values('$_POST[name]','$_POST[phone]','$_POST[mail]','$_POST[place]','$_POST[education]','$_POST[age]','$_POST[message]')";
//query ends here

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

mysqli_close($con);
header('location:thanks.php');
?>
