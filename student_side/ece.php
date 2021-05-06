
<?php
 $con=mysqli_connect("localhost","root","","lib");
  include "include/trailnavbar1.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
			.srch
		{
			padding-left: 1000px;

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
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    #main {
    width:100%;
  }
   .srch{
  	width:70%;
  }
  .navbar-form{
  	width:100%;
  }
  .form-control{
  width:100%;
  }
  .btn btn-default{
  	width:100%;
  }
   .glyphicon glyphicon-search{
  	width:100%
  }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
   #main {
    width:100%;
  }
  .srch{
  	width:100%;
  }
  .navbar-form{
  	width:100%;
  }
    .form-control{
   width:100%;

  }
  .btn btn-default{
  	width:100%;
  }
   .glyphicon glyphicon-search{
  	width:100%
  }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  
   #main {
    width:100%;
  }
     .srch{
  	width:100%;
  }
  .navbar-form{
  	width:100%;
  }
    .form-control{
  width:100%;
  }
  .btn btn-default{
  	width:100%;
  }
   .glyphicon glyphicon-search{
  	width:100%
  }
 }

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
 
   #main {
    width:100%;
  }
      .srch{
  	width:100%;
  }
  .navbar-form{
  	width:100%;
  }
   .form-control{
    width:100%;
  }
  .btn btn-default{
  	width:100%;
  }
   .glyphicon glyphicon-search{
  	width:100%
  }
}
.w3-button {width:150px;}
h3{
	margin-top:-20px;
	font-size: 40px;
	
}

	</style>

</head>
<body>
	<!--______sidenav______-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

            </div><br><br>
 <div class="h"> <a href="book.php">Books</a> </div>
 <div class="h"> <a href="add.php">Add Books</a> </div> 
  <div class="h"> <a href="requestt.php">Book Request</a></div>
  <div class="h"> <a href="issue_book.php">Issue Information</a></div>
  <div class="h"><a href="expire.php">Expired List</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav(){
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
	<!--______search bar_________-->

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="issn_no" placeholder="Enter Book ISSN_NO" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn-default">request
				</button>
		</form>
	</div>
<div class="w3-container">
  <h3>Select your Branch</h3>
  <a href="cse.php"><button class="w3-button w3-indigo">Computer</button></a>
  <a href="ece.php"> <button class="w3-button w3-blue">Electrical</button></a>
  <a href="cpt.php"> <button class="w3-button w3-cyan">Chemical</button></a>
  <a href="mech.php"><button class="w3-button w3-deep-purple">Mechanical</button></a>
 </div>
	<h2>List Of Books</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$sql=mysqli_query($con,"SELECT * from `book` join`department` using(depart_id) where  name like '%$_POST[search]%' ");
			if(mysqli_num_rows($sql)==0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
			echo "<tr style=' color: #000; font-weight:bold;'>";
				//Table header
				echo "<th>"; echo "Depart_ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "ISSN NO.";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";	
				
					
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($sql))
			{
				echo "<tr>";
				echo "<tr style=' color:#000; font-weight:bold;'>";
				echo "<td>"; echo $row['depart_id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['issn_no']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				
				
				
				echo "</tr>";
			}
		echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{
			$res=mysqli_query($con,"SELECT * FROM `book` join `department` using(depart_id) where depart_id=2 ORDER BY `book`.`name` ASC;");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
			echo "<tr style=' color: #000; font-weight:bold;'>";
				//Table header
				echo "<th>"; echo "Depart_ID";	echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "ISSN NO.";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";	
				
			
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<tr style=' color:#000; font-weight:bold;'>";
				echo "<td>"; echo $row['depart_id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['issn_no']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";
		}
		
		if(isset($_POST['submit1']))
		{
			if(isset($_SESSION['login_user']))
			{
				mysqli_query($con,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[issn_no]', '', '', '');");
				?>
					<script type="text/javascript">
						window.location="request.php"
					</script>
				<?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("You must login to Request a book");
					</script>
				<?php
			}
		}

	?>
</div>
</body>
</html>