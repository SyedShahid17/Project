<?php
include('database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$mob = $_POST['mobile'];

$name = stripcslashes($name);
$email = stripcslashes($email);
$mob = stripslashes($mob);

$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);
$mob = mysqli_real_escape_string($con , $mob);

$sql = "insert into contactus values( '$name','$email','$mob')";

if (mysqli_query($con , $sql)){
    echo "<script>alert('Contacted Suceessfully !');window.location.href='home.html';</script>";
}else{
    echo "<script>window.location.href='home.html';alert('error occured while contacting !');</script>";
}
// header('Location: home.html');

?>