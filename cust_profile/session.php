<?php
include 'database.php';

session_start();
if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
} else {
	header('Location: logout.php');
}
?>

<?php
include 'database.php';

$sql = "SELECT * FROM user WHERE username = '$username'";
$run = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($run))
{
	$user_id=$row['user_id'];
}
?>
