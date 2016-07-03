<?php
include_once 'dbconfig.php';

	if(isset($_POST['btn-save']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username=="test" && $password=="admin123")
		{
			session_start();
			$_SESSION['username'] = $username;
		}
		else
		{
			echo ('<script type="text/javascript">
					alert("You are not authorized user");</script>');
			exit;
		}
	}
	else 
	{
		session_start();
		if(!isset($_SESSION['username']))
		{
			echo ('<script type="text/javascript">
					alert("You are not authorized user");</script>');
			exit;
		}
	}
	

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM hotels WHERE hotel_id=".$_GET['delete_id'];
 mysql_query($sql_query);
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel Information</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='hotels.php?delete_id='+id;
 }
}
</script>
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
 <p>
	<a href="add_data.php"><button>Add Hotel</button></a>
    </p>
    <table align="center">
    <tr>
    <th>Hotel Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Email</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM hotels";
 $result_set=mysql_query($sql_query);
//  var_dump($result_set);exit;
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="./images/edit_btn.jpg" align="EDIT" class="edit_btn"/></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="./images/delete_btn.jpg" align="DELETE" class="delete_btn"/></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>