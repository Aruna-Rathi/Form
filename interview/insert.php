<?php 
include('config.php');
if (isset($_POST['insert']))
 {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$designation=$_POST['designation'];
	$salary=$_POST['salary'];
	$date=$_POST['date'];
$query=mysqli_query($conn,"INSERT INTO employee(name,email,designation,salary,date) Values('$name','$email','$designation','$salary','$date')");
	if ($query)
	 {
		echo "<script>alert('Data Inserted')</script>";
	}
	else
	{
		echo  "<script>alert('No Data Inserted')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<center>
	<form method="POST">
		<h3>Employee form</h3>
		<input type="text" name="name" placeholder="Enter the user name"><br><br>
		<input type="email" name="email" placeholder="Enter the E-mail"><br><br>
		<input type="text" name="designation" placeholder="Enter the Designation"><br><br>
		<input type="text" name="salary" placeholder="Enter the salary"><br><br>
		<input type="date" name="date"><br><br>
		<input type="submit" name="insert" value="Submit">

	</form>
</center>
</body>
</html>