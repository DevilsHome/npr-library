<?php
	include "include/trailnavbar.php";
	$con=mysqli_connect('localhost','root','','lib');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #004528;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?
		$sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($con,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<label><h4><b>First Name: </b></h4></label>
		<input class="form-control" type="text" name="firstname" value="">

		<label><h4><b>Last Name</b></h4></label>
		<input class="form-control" type="text" name="lastname" value="">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];


			$sql1= "UPDATE admin SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($con,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="adminprofile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
