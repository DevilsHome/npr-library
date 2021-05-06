<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<style>

 /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px){
  .navbar navbar-inverse{
    width:100%;
  }
   .responsive{
    width:100%;
    height:auto;
  }
 .container-fluid{
  width:100%;
 }
 .navbar-brand{
  width:100%;
 }
 .nav navbar-nav{
  width:100%;
 }
 .nav navbar-nav navbar-right{
  width:100%;
 }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
     .navbar navbar-inverse{
    width:100%;
  }
   .responsive{
    width:100%;
    height:auto;
  }
 .container-fluid{
  width:100%;
 }
 .navbar-brand{
  width:100%;
  height: auto;
  margin-top:-22%;
 }
 .nav navbar-nav{
  width:100%;
 }
 .nav navbar-nav navbar-right{
  width:100%;
 }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .navbar navbar-inverse{
    width:100%;
  }
.responsive{
    width:100%;
    height:auto;
  }
.container-fluid{
    width:100%;
 }
.navbar-brand{
    width:100%;
 }
.nav navbar-nav{
    width:100%;
 }
.nav navbar-nav navbar-right{
    width:100%;
 }
} 
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {  
.navbar navbar-inverse{
    width:100%;
  }
.responsive{
    width:100%;
    height:auto;
  }
.container-fluid{
  width:100%;
 }
.navbar-brand{
  width:100%;
 }
.nav navbar-nav{
  width:100%;
 }
.nav navbar-nav navbar-right{
  width:100%;
 }
 }

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
 
.navbar navbar-inverse{
    width:100%;
  }
.responsive{
    width:100%;
    height:auto;
  }
.container-fluid{
  width:100%;
 }
.navbar-brand {
  width:100%;
 }
.nav navbar-nav{
  width:100%;
 }
.nav navbar-nav navbar-right{
  width:100%;
 }
}

</style>
 <title>Central Library SLIET,Longowal | Library </title>
<head> 
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.css"></script>
          <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background:#b8beb1; height:auto;" >
        <img class="responsive" style="width:110px; margin-right:80%; border-radius: 50%; height:110px; margin-left:40px;margin-top:18px; margin-bottom: 15px; " src="pk.jpg">
           <a class="navbar-brand" href="index.php" style="font-size:2vw; height:auto; text-align: center; margin-top:-8%;margin-left:-20px; color:white; font-style:none;">Central Library SLIET Longowal<br><br>
            संत लोंगोवाल इंस्टिट्यूट ऑफ इंजीनियरिंग एंड टेक्नोलॉजी</a>
  </div>
  <ul class="nav navbar-nav" style="margin-left:0%; mARGINB">
            <li><a href="index.php">HOME</a></li>
            <li><a href="student_side/book.php">BOOK</a></li>
            <li><a href="student_side/feedback.php">FEEDBACK</a></li>
  </ul> 
       <?php
            if(isset($_SESSION['login_user']))
            {?>
                      <ul class="nav navbar-nav">
                  
                  <li><a href="student_side/studentprofile.php">PROFILE</a></li>
                   <li><a href="student_side/fine.php">FINE</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="">
                    <div style="color: white">
                      <?php
                   echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
           
                </ul>
     
              <?php
            }
            else
            {  
             ?>
              <ul class="nav navbar-nav navbar-right">
                     <li><a href="student_side/student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>   
                     <li><a href="student_side/student_signup.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
              </ul>
                <?php
            }
          ?>           
</nav>
</body>
</html>