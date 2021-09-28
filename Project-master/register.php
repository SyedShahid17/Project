<?php
include('database.php');
$username = $_POST['username'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$mobile = stripcslashes($mobile);
$email = stripcslashes($email);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
$mobile = mysqli_real_escape_string($con, $mobile);
$email = mysqli_real_escape_string($con, $email);

$sql = "insert into register values('$username' , '$mobile' , '$email' , '$password' )";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('You have been registered sucessfully');window.location.href='login.php';</script>";
}else{
    echo "<script>alert('Error.');window.location.href='signup.php';</script>";
}
?>