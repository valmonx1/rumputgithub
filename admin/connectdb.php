<?php
//session_start();

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'mowing');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($select_db));
}

?>