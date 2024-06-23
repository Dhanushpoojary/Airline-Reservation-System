<?php

include 't.php';
      
$query="TRUNCATE TABLE fs"; 

 //inserting data to database
$data = mysqli_query($con,$query);
if($data)
{
	echo" ";    //shows popup after insertion
}
else
{
echo"failed to delete:";  //if error occurs
}


?>