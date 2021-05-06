<?php
 $con=mysqli_connect("localhost","root","","lib");
  include "include/trailnavbar.php";
  error_reporting();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .srch
    {
      padding-left: 1000px;

    }
    
    body {
  background-color: #024629;
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
  margin-left: 10px;
}
.h:hover
{
  color:white;
  width: 300px;
  height: 50px;
  background-color: #00544c;
}

.book
{
    width: 400px;
    margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
  height: 40px;
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  #main {
    width:100%;
  }
    .container{
        width:100%;
    }
 .book{
  width:100%;
 }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    #main {
    width:100%;
  }
    .container{
        width:100%;
    }
  .book{
  width:70%;
 }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
   #main {
    width:100%;
  }
    .container{
        width:100%;
    }
   .book{
  width:60%;
 }
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  
   #main {
    width:100%;
  }
    .container{
      width:100%;
} 
.book{
  width:60%;
 }
 }

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
 
   #main {
    width:100%;
  }
    .container{
      width:100%;
} 
.book{
  width:40%;
 }
}

  </style>


</head>
<body>

<!--_________________sidenav_______________-->
  
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
              
                ?>
            </div><br><br>

<div class="h"> <a href="book.php">Books</a></div>
 <div class="h"> <a href="add.php">Add Books</a> </div> 
  <div class="h"> <a href="requestt.php">Book Request</a></div>
  <div class="h"> <a href="issue_book.php">Issue Information</a></div>
   <div class="h"><a href="expire.php">Expired List</a></div>
</div>
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

<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Adds News Books</b></h2>
    
    <form class="book" action="" method="post">
        <input type="text" name="depart_id" class="form-control" placeholder="Depart id" required=""><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>   
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="issn_no" class="form-control" placeholder="ISSN NO" required=""><br>

       <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
 <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT issn_no from `book`";
        $res=mysqli_query($con,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['issn_no']==$_POST['issn_no'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
                mysqli_query($con,"INSERT INTO `book` VALUES('','$_POST[depart_id]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[issn_no]');");
        ?>
          <script type="text/javascript">
           alert("Book added successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The book already exist.");
            </script>
          <?php

        }
        }
    ?>
</div>
<br>
</body>
</html>