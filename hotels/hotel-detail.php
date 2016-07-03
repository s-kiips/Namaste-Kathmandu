<?php
include_once 'admin/dbconfig.php';

?>
<!DOCTYPE html>
<!-- saved from url=(0027)http://localhost/wordpress/ -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">

<?php include('include/header.php'); ?>	
    
    <div id="content" class="cf site-content">

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">

		
						
				
<article id="post-111" class="post-111 page type-page status-publish hentry">
	<header class="entry-header">
			</header><!-- .entry-header -->
			<h2>Hotel Detail Information</h2>
	<div class="entry-content">
		<table>
		<?php
		if($_GET['id'])
		{
			$sql_query="SELECT * FROM hotels WHERE hotel_id=".$_GET['id'];
			$result_set=mysql_query($sql_query);
			$i = 1;
			while($row=mysql_fetch_row($result_set))
			{
				echo "<tr>
						<td>Hotel Name</td>
						<td>".$row[1]."</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>".$row[2]."</td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td>".$row[3]."</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>".$row[4]."</td>
					</tr>
					<tr>
						<td colspan='2'><iframe src=".$row[5]." width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></td>
					</tr>
					
				";		
			} 
		}
		?>
		</table>
</div><!-- .entry-content -->

</article><!-- #post-## -->

			
			
		
		</main><!-- #main -->
	</div><!-- #primary -->


	</div><!-- #content -->
    
	<?php include('include/footer.php') ?>
</div><!-- #page -->

