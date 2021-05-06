<?php
 $con=mysqli_connect("localhost","root","","lib");
  include "include/trailnavbar.php";
  error_reporting(0);
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Fine Calculation </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		
    .srch
    {
      padding-left: 70%;
      margin-top:-100px;

    }
    .form-control
    {
      width: 300px;
      height: 40px;
      background-color: black;
      color: white;
    }

		body {
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
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px}
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
	<div class="h"><a href="book.php">Books</a></div>
	<div class="h"><a href="add.php">Add Books</a></div>
  <div class="h"><a href="requestt.php">Book Request</a></div>
  <div class="h"><a href="issue_book.php">Issue Information</a></div>
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
  document.body.style.backgroundColor = "#fff";
}
</script>

	<!--_________search bar_________-->
<div class="container">
<form method="post" action="">
        <a hre="student/fine2.php" ><button name="submit2" type="submit" onclick="window.location.href = 'fine2.php'" class="btn btn-default" style="background-color: #06861a; color: yellow;">RETURNED</button></a>
                      &nbsp&nbsp
          <button name="submit3" type="submit" class="btn btn-default" style="background-color: red; color: yellow;">EXPIRED</button>
      </form>
      </div>

            <div class="srch">
    <form class="navbar-form" method="post" name="form1">
      
        <input class="form-control" type="text" name="search" placeholder="search username.." required="">
        <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
        </button>
    </form>
    <form class="navbar-form" method="post" name="form1">
      
        <input class="form-control" type="text" name="username" placeholder="Enter the username" required=""><br>
        <input class="form-control" type="text" name="issn_no" placeholder="Enter the ISSN_No." required="">
        <button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn-default">Submit
        </button>
    </form>
  </div>
		</form>
	</div>

	<h2>List Of Students</h2>
	<?php
	if(isset($_SESSION['login_user']))
	{

		if(isset($_POST['submit']))
		{
			$sql=mysqli_query($con,"SELECT * FROM `fine` where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($sql)==0)
			{
				echo "Sorry! No student found with that username. Try searching again.";

			}
      
        else
        {
        	         	
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo " Username ";	echo "</th>"; 
				echo "<th>"; echo " Issn No";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Days ";  echo "</th>";
				echo "<th>"; echo " Fines in Rs. ";  echo "</th>";
				echo "<th>"; echo " Status ";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($sql))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['issn_no']; echo "</td>";
				echo "<td>"; echo $row['returned']; echo "</td>";
				echo "<td>"; echo $row['day']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
	$res=mysqli_query($con,"SELECT * FROM `fine`;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo " Username ";	echo "</th>";
				echo "<th>"; echo " Issn No";  echo "</th>";
				echo "<th>"; echo " Returned ";  echo "</th>";
				echo "<th>"; echo " Days ";  echo "</th>";
				echo "<th>"; echo " Fines in Rs.";  echo "</th>";
				echo "<th>"; echo " Status ";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['issn_no']; echo "</td>";
				echo "<td>"; echo $row['returned']; echo "</td>";
				echo "<td>"; echo $row['day']; echo "</td>";
				echo "<td>"; echo $row['fine']; echo "</td>";
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
if(isset($_POST['submit1']))
{
  if($_POST['username']=="" || $_POST['issn_no']=="")
  {
    $err="Fill your username and password first";
  }
  else{
   $sql=mysqli_query($con,"SELECT * FROM fine where username='{$_POST['username']}'and issn_no='{$_POST['issn_no']}';");
    $row=mysqli_fetch_object($sql);
    $fusername=$row->username;
    if ($fusername==$_POST['username'] && $fissn_no==$_POST['issn_no'])
    {
    mysqli_query($con,"UPDATE fine SET status='paid' where username='$_POST[username]' and issn_no='$_POST[issn_no]' ");

          
?>
  <script type="text/javascript">
            window.location="fines.php"
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
</body>
</html>