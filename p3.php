<?php
include 't.php';
error_reporting(0);
 session_start();
    if(isset($_POST['submit'])) //POST is used to collect data from "form"
    {    

        $cd=$_POST['cdno']; 
         $cv=$_POST['cvv']; 
        $mon=$_POST['mon']; 
        $year=$_POST['year']; 
         $_SESSION['amt']=$_SESSION['value'];

        
        $sql="insert into pmt()values('".$_POST['id']."','$cd','$cv','$mon','$year','".$_SESSION['amt']."')";  //inserting data to database
    

    	if(mysqli_query($con,$sql))
    	{
    		echo"<script>alert('new record inserted...')</script>";    //shows popup after insertion
    	}
    	else
    	{
    		echo"error:".mysqli_error($con);   //if error occurs
    	}
    	mysqli_close($con);
        
        echo'<center><h2> YOUR TICKET BOOKED SUCCESSFULLY</h2></center>';
       
     include 'detail.php';
  
    }

    
?>
