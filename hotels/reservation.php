<?php
include_once 'admin/dbconfig.php';

if(isset($_POST['btn-save']))
{
	// variables for input data
	$hotel_id = $_POST['hotel_id'];
	$customer_name = $_POST['customer_name'];
	$customer_contact_num = $_POST['customer_contact_num'];
	$customer_email = $_POST['customer_email'];
	$reservation_date =$_POST['reservation_date'];
	$arrival_date =$_POST['arrival_date'];
	$departure_date = $_POST['departure_date'];
	$room_cat = $_POST['room_category'];
	$num_room = $_POST['num_rooms'];
	// variables for input data

	// sql query for inserting data into database
	$sql_query = "INSERT INTO reservation(hotel_id,
	customer_name,
	customer_contact_num,
	customer_email,
	reservation_date,
	arrival_date,
	departure_date,
	room_category,
	num_rooms
	) VALUES($hotel_id,'$customer_name','$customer_contact_num','$customer_email',
	'$reservation_date','$arrival_date','$departure_date','$room_cat',$num_room)";
// 	echo $sql_query;exit;
	// sql query for inserting data into database

	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
  <script type="text/javascript">
  alert('Reservation submitted successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while submitting data');
  </script>
  <?php
 }
 // sql query execution function
}
?>

<!DOCTYPE html>
<!-- saved from url=(0027)http://localhost/wordpress/ -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">

<?php include('include/header.php') ?>
    
    <div id="content" class="cf site-content">

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">

		
						
				
<article id="post-111" class="post-111 page type-page status-publish hentry">
	<header class="entry-header">
			</header><!-- .entry-header -->

	<div class="entry-content">
		<div>
			<form method="post">
    <table align="center">
    <tr>
    <td>Select Hotel</td>
    <td><select name="hotel_id" placeholder="Hotel">
    <option value=""></option>
    	<?php
    	$sql_query="SELECT hotel_id,hotel_name FROM hotels";
		 $result_set=mysql_query($sql_query);
		 while($row=mysql_fetch_row($result_set))
		 {
		 	
		 	echo "<option value='".$row[0]."'>".$row[1]."</option>";
 	} ?>
    </select></td>
    </tr>
    <tr>
    <td>Customer Name</td>
    <td><input type="text" name="customer_name" placeholder="Customer Name"  /></td>
    </tr>
    <tr>
    <td>Customer Contact Number</td>
    <td><input type="text" name="customer_contact_num" placeholder="Customer Contact Number"  /></td>
    </tr>
    <tr>
    <td>Customer Email</td>
    <td><input type="text" name="customer_email" placeholder="Customer Email" /></td>
    </tr>
    <tr>
    <td>Reservation Date</td>
    <td><input type="text" name="reservation_date" placeholder="Reservation Date" class="datepicker" /></td>
    </tr>
    <tr>
    <td>Arrival Date</td>
    <td><input type="text" name="arrival_date" placeholder="Arrival Date" class="datepicker" /></td>
    </tr>
    <tr>
    <td>Departure Date</td>
    <td><input type="text" name="departure_date" placeholder="" class="datepicker" /></td>
    </tr>
    <tr>
    <td>Room Category</td>
    <td>
    	<select name="room_category">
    	<option value="">Select...</option>
    	<option value="0">Single (Rs. 1000)</option>
    	<option value="1">Double (Rs. 2000)</option>
    	</select>
    </td>
    </tr>
    <tr>
    <td>Number of Rooms</td>
    <td><input type="text" name="num_rooms" placeholder="Number of rooms" required /></td>
    </tr>
    </table>
     <button type="submit" name="btn-save"><strong>Submit</strong></button>
    </form>
		</div>	
</div><!-- .entry-content -->

</article><!-- #post-## -->

			
			
		
		</main><!-- #main -->
	</div><!-- #primary -->


	</div><!-- #content -->
    <br><br><br><br>
	<?php include('include/footer.php') ?>
</div><!-- #page -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( ".datepicker" ).datepicker({
    	  dateFormat: "yy-mm-dd"
    });
  });
  </script>

