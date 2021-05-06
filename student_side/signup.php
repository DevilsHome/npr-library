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