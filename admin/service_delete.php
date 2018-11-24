<?php
			include 'database.php';
			include 'session.php';
			include ("connectdb.php");
			
			$query = "DELETE FROM service WHERE serviceid = '$_REQUEST[serviceid]'";
			
			$run_query=mysqli_query($connection,$query);
			
			if(!empty($run_query))
			{ ?>
		
			<script>
			alert('Delete Successfull');
			window.location.href = "service_profile.php";
			</script>
			
			<?php
			
			} else {
				
			?>
				
			<script>
			alert('Delete Unsuccesfull');
			window.location.href = "service_profile.php";
			</script>
			<?php
			}
		
?>
