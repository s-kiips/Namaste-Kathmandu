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

	<div class="entry-content">
		<div>
			<h2 style="text-align: center;">Hotels List</h2>
			<table>
				<tr><td>S.N.</td><td>Hotel Name</td><td>&nbsp;</td></tr>
				
				<?php
					$sql_query="SELECT hotel_id,hotel_name FROM hotels ORDER BY hotel_name";
					$result_set=mysql_query($sql_query);
					$i = 1;
					while($row=mysql_fetch_row($result_set))
					{
						echo "<tr><td>".$i++."</td><td>".$row[1]."</td><td><a href='hotel-detail.php?id=".$row[0]."'><button>View Details</button></a></td></tr>";
					
					} 
				?>
			</table>
		</div>	
</div><!-- .entry-content -->

</article><!-- #post-## -->

			
			
		
		</main><!-- #main -->
	</div><!-- #primary -->


	</div><!-- #content -->
    
	<?php include('include/footer.php') ?>
</div><!-- #page -->

