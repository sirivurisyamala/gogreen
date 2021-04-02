<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
	$emial=$_POST['email'];
	$password=$_POST['password'];
	$sel="select * from users where email='$emial' and password='$password' ";
	$query=mysqli_query($conn,$sel);
	if(mysqli_num_rows($query)==1)
	{
		echo "<script>window.location.href='go.php'</script>";
	}
	else
	{
		echo "<script>alert('Login Failed');window.location.href='index.php'</script>";
	}
}
?>