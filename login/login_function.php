<?php

  if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];

    if ($username!='' && $password!='') {
      include 'database.php';
      $query=("SELECT * FROM user WHERE username='$username' and password='$password'");
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_row($result);

      if ($row) {
        session_start();
        $_SESSION['user_id']=true;
        $_SESSION['user']="user";
        $_SESSION['username']=$username;

        mysqli_close($conn);

        echo '<script language = "javascript">';
            echo 'alert ("Successful Login To Customer");';
            echo 'window.location.href = "../cust_profile/index.php?username=$username"';
            echo '</script>';
      }
    } else {
      echo '<script language =  "javascript">';
          echo 'alert ("Wrong input");';
          echo 'window.location.href = "login.php"';
          echo '</script>';
    }
    
  }
