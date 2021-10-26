<?php
include("config.php");
$query="SELECT* FROM EMPLOYEE";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if ($total !=0)
 {
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>display record</title>
</head>
<body>
<center>
	<h3>Display Employee records</h3>
	<table border="1">
		<tr>
			
			<th>Name</th>
			<th>EMAIL</th>
			<th>DESIGNATION</th>
			<th>SALARY</th>
			<th>DATE</th>
		</tr>
	</body>
</html>
<?php 
while($result=mysqli_fetch_assoc($data))
{
	echo 
	"<tr>
	
	<td>".$result['name']."</td>
	<td>".$result['email']."</td>
	<td>".$result['designation']."</td>
	<td>".$result['salary']."</td>
	<td>".$result['date']."</td>
	<td><a href='delete.php?name=$result[name]'>Delete</a> |
	<a href = 'update.php?name=$result[name]'>Update</a>
	</td>
	</tr>";
	
}
}
else
{
	echo "no record found";
}
?>
</table>

