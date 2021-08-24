<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIST</title>
</head>
<body>

<h1>List Data</h1>
<?php //require_once('navbar.php');?>
	<table border="1">
		<thead>
			<tr>
				<td>Student ID</td>
				<td>Name</td>
				<td>Session</td>
				<td>GPA</td>
				<td>Degree</td>
				<td>Actions</td>
			</tr>
		</thead>

		<tbody>
			<?php
				require_once("opendb.php");
				$query = "select * from student_rec";
				$result = $conn -> query($query) or die(error);

				foreach ($result as $row) {
				?>
					<tr>
						<td><?php echo $row['std_id'];?></td>
						<td><?php echo $row['std_name'];?></td>
						<td><?php echo $row['std_session'];?></td>
						<td><?php echo $row['std_gpa'];?></td>
						<td><?php echo $row['std_degree'];?></td>
						<td>
							<button >Edit</button>
							<button onclick="window.location.href='delete.php?id=<?php echo $row["std_id"];?>'">Delete</button>

						</td>
						
					</tr>
					<?php
				}
			?>
			

		</tbody>
	</table>

</body>
</html>