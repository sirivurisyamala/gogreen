<?php
include ("connection.php");
$id=$_GET['id'];
$sel="select * from users where sno=$id";
$que=mysqli_query($conn,$sel);
if($que){
	while($row=mysqli_fetch_array($que)){
		$sno=$row[0];
		$user=$row[1];
		$user1=$row[2];
		$email=$row[3];
		$mobile=$row[4];
		$alternate=$row[5];
		$gender=$row[6];
		
	}
	
}
?>
<form action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="sno"  value="<?php echo $sno; ?>"><br><br>
<input type="text" name="user"  value="<?php echo $user; ?>"><br><br>
<input type="text" name="user1" value="<?php echo $user1; ?>"><br><br>
<input type="email" name="email" value="<?php echo $email; ?>"><br><br>

<input type="number" name="number" value="<?php echo $mobile; ?>"><br><br>
<input type="number" name="numberr" value="<?php echo $alternate; ?>"><br><br>

<input type="radio" name="radio"  <?php if($gender=='female'){ ?>checked='checked'<?php } ?> value="female">female
<input type="radio" name="radio"  <?php if($gender=='male'){ ?>checked='checked' <?php } ?>value="male" >male
<br><br>

<input type="submit" name="submit">
</form>