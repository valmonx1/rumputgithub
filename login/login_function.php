 <?php  
 require 'database.php';
 session_start(); 
$hostname='localhost';
$username='root';
$password=''; 

 try  
 {  
      $connect = new PDO("mysql:host=$hostname; dbname=xyzrumput", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:../cust_profile/index.php");  
                }  
                else  
                {  
                     /*$message = '<label>Wrong Data</label>'; */ 
                     echo '<script language =  "javascript">';
					echo 'alert ("Wrong password or username");';
					echo 'window.location.href = "login.php"';
					echo '</script>';
                }  
           } 




           if (empty($_POST["username"]) || empty($_POST["password"])) {
           		{  
                $message = '<label>All fields are required</label>';  
           		}
           } else {
           	$query = "SELECT * FROM staff WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:testingStaff.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }
           }
             
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }
  
 ?>