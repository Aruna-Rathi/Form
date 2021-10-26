<?php 
include 'config.php';
$sql="DELETE FROM employee WHERE name='".$_GET["name"]."'";
if (mysqli_query($conn,$sql))
 {
	echo "record deleted succesfully";
}
else
{
	echo "Error deleting record:".mysqli_error($conn);
}
mysqli_close($conn);
?>