<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$FirstName = mysqli_real_escape_string($ani,$_REQUEST['FirstName']);
$Email = mysqli_real_escape_string($ani,$_REQUEST['Email']);

$Password = mysqli_real_escape_string($ani,$_REQUEST['Password']);
$ConfirmPassword = mysqli_real_escape_string($ani,$_REQUEST['ConfirmPassword']);


$sql="INSERT INTO Register(FirstName, Email, Password , ConfirmPassword ) VALUES ('$FirstName','$Email','$Password','$ConfirmPassword')";
if(mysqli_query($ani,$sql))
{
echo"records added sucessfully.";
echo "<a href = 'A.html' > <h2>Lets get started!!</h2> </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);
}
mysqli_close($ani);
?>
