

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit.php</title>
</head>
<body>

	<h1>EDIT DATA</h1>
	<?php require_once('navbar.php');?>
	<?php 
		require_once("opendb.php");
		$id = $_GET['id'];
		$query = "select * from student where std_id = '$id'";
		$result = $conn -> query($query) or die(error);

		foreach ($result as $row) {
			
			$First_name= $row['First_name'];
			$Last_name= $row['Last_name'];
			$Date_of_Birth = $row['Date_of_Birth'];
			$F_name= $row['F_name'];
			$Email = $row['Email']; 
			$Password= $row['Password'];
			$Address = $row['Address']; 
			$Domacil= $row['Domacil'];
			$Contact = $row['Contact']; 
			
		}
	
	?>

	<form method="POST" action="">
		<table>
			<tr>
				<td>First_name</td>
				<td><input type="text" name="txtname" value="<?php echo $First_name;?>" required></td>
			</tr>
			<tr>
				<td>Last_name</td>
				<td><input type="text" name="txtname" value="<?php echo $Last_name;?>" required></td>
			</tr>
			<tr>
				<td>Date_of_Birth</td>
				<td><input type="text" name="Date_of_Birth" value="<?php echo $Date_of_Birth;?>"  required></td>
			</tr>
			<tr>
				<td>F_name</td>
				<td><input type="text" name="txtF_name" value="<?php echo $First_name;?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" value="<?php echo $Email;?>" name="txtEmail" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" value="<?php echo $Password;?>" required></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="txtAddress" value="<?php echo $Address;?>" required></td>
			</tr>
			<tr>
				<td>Domacil</td>
				<td><input type="text" name="txtDomacil" value="<?php echo $Domacil;?>" required></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="txtContact" value="<?php echo $Contact;?>" required></td>
			</tr>
			<tr>
				
			
		
	</form>

	<?php
		if (isset($_POST['btnsubmit'])) {
			//print_r($_GET);

			
			$first_name= $row['txtname'];
			$Last_name= $row['txtname'];
			$Date_of_birth = $row['Date_of_birth'];
			$F_name= $row['txtF_name'];
			$Email = $row['txtEmail']; 
			$Password= $row['Password'];
			$Address = $row['txtAddress']; 
			$Domacil= $row['txtDomacil'];
			$Contact = $row['txtContact']; 
			

			//require_once("opendb.php");

			//$query = "insert into student_rec (std_name, std_gpa, std_session, std_degree) values('$name','$gpa','$session','$degree')";
			$query = "update student set first_name = '$first_name', Last_neme = '$Last_neme', Date_of_birt = '$Date_of_birt', F_name = '$F_name'Email = '$Email',Password = '$Password',Address = '$Address' , Contact='$Contact' where std_id = '$id'";

			echo $query;
			//echo $query;

			$result = $conn -> query($query) or die(error);
			echo "Data Updated!";
			echo "<script>window.location.href='list.php'</script>";
		}

	?>


</body>
</html>
edit.php
Displaying edit.php.