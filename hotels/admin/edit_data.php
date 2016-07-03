<?php
include_once 'dbconfig.php';
session_start();
if(!isset($_SESSION['username']))
{
	echo ('<script type="text/javascript">
			alert("You are not authorized user");</script>');
	exit;
}

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM hotels WHERE hotel_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $hotel_name = $_POST['hotel_name'];
 $address = $_POST['address'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $url = $_POST['url'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE hotels SET hotel_name='$hotel_name',address='$address',contact='$contact',email='$email',location_url='$url' WHERE hotel_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='hotels.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: hotels.php");
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
    <td><input type="text" name="hotel_name" placeholder="Hotel Name" value="<?php echo $fetched_row['hotel_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="address" placeholder="Address" value="<?php echo $fetched_row['address']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="contact" placeholder="Contact" value="<?php echo $fetched_row['contact']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="url" placeholder="Map URL" value="<?php echo $fetched_row['location_url']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>