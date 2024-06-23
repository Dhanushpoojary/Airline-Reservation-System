<!DOCTYPE html>
<html>
<head>
<title>payment details</title>
<style>
div{background-color:lightblue;
    border:3px solid black;}
h1{background-color:darkorange;}
</style>
</head>
<body>
  <h1 align="center">PAYMENT OPTIONS</h1>
  <form  method="POST" action="p3.php"> 
  <div>
    <label for="cd"><b><h3>CREDIT/DEBIT CARDS:</h3></b></label><br>
    <label for="cdno">16 DIGIT CREDIT/DEBIT CARD NO:</label>
    <input type="number"id="cdno"name="cdno"maxlength="16"  min="1000000000000000"  max="9999999999999999" required><br><br>
     CVV:<input type="number"name="cvv" min="100"  max="999" required><br><br>
    <label for="mon">EXPIRY MONTH:</label>
    <input type="number"id="mon"name="mon"min="1"max="12" required><br><br>
      <label for="year">EXPIRY YEAR:</label>
      <input type="number"id="year"name="year"min="2023"max="2028" required><br><br>
      <?php 
        include 't.php';
        session_start();
         {  
         if($_SESSION['$from']=='Bangalore' && $_SESSION['$to']=='Mumbai' || $_SESSION['$from']=='Mumbai' && $_SESSION['$to']=='Bangalore' )
         {
           if($_SESSION['$no']==2)
           {
            $_SESSION['value']='10000';
           }
           elseif($_SESSION['$no']==3)
           {
            $_SESSION['value']='15000';
           }
           else
           {
            $_SESSION['value']='5000';
           }

         }
          elseif($_SESSION['$from']=='Mumbai' && $_SESSION['$to']=='Delhi' || $_SESSION['$from']=='Delhi' && $_SESSION['$to']=='Mumbai' )
         {
           if($_SESSION['$no']==2)
           {
            $_SESSION['value']='8000';
           }
           elseif($_SESSION['$no']==3)
           {
            $_SESSION['value']='12000';
           }
           else
           {
           $_SESSION['value']='4000';
           }

         }
          elseif($_SESSION['$from']=='Bangalore' && $_SESSION['$to']=='Delhi' || $_SESSION['$from']=='Delhi' && $_SESSION['$to']=='Bangalore' )
         {
           if($_SESSION['$no']==2)
           {
           $_SESSION['value']='14000';
           }
           elseif($_SESSION['$no']==3)
           {
            $_SESSION['value']='21000';
           }
           else
           {
            $_SESSION['value']='7000';
           }
           }
         }
      ?>
      AMOUNT:<input type="number" name=" " value="<?php echo $_SESSION['value'];?>" disabled>
      
    </div>
    <br><input type="submit" name="submit" value="Proceed to pay">
   
  </form>
</body>
</html>
