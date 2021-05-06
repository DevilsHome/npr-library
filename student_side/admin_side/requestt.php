<?php
  $con=mysqli_connect("localhost","root","","lib");
  include "include/trailnavbar.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

		.srch
		{
			padding-left: 850px;
		}
		.form-control
		{
			width: 300px;
			height: 40px;
			background-color: black;
			color: white;
		}
		body {
			background-image: url("images/1111.jpg");
			background-repeat: no-repeat;
  		font-family: "Lato", sans-serif;
  		transition: background-color .5s;
}
.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
.container
{
	height: 600px;
	background-color: black;
	opacity: .8;
	color: white;
}

	</style>

</head>
<body>
<!--______sidenav______-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))
                ?>

                <h2 style="text-align: center;">WELCOME</h2>

     
      <div style="text-align: center;"> <b> </b>
        <h4>
          <?php echo $_SESSION['login_user']; ?>
        </h4>
      </div>
            </div><br><br>

 
  <div class="h"> <a href="book.php">Books</a></div>
  <div class="h"> <a href="add.php">Add Books</a></div>
  <div class="h"> <a href="requestt.php">Book Request</a></div>
  <div class="h"> <a href="issue_book.php">Issue Information</a></div>
  <div class="h"><a href="expire.php">Expired List</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "300px";
	  document.getElementById("main").style.marginLeft = "300px";
	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	  document.body.style.backgroundColor = "white";
	}
	</script>
	<br>

<div class="container">
	<div class="srch">
		<br>
		<form method="post" action="" name="form1">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="issn_no" class="form-control" placeholder="ISNN NO" required=""><br>
			<button class="btn btn-default" name="submit" type="submit">Submit</button><br>
		</form>
	</div>

	<h3 style="text-align: center;">Request of Book</h3>


	<?php
	
	if(isset($_SESSION['login_user']))
	{
		$sql= "SELECT student.username,firstname,trade,book.issn_no,name,authors,edition,status FROM student inner join issue_book ON student.username=issue_book.username inner join book ON issue_book.issn_no=book.issn_no WHERE issue_book.approve =''";
		$res= mysqli_query($con,$sql);

		if(mysqli_num_rows($res)==0)
			{
				echo "<h2><b>";
				echo "There's no pending request.";
				echo "</h2></b>";
			}
		else
		{
			echo "<table class='table table-bordered' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Fname";  echo "</th>";
				echo "<th>"; echo "trade";  echo "</th>";
				echo "<th>"; echo "Issn No.";  echo "</th>";
				echo "<th>"; echo "Book Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['firstname']; echo "</td>";
				echo "<td>"; echo $row['trade']; echo "</td>";
				echo "<td>"; echo $row['issn_no']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	else
	{
		?>
		<br>
			<h4 style="text-align: center;color: yellow;">You need to login to see the request.</h4>
			
		<?php
}
if(isset($_POST['submit']))
{
  if($_POST['username']=="" || $_POST['issn_no']=="")
  {
    $err="Fill your username and password first";
  }
  else{
    $sql=mysqli_query($con,"SELECT * FROM issue_book where username='{$_POST['username']}'and issn_no='{$_POST['issn_no']}';");
    $row=mysqli_fetch_object($sql);
    $fusername=$row->username;
    $fissn_no=$row->issn_no;
    if ($fusername==$_POST['username'] && $fissn_no==$_POST['issn_no'])
    {
     $_SESSION['username']=$_POST['username'];
		$_SESSION['issn_no']=$_POST['issn_no'];
?>
  <script type="text/javascript">
            window.location="approve.php"
          </script>
        <?php
      }
      else
      {
        ?>
          <script type="text/javascript">
           alert('The username or issn_no may incorrect');
          </script>
        <?php
      }
    }
}
?>
</div>
</div>
</body>
<?php
include "include/footer.php";
?>
</html>
