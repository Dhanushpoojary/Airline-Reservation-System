<?php
include('t.php');
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
echo "please fill the empty field.";
}
elseif($_REQUEST['password']!=$_REQUEST['repassword'])
{
    echo"repassword is mismatched with password ";
}
Else
{
$sql="insert into registration() values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$sql2="insert into login() values('".$_REQUEST['name']."','".$_REQUEST['password']."')";

if(mysqli_query($con,$sql))
{
Echo "<script>alert('new record inserted...')</script>";
}
else
{
echo "There is some problem in inserting record";
}
if(mysqli_query($con,$sql2))
{
Echo " ";
}
else
{
echo "There is some problem in inserting record";
}
include('pr03.php');
}
}


?>