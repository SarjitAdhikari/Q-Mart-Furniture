<?php
$ani=mysqli_connect("localhost","root","","con");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$Name = mysqli_real_escape_string($ani,$_REQUEST['Name']);
$Email = mysqli_real_escape_string($ani,$_REQUEST['Email']);
$Number = mysqli_real_escape_string($ani,$_REQUEST['Number']);


$Review = mysqli_real_escape_string($ani,$_REQUEST['Review']);


$sql="INSERT INTO review(Name, Email , Number , Review ) VALUES ('$Name','$Email','$Number','$Review')";
if(mysqli_query($ani,$sql))
{
echo"records added sucessfully.";
echo "<a href = 'product.html' > <h2>back!!</h2> </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);

}
mysqli_close($ani);
?>
