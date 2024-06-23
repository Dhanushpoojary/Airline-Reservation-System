<?php
    $con=mysqli_connect("localhost","root","","dbmsp");// Specifies the hostname, MySQL username,password,table name
    
    if(!$con)
    {
    echo("error".mysqli_error($con));
    }
    else
    {
    echo" ";
    }
?>