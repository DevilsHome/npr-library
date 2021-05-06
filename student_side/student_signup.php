 <?php
$con=mysqli_connect('localhost','root','','lib');
include "include/trailnavbar1.php";
?>
<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <title>STUDENT REGISTRATION</title>
    <style>
  *{
  margin:0px;
  padding:0px;
}
body{
  background-image: url("images/9.png");
  height: 100%;
  width: 100%;
  background-repeat: no-repeat;
  background-size:cover;
}
.form{
  width:500px;
  height:580px;
  background-color:black;
  margin:50px auto;
  text-align: center;
  opacity:0.6;
  color:#fff;
  -webkit-box-shadow: 5px 5px 0px 0px #289FED, 10px 10px 0px 0px #5FB8FF, 15px 15px 0px 0px #A1D8FF, 20px 20px 0px 0px #CAE6FF, 25px 25px 0px 0px #E1EEFF, 0px 3px 0px 19px ;
box-shadow: 5px 5px 0px 0px #289FED, 10px 10px 0px 0px #5FB8FF, 15px 15px 0px 0px #A1D8FF, 20px 20px 0px 0px #CAE6FF, 25px 25px 0px 0px #E1EEFF, 0px 3px 0px 19px ;
}
input[type="text"],select{
    height:35px;
    width: 350px;
    margin-left:75px;
    border-radius: 5px;
}
input[type="password"]{
    height:35px;
    width: 350px;
    margin-left:75px;
    border-radius: 5px;
}
input[type="submit"]{
    height:30px;
    width: 80px;
    border-radius: 3px;
    margin-top: 3px;
    margin-left: -5px;

}

</style>
</head>

<body>

    <div class="form">
<form action="" method="POST" enctype="multipart/form-data" name="form1" onsubmit="return checkForm(this);">
<font color="#FF0000" size="+2"></font>
  <h1 style="font-family:ARIAL BLACK; font-size:250%; font-weight:bold;"> SLIET LONGOWAL</h1>

  <h1 style="font-family:cambria; font-weight:bold; margin-top:3%; margin-bottom:5%;">"CENTRAL LIBRARY"</h1>

  <h3 style="font-family:Times New Roman;font-weight: bold; margin-top:3%; margin-bottom:5%;">Student Signup</h3>
<input type="text" name="firstname" placeholder="Firstname"  required="" class="form-control"><br>
  <input type="text" name="lastname" placeholder="Lastname"   required="" class="form-control"><br>
  <select type="text" class="form-control" name="trade" require="" style="height:35px;
    max-width: 140px;
    margin-left:75px;
    margin-top:px;
    border-radius: 5px
">
  <option >Select Department</option>
  <option  value="ICD/computer">ICD/computer</option>
  <option   value="ICD/Chemical">ICD/Chemical</option>
  <option   value="ICD/Electrical">ICD/Electrical</option>
  <option  value="ICD/Instrumentation">ICD/Instrumentation</option>
  <option value="ICD/Electronics">Dee/ctv</option>
  <option  value="ICD/Mechanical">ICD/Mechanical</option>
  <option value="B.E/Computer">B.E/Computer</option>
  <option  value="B.E/Mechanical">B.E/Mechanical</option>
  <option value="B.E/Electronics">B.E/Electronics</option>
  </select>
  <input type="text" name="username" placeholder="Reg_no_1712..." required="" pattern="[A-Za-z0-9_/]{1,15}" class="form-control" style="max-width:200px; margin-left:225px; margin-top:-35px;" list="list">
    <datalist id="list">
  <option  value="0">Select Department</option>
  <option  value="Dcs/cde">Dcs/cde</option>
  <option  value="Dct/cpt">Dct/cpt</option>
  <option  value="Dee/cen">Dee/cen</option>
  <option  value="Dee/In">Dee/In</option>
  <option  value="Dee/ctv">Dee/ctv</option>
  <option  value="Dme/caf">Dme/caf</option>
  <option  value="Dme/cac">Dme/cac</option>
  <option  value="Dme/cwg">Dme/cwg</option>
  <option  value="Dme/ctd">Dme/ctd</option>
  <option  value="Gcs">Gcs</option>
  <option  value="Gme">Gme</option>
  <option  value="Gee">Gee</option>
  </datalist>
  <br>
  <input type="password" name="password" placeholder="Password" pattern="^(?=.[0-9])(?=.[a-z])(?=.*[A-Z](?=\S+$).{^,)$" required=""  class="form-control"><br>
  <input type="text" name="email" placeholder="someone@gmail.com"                         pattern=".+@gmail\.com|.+@gmail\.com" required="" class="form-control" " ><br>
  <input type="text" name="contact" pattern="/^91(7\d|8\9|d)\d{10}$/" placeholder="+91.........  " required="" class="form-control" list="code">
  <datalist id="code">
    <option value="+91">+91</option>
  <option  value="+123">+123</option>
  <option value="+0"+0</option>
  </datalist>
  <br>
    <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px; "> 
   
      
</form>
    <?php

      if(isset($_POST['submit']))
      {
      
         $count=0;
   
          $sql="SELECT username from `student`";
        $res=mysqli_query($con,$sql);
      
        while($row=mysqli_fetch_assoc($res))
        {
          
    if($row['username']==$_POST['username']){
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($con,"INSERT INTO `student` VALUES('', '$_POST[firstname]', '$_POST[lastname]','$_POST[trade]', '$_POST[username]','$_POST[password]', '$_POST[email]', '$_POST[contact]');");
            

        ?>
           <script type="text/javascript">
            alert("Registered successfully.");
             window.location='student_login.php';
            </script>
        <?php
        }
      
          else
        {

          ?>
          <script type="text/javascript">
    alert("The username already exist.");
           </script>
          <?php
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
<script type="text/javascript">

  function checkForm(form)
  {

    if(form.password.value != "" && form.password.value == form.password.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    alert("You have enterd valid password:" + form.password.value);
    return true;
    returnToPreviousPage();
    window.stop();
}
</script>
