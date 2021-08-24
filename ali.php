<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DIV FROM</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
		if (isset($_POST['submit'])){
			//print_r($_POST);

			$firstname = $_POST['firstname'];
			
			$lastname = $_POST['lastname'];

			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$add = $_POST['add'];
			$NIC = $_POST['NIC'];
			$Contact = $_POST['Contact'];
			$DOMACIL = $_POST['DOMACIL'];
		
		
			// echo $name;
			// echo $gpa;
			// echo $session;
			// echo $degree;

			require_once("opendb.php");

			$query = "insert into student_from (First_name, Last_name,	Date_of_Birth,	F_name	,Email,	Password,Address,	Nic,	Gender,	Domacil	,Code	) values('$firstname','$lastname','$gender','$email','$pass','$add','$NIC','$Contact','$DOMACIL' )";

			//echo $query;

			$result = $conn -> query($query) or die(error);
			echo "data inserted!";
		}
        ?> 
        <body>
 <div class="container">
 	<h1 align="center">STUDENT FORM</h1>
 	<div class="row">
 			<form>
 				<div class="col-sm-6">
 					<div class="form-group">
	 					<label for="student">first name</label>
	       				<input type="text" name="firstname" class="form-control " >
       				</div>
       			</div>
       			 <div class="col-sm-6">
 					<div class="form-group">
	 					<label for="student">last name</label>
	       				<input type="text" name="lastname" class="form-control " >
       				</div>
       			</div>
       			<div class="col-sm-6">
 					<div class="form-group">
	 					<label for="dob">Date of Birth</label>
	       				<input type="date" name="dob"  class="form-control " >
       				</div>
       			</div>

       			<div class="col-sm-6">
	       			<div class="form-group">
		       			<label for="student">F/Name</label>
		       			<input type="text"  name="fname" class="form-control"  >
	       			</div>
	       		</div>
				<div class="col-sm-6">
		       		<div class="form-group">
		       			<label for="student">Email</label>
		       			<input type="email" name="email" class="form-control" >
		       		</div>
		       	</div>
		       	<div class="col-sm-6">
		       		<div class="form-group">
		       			<label for="student">Password</label>
		       			<input type="Password" name="pass" class="form-control" name="password" >
		       		</div>
		       	</div>

		       	<div class="col-sm-6">
		       		<div class="form-group">
		       			<label for="student">Address</label>
		       			<input type="text" name="add" class="form-control" name="password" >
		       		</div>
	       		</div>
	       		<div class="col-sm-6">
		       		<div class="form-group">
		       			<label for="student">NIC</label>
		       			<input type="text" name="NIC" class="form-control" name="password" >
		       		</div>
		       	</div>
	       		
	       		<div class="col-sm-6">
	       		<div class="form-group">
	       			<label for="student">Contact</label>
	       			<input type="nunber" name="Contact" class="form-control" name="nuber" >
	       		</div>
	       	</div>
	       	<div class="col-sm-6">
		       		<div class="form-group">
			       		<label for="student">DOMACIL</label>
			       		<select class="form-control" name="DOMACIL">
			       			<option value="">Peshawar</option>
			       			<option>Mardan</option>
			       			<option>Lahore</option>
			       		</select>
	       			</div>
	       		</div>
	       		<div class="col-sm-6">
	       			<div class="form-group">
	       				<label for="student">Gender</label><br>
	       				<select class="form-control" name="gender">
			       			<option value="">select your gender</option>
			       			<option>Male</option>
			       			<option>Female</option>
			       		</select>
			       	</div>
	       		</div>
	       			       		<div class="col-sm-6">
	       			<div class="form-group">
	       				<label for="student">CODE</label><br>
	       				<select class="form-control" name="code">
			       			<option value="">select your gender</option>
			       			<option>Male</option>
			       			<option>Female</option>
			       		</select>
			       	</div>
	       		</div>
	       		<div class="col-sm-6">
		       		<div class="form-group">
		       			<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
	       			</div>
	       		</div>
       		</form>
       	</div>
    	</div>
   

</body>
</html>