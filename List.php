<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIST</title>
</head>
<body>

<h1>List Data</h1>
<?php require_once('navbar.php');?>
	<table border="1">
		<thead>
			<tr>
				<td>std_id</td>
				<td>Firs_name</td>
				<td>Last_name</td>
				<td>Date_of_ brith</td>
				<td>F_name</td>
				<td>Email</td>
				<td>Password</td>
				<td>Address</td>
				<td>Nic</td>
				<td>Contac</td>
				<td>Domacil</td>
			


			</tr>
		</thead>

		<tbody>
			<?php
				require_once("opendb.php");
				$query = "select * from student";
				$result = $conn -> query($query) or die(error);

				foreach ($result as $row) {
				?>
					<tr>
						<td><?php echo $row['std_id'];?></td>
						<td><?php echo $row['First_name'];?></td>
						<td><?php echo $row['Last_name'];?></td>
						<td><?php echo $row['Date_of_Birth'];?></td>
						<td><?php echo $row['F_name'];?></td>
						<td><?php echo $row['Email'];?></td>
						<td><?php echo $row['Password'];?></td>
						<td><?php echo $row['Address'];?></td>
						<td><?php echo $row['Nic'];?></td>
						<td><?php echo $row['Contact'];?></td>
						<td><?php echo $row['Domacil'];?></td>
						
						
			
			
						<td>
							<button onclick="window.location.href='Edit.php?id=<?php echo $row['std_id']; ?>'">Edit</button>
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