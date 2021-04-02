 <?php
 session_start();
include("connection.php");
if(isset($_POST['submit'])){
	$name=$_POST['fname'];
	$namee=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$moblie=$_POST['mobnumber'];
	$altmoblie=$_POST['altnumber'];
	$radio=$_POST['radio'];
	$date=date("Y-m-d H-i:s");
	
	$ins="insert into users (fname,lname,email,password,mobile,alternate,gender,date,status)
	values('$name','$namee','$email','$password','$moblie','$altmoblie','$radio','$date',0)";
	$que=mysqli_query($conn,$ins);
	if($que){
		
		echo "<script> alert ('success!welcome to gogreen');window.location.href='index.php'</script>";
	}
	else{
		
	 echo "<script> alert ('failed ! plzz try again');window.location.href='index.php'</script>";

	}
 
}
?>