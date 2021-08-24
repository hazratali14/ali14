<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert</title>
</head>
<body>
	<h1>INSERT DATA</h1>
	<form method="post" action="">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtname"></td>
			</tr>
			<tr>
				<td>GPA</td>
				<td><input type="text" name="txtgpa"></td>
			</tr>
			<tr>
				<td>Session</td>
				<td><input type="text" name="txtsession"></td>
			</tr>
			<tr>
				<td>Degree</td>
				<td><input type="text" name="txtdegree"></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="btnsubmit" type="submit">Submit</button></td>
			</tr>
		</table>
		
		
	</form>

	<?php
		if (isset($_POST['btnsubmit'])) {
			//print_r($_POST);

			$name = $_POST['txtname'];
			$gpa = $_POST['txtgpa'];
			$session = $_POST['txtsession'];
			$degree = $_POST['txtdegree'];

			// echo $name;
			// echo $gpa;
			// echo $session;
			// echo $degree;

			require_once("opendb.php");

			$query = "insert into student_rec (std_name, std_gpa, std_session, std_degree) values('$name','$gpa','$session','$degree')";

			//echo $query;

			$result = $conn -> query($query) or die(error);
			echo "data inserted!";
		}

	?>
</body>
</html>