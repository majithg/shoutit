<?php
//Connect to MySQL
$con = mysqli_connect("localhost","root","Password","shoutit");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>
