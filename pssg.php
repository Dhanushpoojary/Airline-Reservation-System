   <!DOCTYPE html>
<html>
<head>
  <title>customer details</title>
  <style>
  h1{background-color:lightblue;}
  div{border:3px solid black;
  background-color:darkorange;}
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
       if($_SESSION['$no']==1 or $_SESSION['$no']==2 or $_SESSION['$no']==3)
       {
        echo' <form  method="POST" action="p2.php">
          <h1 align="center">FIRST CUSTOMER DETAILS</h1>
    <h4 style=color:white >Traveller Details</h4>
    <div>
    <label for="fname">First name:</label>
    <input type="text"id="fname"name="fname">
    <br><br>
    <label for="lname">Last name:</label>
    <input type="text"id="lname"name="lname">
    <br>
    <p>Gender:</p>
    <label for="male">MALE</label>
    <input type="radio"id="male"name="gender"value="MALE">
    <br><br>
    <label for="female">FEMALE</label>
    <input type="radio"id="female"name="gender"value="FEMALE">
    <br><br>
    <label for="contact">Contact No:</label>
    <input type="number"id="contact"name="cont" min="1000000000" max="9999999999">
    <br><br>
    <label for="email">Email Id:</label>
    <input type="text"id="email"name="email">


    <br><br>
  </div><input type="submit" name="submit" value="next">';
       }
       ?>
       



  </div>
  </form>
  </body>
  </html>
