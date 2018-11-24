<?php
include "database.php";

/*$connectDb = mysqli_select_db($conn,'mowing');*/

/*include "joint_table.php";*/

  if (isset($_POST['success'])) {
  $worker_id = $_POST['worker_id'];
  $booking_id = $_POST['booking_id'];

  $tioi = "UPDATE booking SET worker_id='$worker_id' WHERE booking_id='$booking_id'";

  // $a = mysqli_query($conn, $tioi);
  if(mysqli_query($conn, $tioi)){
    echo'<script language="javascript">';
      echo'alert ("Assign to mower");';
      echo 'window.location.href = "assign.php?username=$username"';
      echo'</script>';
  } else{
    echo'<script language="javascript">';
      echo'alert ("Not Assign");';
      echo 'window.location.href = "service_landscape_update.php"';
      echo'</script>';
  } 
  // mysqli_close($conn);
}


?>