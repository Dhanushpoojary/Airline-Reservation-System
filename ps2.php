 <?php
  include 't.php'; 
error_reporting(0);
session_start();
 if(isset($_POST['submit']))   
    {  
     
      $fname=$_POST['fnam'];
      $lname=$_POST['lnam'];
      @$gender=$_POST['gende'];
      
      
      $sql="insert into ss()values('".$_POST['id']."','$fname','$lname','$gender')";  //inserting data to database
    

      if(mysqli_query($con,$sql))
      {
        echo"<script>alert('new record inserted...')</script>";  

        if($_SESSION['$no']==3)
      {
        include 'psg3.html';
      }
    
      else
      {
         include 'pay.php'; 
      }
      }

      else
      {
        echo"error:".mysqli_error($con);   //if error occurs
      }
 
        }
       
   
  ?>
 
  
