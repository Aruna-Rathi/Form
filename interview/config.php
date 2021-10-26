<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="company";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn)
 {
	echo "";
}
else
{
	die("connection failed because".mysqli_connection_error());

}
?>