<?php
include 't.php';
error_reporting(0);
session_start();

    if(isset($_POST['submit']))   
    {	
      
    	$fname=$_POST['fname'];
    	$lname=$_POST['lname'];
        @$gender=$_POST['gender'];
        @$cont=$_POST['cont']; //"@" is used to remove undefined array name error
    	$email=$_POST['email'];
       
       
        $sql="insert into info()values('".$_POST['id']."','$fname','$lname','$gender','$cont','$email')"; 
        
       
    	if(mysqli_query($con,$sql))

    	{
    		echo"<script>alert('new record inserted...')</script>"; 

            if($_SESSION['$no']==2 or $_SESSION['$no']==3)
         {
          include 'psg2.html';
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

       // 
 
      
         }
     
?>
