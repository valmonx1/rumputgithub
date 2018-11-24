<?php
			include 'database.php';
			include 'session.php';
			include ("connectdb.php");
			
			$query = "INSERT INTO worker (workerid, firstname, lastname, address, telno, email, category, username, password) VALUES ('".$_POST['workerid']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['address']."','".$_POST['telno']."','".$_POST['email']."','Mower', '".$_POST['username']."', '".$_POST['password']."')";
			
			$run_query=mysqli_query($connection,$query);
			
			if(!empty($run_query))
			{ ?>
		
			<script>
			alert('Registration Successfull');
			window.location.href = "worker_profile.php";
			</script>
			
			<?php
			
			} else {
				
			?>
				
			<script>
			alert('Registration Unsuccesful');
			window.location.href = "worker_form.php";
			</script>
			<?php
			}
		
?>
