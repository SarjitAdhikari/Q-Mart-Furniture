<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$Message = mysqli_real_escape_string($ani,$_REQUEST['Message']);
$Email = mysqli_real_escape_string($ani,$_REQUEST['Email']);
$Name = mysqli_real_escape_string($ani,$_REQUEST['Name']);


$Subject = mysqli_real_escape_string($ani,$_REQUEST['Subject']);


$sql="INSERT INTO contact(Message, Name, Email , Subject ) VALUES ('$Message','$Name','$Email','$Subject')";
if(mysqli_query($ani,$sql))
{
echo"records added sucessfully.";
echo "<a href = 'contact.html' > <h2>back!!</h2> </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);

}
mysqli_close($ani);
?>
