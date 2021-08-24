<?php 
	require_once("opendb.php");
	$id = $_GET['id'];
	$query = "delete from student_record where std_id = '$id'";

	$result = $conn -> query($query) or die(error);

	echo "<script>window.location.href='list.php'</script>";

?>
