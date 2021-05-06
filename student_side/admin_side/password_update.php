<?php
include "include/trailnavbar.php";
$con=mysqli_connect("localhost","root","","lib");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Update Password</title>
	<style type="text/css">
body{
	height: 650px;
	background-image: url("images/7.jpg");
	background-repeat: no-repeat;
}
.wrapper{
	width: 500px;
	height: 300px;
	margin:50px auto;
	background-color: black;
	opacity: .8;
	color: white;
	padding: 27px 15px;
}
.form-control{
	width: 300px;
}
input[type="text"]{
    height:30px;
    width: 400px;
    margin-left:45px;
    border-radius: 3px;
}
input[type="password"]{
    height:30px;
    width: 400px;
    margin-left:45px;
    border-radius: 3px;
}
button[type="submit"]{
    height:30px;
    width: 80px;
    margin-left:45px;
    margin-top: 3px;
    border-radius: 3px;
}

	</style>
</head>

<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>
		</div>
	<form action="" method="post" >
			<input type="text" name="username" class="form-control" placeholder=" Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder=" Email" required=""><br>
			<input type="password" name="password" class="form-control" placeholder=" New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>
	</div>
	<?php

		if(isset($_POST['submit']))
		{
		if(mysqli_query($con,"UPDATE admin SET password='$_POST[password]'
			WHERE username='$_POST[username]' AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
		}
	?>
</div>
</body>
<?php
include "include/footer.php";
?>
</html>