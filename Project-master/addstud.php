<?php
include('database.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$usn = $_POST['usn'];

$firstname = stripcslashes($firstname);
$lastname = stripcslashes($lastname);
$mobile = stripcslashes($mobile);
$email = stripcslashes($email);
$usn = stripslashes($usn);

$firstname = mysqli_real_escape_string($con, $firstname);
$lastname = mysqli_real_escape_string($con, $lastname);
$mobile = mysqli_real_escape_string($con, $mobile);
$email = mysqli_real_escape_string($con, $email);
$usn = mysqli_real_escape_string($con , $usn);

$sql = "insert into addstudents values('$firstname' , '$lastname' , '$email' , '$mobile' , '$usn' )";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Student added sucessfully');window.location.href='i.php';</script>";
} else {
    echo "<script>alert('Student was not added !');window.location.href='i.php';</script>";
}
?>