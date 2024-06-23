<!DOCTYPE html>
<html>
<head>
    <title></title>
     <style>
div{
  border: 3px solid black;
  background-color:darkorange;
}
body{
   background-image: url(p.webp);
   background-size:1500px 650px;
   
}

  </style>

</head>
<body>
<?php
include 't.php';

session_start();
error_reporting(0);
    if(isset($_POST['submit'])) //POST is used to collect data from "form"
    {   
       
        $_SESSION['$from']=$_POST['source'];      //used to store values in "from"
         $_SESSION['$to']=$_POST['destination'];
         $date=$_POST['departure'];
        $_SESSION['$no']=$_POST['travellers'];
       
        
        $sql="insert into fs()values('".$_POST['id']."','".$_SESSION['$from']."','".$_SESSION['$to']."','$date','".$_SESSION['$no']."')";  //inserting data to database
         
       

        if(mysqli_query($con,$sql))
        {
            echo" ";    //shows popup after insertion
        }
        else
        {
            echo"error:".mysqli_error($con);   //if error occurs
        }
          
        

        if($_SESSION['$from']=='Bangalore' && $_SESSION['$to']=='Mumbai')
        {
            echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 5000rs</h4>
          <h6>bangalore &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; mumbai</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>5000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>10000rs</h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount for 3 passengers is <h2>15000rs</h2></h4>"; 
               }  

         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        }
        elseif($_SESSION['$from']=='Mumbai' && $_SESSION['$to']=='Delhi')
        {
         echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 4000rs</h4>
          <h6>Mumbai &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Delhi</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>4000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>8000rs</h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount  for 3 passengers is <h2>12000rs</h2></h4>"; 
               }        
         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        }
        elseif($_SESSION['$from']=='Delhi' && $_SESSION['$to']=='Bangalore')
        {
         echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 7000rs</h4>
          <h6>Delhi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Bangalore</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>7000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>14000rs<h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount for 3 passengers is <h2>21000rs</h2></h4>"; 
               }        
         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        }
        elseif($_SESSION['$from']=='Bangalore' && $_SESSION['$to']=='Delhi')
        {
         echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 7000rs</h4>
          <h6>Bangalore &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Delhi</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>7000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>14000rs</h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount for 3 passengers is <h2>21000rs</h2></h4>"; 
               }        
         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        }
        elseif($_SESSION['$from']=='Mumbai' && $_SESSION['$to']=='Bangalore')
        {
         echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 5000rs</h4>
          <h6>Mumbai &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Bangalore</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>5000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>10000rs</h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount for 3 passenger is <h2>15000rs</h2></h4>"; 
               }        
         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        }
        elseif($_SESSION['$from']=='Delhi' && $_SESSION['$to']=='Mumbai')
        {
        echo '<h4 style="background-color:green;">DEPARTURE TIME &emsp;ARRIVAL TIME &emsp;PRICE</h4>
          <div>
          <h4 >16:20 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18:40 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 4000rs</h4>
          <h6>Delhi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Mumbai</h6>';
          if($_SESSION['$no']==1)
           {
            echo"<h4> Your total amount for 1 passenger is <h2>4000rs</h2></h4>";
           }
            elseif ($_SESSION['$no']==2)  {
               echo"<h4> Your total amount for 2 passengers is <h2>8000rs</h2></h4>";
               } 
               elseif ($_SESSION['$no']==3)  {
                echo"<h4> Your total amount for 3 passengers is <h2>12000rs</h2></h4>"; 
               }        
         echo' <form action="pssg.php">
          <input type="submit" name="submit" value="SELECT">
          </form>';

        
        }
      
        if($_SESSION['$from']=='Bangalore' && $_SESSION['$to']=='Bangalore' || $_SESSION['$from']=='Mumbai' && $_SESSION['$to']=='Mumbai' || $_SESSION['$from']=='Delhi' &&  $_SESSION['$to']=='Delhi')
       
        {
           
            include 'delete0.php';
             include 'fromto.html';
            echo"<script>alert('SORRY FLIGHTS NOT AVAILABE.....')</script>";  
             
        }

    }


?>
</body>
</html>
