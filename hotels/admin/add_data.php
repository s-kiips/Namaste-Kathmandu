<?php
include_once 'dbconfig.php';

session_start();
if(!isset($_SESSION['username']))
{
	echo ('<script type="text/javascript">
			alert("You are not authorized user");</script>');
	exit;
}

if(isset($_POST['btn-save']))
{
 // variables for input data
 $hotel_name = $_POST['hotel_name'];
 $address = $_POST['address'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $url = $_POST['url'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO hotels(hotel_name,address,contact,email,location_url) VALUES('$hotel_name','$address','$contact','$email','$url')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='hotels.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel - Admin</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div>
	Welcome, <?php echo @$_SESSION['username']."!"; ?>
	<a href="logout.php">Logout</a>
</div>
<div id="header">
 <div id="content">
    <label>Hotel Information</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="hotel_name" placeholder="Hotel Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="Address" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="contact" placeholder="Contact" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="url" placeholder="Map URL" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>