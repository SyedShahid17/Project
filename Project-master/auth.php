<?php
include('database.php');
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from register where password='$password' and userID='$username'";

$result = mysqli_query($con , $sql);
$row = mysqli_fetch_array($result , MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1){
    echo "<script>alert('You are now logged in as `${username}` !')</script>";
}else{
    echo "<script>window.location.href='login.php';alert('Invalid LoginId and Password');</script>";
}
// header('Location: home.html');

?>