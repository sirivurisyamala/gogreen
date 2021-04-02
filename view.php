<?php
include ("connection.php");
$sel="select*from users";
$query=mysqli_query($conn,$sel);

?>
<table border=1> 
<tr>
<th>sno</th>
<th>fname</th>
<th>lname</th>
<th>email</th>
<th>password</th>
<th>mobile</th>
<th>alternate</th>
<th>gender</th>
<th>changes</th>

</tr>
<?php
if($query){
	while($row=mysqli_fetch_array($query)){
		echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>".$row[7]."</td>";
		
		?>
		
	<td><a href="edit.php?id=<?php echo $row[0]; ?>">edit</a>/<a href="delete.php?id=<?php echo $row[0]; ?>">delete</a></td>
		<?php
		echo "</tr>";
		
	}
}

?>
</table>