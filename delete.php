<?php

include 't.php';
      
$query="TRUNCATE TABLE fs"; 
$query1="TRUNCATE TABLE info";
$query2="TRUNCATE TABLE ss";
$query3="TRUNCATE TABLE ss2";
$query4="TRUNCATE TABLE pmt";
 //inserting data to database
$data = mysqli_query($con,$query);
if($data)
{
	echo" ";    //shows popup after insertion
}
$data = mysqli_query($con,$query1);
if($data)
{
	echo" ";    //shows popup after insertion
}
$data = mysqli_query($con,$query2);
if($data)
{
	echo" ";    //shows popup after insertion
}
$data = mysqli_query($con,$query3);
if($data)
{
	echo" ";     //shows popup after insertion
}
$data = mysqli_query($con,$query4);
if($data)
{
	echo" ";     //shows popup after insertion
}
else
{
echo"failed to delete:";  //if error occurs
}


?>
<?php echo "<center><h1> THANK YOU......</h1><?center>";?>