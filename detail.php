<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>

  <center> <table border="2" style="width:auto;float:left;">
    <tr>
      <th>id</th>
      <th>from</th>
      <th>to</th>
      <th>date</th>
      <th>fname</th>
      <th>lname</th>
      <th>gender</th>
      <th>con</th>
      <th>email</th>
      <th>amt</th>
    </tr>

<?php

include("t.php");

 $query="select * from fs inner join info on fs.id=info.id inner join pmt on info.id=pmt.id ";

 #$query="select q.*,t.amt,y.* from fs q,pmt t,ss y";
//error_reporting(0);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
  while($result= mysqli_fetch_assoc($data))
  
  {
    ?>

     <tr>
       <td><?php echo $result['id']?></td>
        <td><?php echo $result['from']?></td>
        <td><?php echo $result['to']?></td>
       <td><?php echo $result['date']?></td>
        <td><?php echo $result['fname']?></td>
       <td><?php echo $result['lname']?></td>
         <td><?php echo $result['gender']?></td>
       <td><?php echo $result['con']?></td>
        <td><?php echo $result['email']?></td>
       <td><?php echo $result['amt']?></td>
       
     </tr>

     


       <?php
  }

}

?>

<?php

 
include("t.php");

 $query="select * from fs inner join ss on fs.id=ss.id ";

 #$query="select q.*,t.amt,y.* from fs q,pmt t,ss y";
//error_reporting(0);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
  while($result= mysqli_fetch_assoc($data))
  
  {
    ?>

     <tr>
       <td><?php echo $result['id']?></td>
        <td><?php echo $result['from']?></td>
        <td><?php echo $result['to']?></td>
       <td><?php echo $result['date']?></td>
        <td><?php echo $result['fname']?></td>
       <td><?php echo $result['lname']?></td>
         <td><?php echo $result['gender']?></td>
      
       
     </tr>

     


       <?php
  }


}
?>
<?php

include("t.php");

 $query="select * from fs inner join ss2 on fs.id=ss2.id ";

 #$query="select q.*,t.amt,y.* from fs q,pmt t,ss y";
//error_reporting(0);
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
  while($result= mysqli_fetch_assoc($data))
  
  {
    ?>

     <tr>
       <td><?php echo $result['id']?></td>
        <td><?php echo $result['from']?></td>
        <td><?php echo $result['to']?></td>
       <td><?php echo $result['date']?></td>
        <td><?php echo $result['fname']?></td>
       <td><?php echo $result['lname']?></td>
         <td><?php echo $result['gender']?></td>
      
       
     </tr>

     


       <?php
  }

}

?>
         <!--  <td>
       <a href='delete.php?id=$result[id]'>
            <input type='submit' value='delete'></a></td> -->


  
</table></center>
<form method="POST" action="delete.php">
<br><br><br><input type='submit' value='close'></form>
  </body>
</html>