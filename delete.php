<?php
include ("connection.php");
include('update.php');
$id=$_GET['id'];

$upd="delete from users where sno='$id' ";
$query=mysqli_query($conn,$upd);
if($query){
	
	echo "<script>alert('success');window.location.href='view.php';</script>";
}
else{
	echo "<script>alert('fail');window.location.href='delete.php';</script>";
//echo mysqli_error($conn);
}
?>
