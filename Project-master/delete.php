<?php

include "database.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con, "delete from addstudents where usn = '$id'"); // delete query

if($del)
{
    header("location: i.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>