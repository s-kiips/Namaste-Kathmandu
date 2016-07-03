<?php
include_once 'dbconfig.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Information</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<center>

<div id="header">
 <div id="content">
    <label>Login</label>


</div>
           </div>
    <a href="\hotels\index.php" class="back" >Back</a>
</div>

<div id="body">
 	<div id="content">
 		<form method="post" action="hotels.php">
    <table align="center" style="width:50%;">
    <tr>
    <td>Username</td>
    <td><input type="text" name="username" placeholder="Username" required /></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="password" placeholder="Password" required /></td>
    </tr>
    <td></td><td><button type="submit" name="btn-save"><strong>LOGIN</strong></button>
   
    </tr>
   
    </form>

    </div>



</center>
</body>
</html>