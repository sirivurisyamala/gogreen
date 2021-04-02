<?php
include ("connection.php");
if(isset($_POST['submit'])){
$a=$_POST['sno'];
	$b=$_POST['user'];
	$c=$_POST['user1'];
	$d=$_POST['email'];
	
	$f=$_POST['number'];
	$k=$_POST['numberr'];
	$g=$_POST['radio'];
	
	$upd="update users set fname='$b',lname='$c',email='$d',mobile='$f',alternate='$k',gender='$g' where sno='$a'";
	$que=mysqli_query($conn,$upd);
	if($que){
		echo "<script> alert ('success');window.location.href='view.php'</script>";
	}
	else{
		//echo "<script> alert ('fail');window.location.href='update.php'</script>";
		echo mysqli_error($conn);
	
}
}
?>