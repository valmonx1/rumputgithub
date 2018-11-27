<?php
include "database.php";

$connectDb = mysqli_select_db($conn,'mowing');

/*include "joint_table.php";*/

  if (isset($_POST['booking_la'])) {

  $description = $_POST['description'];
  $booking_date = $_POST['booking_date'];
  $booking_time = $_POST['booking_time'];
  $booking_address = $_POST['booking_address']; 
  $quantity = $_POST['quantity']; 
  $cust_id = $_POST['cust_id'];


  $sql = "INSERT INTO booking (booking_date, booking_time, booking_address, cust_id) VALUES ('$booking_date', '$booking_time', '$booking_address', '$cust_id');";

  $sql .= "SELECT LAST_INSERT_ID() INTO @booking;";

  $sql .= "INSERT INTO service (description) VALUES ('$description');";


  $sql .= "INSERT INTO booking_detail (booking_id, service_id, quantity) VALUES (@booking, LAST_INSERT_ID(), '$quantity');";
 echo "description";
  echo $description;

  echo $booking_date;
  echo $booking_time;
  echo $booking_address;
  echo "quantity";
  echo $quantity;
  echo "cust_id";
  echo $cust_id;
  

  if(mysqli_multi_query($conn, $sql))
  {
    echo'<script language="javascript">';
      echo'alert ("Booking success");';
      echo 'window.location.href = "booking.php?username=$username"';
      echo'</script>';
  

} else{
    echo'<script language="javascript">';
      echo'alert ("Booking Fail");';
      echo'</script>';
 }

 mysqli_close($conn);
}
?>
