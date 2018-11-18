<?php
	require 'database.php';

if(isset($_POST["register"])){
$hostname='localhost';
$username='root';
$password='';



try {
$handler = new PDO("mysql:host=$hostname;dbname=mowing",$username,$password);

$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

/*$sql = "INSERT INTO user (user_name, username, user_email, user_tel, password)
VALUES ('".$_POST["user_name"]."','".$_POST["username"]."','".$_POST["user_email"]."','".$_POST["user_tel"]."','".$_POST["password"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;*/
}
catch(PDOException $e)
{
exit($e->getMessage());
}

$cust_name = $_POST['cust_name']; 
$username = $_POST['username']; 
$cust_email  = $_POST['cust_email'];   
$cust_tel  = $_POST['cust_tel']; 
$password = $_POST['password'];

if (empty($cust_name) || empty($username) || empty($cust_email) || empty($cust_tel ) || empty($password)){
    $error = "Complete all fields";
}

// Email validation

if (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)){
    $error = "Enter a  valid email";
}

// Password length
if (strlen($password) <= 6){
    $error = "Choose a password longer then 6 character";
}

if(!isset($error)){
//no error
$sthandler = $handler->prepare("SELECT username FROM customer WHERE username = :username");
$sthandler = $handler->prepare("SELECT username FROM worker WHERE username = :username");
$sthandler->bindParam(':username',$username);	
$sthandler->execute();

if($sthandler->rowCount() > 0){
    echo "<script type= 'text/javascript'>alert('Username already exists. Kindly please use another username');</script>";
}else {
    //Securly insert into database
    $sql = 'INSERT INTO customer (cust_name, username, cust_email, cust_tel, password) VALUES (:cust_name,:username,:cust_email,:cust_tel,:password)';    
    $query = $handler->prepare($sql);

    $query->execute(array(

    ':cust_name' => $cust_name,
    ':username' => $username,
    ':cust_email' => $cust_email,
    ':cust_tel' => $cust_tel,
    ':password' => $password
    ));
    }
}else{
    echo "error occured: ".$error;
    exit();
}

}
?>
