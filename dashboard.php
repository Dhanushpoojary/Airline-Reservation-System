<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <h3><b style=color:white>Hey, <?php echo $_SESSION['username']; ?>!</b></h3>
        <h3><b style=color:white>You are registered successfully.</b></h3>
        
        <p><br><br><a href="logout.php">Logout </a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<p1><font size="5"><a href="fromto.html"><b style=color:yellow>Book Now.</b></font></a></p1></p>

    </div>
</body>
</html>