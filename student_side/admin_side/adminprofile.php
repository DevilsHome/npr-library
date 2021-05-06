<?php
$con=mysqli_connect("localhost","root","","lib");
include "include/trailnavbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Profile</title>
	<style type="text/css">
 *{
 	margin: 0px;
 	padding: 0px;
 }
.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: white;
 		}
 	</style>

</head>
<body  style="background-color: #004528;">
	<div class="container">
 		<form action="" method="post">
 		<a href="edit.php">
 		 <button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>
 		</a>
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="edit.php"n
 				</script>
 				<?php
 			}
 				$sql = mysqli_query($con,"SELECT * FROM admin WHERE username='$_SESSION[login_user]'");
 			?>
 			<h2 style="text-align: center;">WELCOME</h2>

 			<?php
 				$row=mysqli_fetch_assoc($sql);

 				
 			?>
 			<div style="text-align: center;"> <b> </b>
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['firstname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['lastname'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";
	 					
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>
 </body>
 <?php
include "include/footer.php";
?>
 </html>