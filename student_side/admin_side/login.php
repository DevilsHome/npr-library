<?php
include "include/trailnavbar.php";
?>
<?php
$con=mysqli_connect("localhost","root","","lib") or die(mysqli_error());
?>
<?php
error_reporting(0);

if(isset($_POST['submit']))
{
	if($_POST['username']=="" || $_POST['password']=="")
	{
		$err="Fill your id and password first";
	}
	else{
		$d=mysqli_query($con,"SELECT * FROM admin where username='{$_POST['username']}'");
		$row=mysqli_fetch_object($d);
		$fusername=$row->username;
		$fpassword=$row->password;
		if ($fusername==$_POST['username'] && $fpassword==$_POST['password'])
		{
			$_SESSION['login_user']=$_POST['username'];
			
 ?>
  <script type="text/javascript">
            window.location="adminprofile.php"
          </script>
        <?php
      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("invalid id and Password");
          </script>
        <?php
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
	*{
	margin:0px;
	padding:0px;
}
body{
	background:url('images/login.jpg');
	background-size:cover;
}
.form{
	width:500px;
	height:400px;
	background-color: rgba(0,0,0,2.6);
	margin:100px auto;
	text-align: center;
	opacity:0.6;
	color:#fff;
	
    -webkit-box-shadow: 10px 10px 10px 5px red, inset 10px 10px 25px 10px red, 10px 13px 10px 19px rgba(0,0,0,0); 
box-shadow: 10px 10px 10px 5px red, inset 10px 10px 25px 10px red, 10px 13px 10px 19px rgba(0,0,0,0);
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
input[type="submit"]{
    height:30px;
    width: 80px;
    border-radius: 3px;
    margin-top: 3px;
    color: blue;
}
</style>
</head>
<body>
	
	<div class="form">
<form action="" method="Post"> 
	<font color="#FF0000" size="+2"> </font><br>
	<h1 style="font-family:ARIAL BLACK; color: aqua;  font-size:295%; font-weight:bold;"> SLIET LONGOWAL</h1>
	<h1 style="font-family:cambria; font-size:230%; color: aqua; font-weight:bold; margin-top:3%; margin-bottom:5%;">"CENTRAL LIBRARY"</h1>
	<h3 style="font-family:Times New Roman;font-weight: bold; color:skyblue; margin-top:3%; margin-bottom:5%;">Admin Login</h3>
	<input type="text" placeholder="Username" name="username" required="" class="form-control"><br>
	<input type="password" placeholder="Password" name="password" required="" class="form-control">
	<input type="submit" placeholder="LOGIN" class="submit" name="submit">
	<br><br>
	<a style="float: left; margin-left: 190px; color: yellow; " href="password_update.php">Forget Password?</a>&nbsp &nbsp
</form>
</div>
</body>
<?php
include "include/footer.php";
?>
</html>