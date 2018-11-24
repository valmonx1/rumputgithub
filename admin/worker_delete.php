<?php
			include 'database.php';
			include 'session.php';
			include ("connectdb.php");
			
			$query = "DELETE FROM worker WHERE workerid = '$_REQUEST[workerid]'";
			
			$run_query=mysqli_query($connection,$query);
			
			if(!empty($run_query))
			{ ?>
		
			<script>
			alert('Delete Successfull');
			window.location.href = "worker_profile.php";
			</script>
			
			<?php
			
			} else {
				
			?>
				
			<script>
			alert('Delete Unsuccesfull');
			window.location.href = "worker_profile.php";
			</script>
			<?php
			}
		
?>
