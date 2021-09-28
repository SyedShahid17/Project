<?php
$con = mysqli_connect("localhost:3306", "root", "@Syedshahid12345", "php");

$prvalid = 300; // Password reset is valid for 300 seconds
if(mysqli_connect_errno()){
    die("Failed to connect ". mysqli_connect_errno());
}


// echo $_SERVER['PHP_SELF'].'<br>';
// echo $_SERVER['GATEWAY_INTERFACE'].'<br>';
// echo $_SERVER['SERVER_ADDR'].'<br>';
// echo $_SERVER['SERVER_NAME'].'<br>';
// echo $_SERVER['SERVER_SOFTWARE'].'<br>';
// echo $_SERVER['SERVER_PROTOCOL'].'<br>';
// echo $_SERVER['REQUEST_METHOD'].'<br>';
// echo $_SERVER['REQUEST_TIME'].'<br>';
// echo $_SERVER['QUERY_STRING'].'<br>';
// echo $_SERVER['HTTP_ACCEPT'].'<br>';
// echo $_SERVER['HTTP_ACCEPT_CHARSET'].'<br>';
// echo $_SERVER['HTTP_HOST'].'<br>'; 
?>