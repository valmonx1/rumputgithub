<?php

	$conn = new mysqli('localhost', 'root', '', 'xyzrumput');
	if ($conn -> connect_error){
		die("Connection failed : " . $connect_error);
	}else{
		/*echo ("connection successfully");
		echo "<br>";
		echo "<br>";*/
	}
?>