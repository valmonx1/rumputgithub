<?php
include "database.php";

$connectDb = mysqli_select_db($conn,'xyzrumput');

/*include "joint_table.php";*/

  if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $user_name = $_POST['user_name'];
  $user_tel = $_POST['user_tel'];
  $user_email = $_POST['user_email']; 
  $user_id = $_POST['user_id'];


  $sql = mysqli_query($conn,"UPDATE user SET username = '$username', user_name = '$user_name', user_tel = '$user_tel', user_email = '$user_email' WHERE user_id = '$user_id'");
  /*$sqlupdate = ;*/

  if ($sql) {
    echo'<script language="javascript">';
      header("Location:index.php?username=$username");
      echo'</script>';
  } else{
    echo "Data not Updated";
  }
  mysqli_close($conn);
}

?>



