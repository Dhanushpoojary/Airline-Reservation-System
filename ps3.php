 <?php
  include 't.php';  

 if(isset($_POST['submit']))   
    {  
     
      $fname=$_POST['fna'];
      $lname=$_POST['lna'];
      @$gender=$_POST['gend'];
      
      
      $sql="insert into ss2()values('".$_POST['id']."','$fname','$lname','$gender')";  //inserting data to database

      if(mysqli_query($con,$sql))
      {
        echo"<script>alert('new record inserted...')</script>";   //shows popup after insertion
      }

      else
      {
        echo"error:".mysqli_error($con);   //if error occurs
      }
      
        include 'pay.php';  
    
        }
   
  ?>
 