<?php include('connect.php');
//query starts here
$query="insert into members(name,email,phone,blood_group,age,place) values('$_POST[name]','$_POST[mail]','$_POST[phone]','$_POST[group]','$_POST[age]','$_POST[place]')";
//query ends here

if (!mysqli_query($con,$query))
  {
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";

mysqli_close($con);
header('location:thanks.php');
?>
