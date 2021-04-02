<?php
session_start();
include('connection.php');
if(session_destroy()){
echo "<script>window.location.href='index.php'</script>";
}
else{
	
	echo "<script>window.location.href='go.php'</script>";

}
?>