<?php 
include("config.php");
if(count($_POST)>0)
{
	mysqli_query($conn,"UPDATE employee set
   
     name='" . $_POST['name']."',
     email='" . $_POST['email']."',
      designation='" . $_POST['designation']."',
      salary='" . $_POST['salary']."',
       date='" . $_POST['date']."' WHERE name='".$_POST['name']."'");
       $messege="Record modiffied sucessful";
}
$result=mysqli_query($conn,"SELECT * FROM employee WHERE name='" . $_GET['name']. "'");
$row=mysqli_fetch_array($result);
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
<div>
	<?php 
		if(isset($messege)) {echo $messege; }
	?>
</div>
		<h3>Employee form </h3>
		<table>
			
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
			</tr>
			<tr>
				<td>Designation:</td>
				<td><input type="text" name="designation" value="<?php echo $row['designation']; ?>"></td>
			</tr>
			<tr>
				<td>Salary:</td>
				<td><input type="text" name="salary" value="<?php echo $row['salary']; ?>"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
</center>
</body>
</html>