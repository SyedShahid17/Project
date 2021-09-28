<!DOCTYPE HTML>
<html>
<head>
<script src="https://smtpjs.com/v3/smtp.js"></script> 
<style>
    body {  
        font-family: 'Lato', sans-serif;  
        font-size: 12px;   
        background:linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)),  url('images/login.jpg');
        background-position : center;
        background-repeat : no-repeat;
        background-attachment : fixed;
        background-size: cover;
        height:100%;
    }  
    .form{
        position : relative;
        left : 40%;
        margin-top : 150px;
    }
    input{
        border:1px solid olive;
        border-radius:5px;
    }
    h1{
        color:darkgreen;
        font-size:22px;
    }
    .navlinks {
        position: relative;
        left : 20%;
        /*z-index: 100;
        display: flex;
        justify-content: flex-end; */
        }

    .navlist {
        margin-right: 1px;
        margin-top: 50px;
        }

    .navlist ul {
        display: flex;
        list-style-type: none;
        }

    .navlist ul li {
        padding-left: 50px;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 15px;
        font-weight: bold;
        }

    .navlist ul li:hover {
        cursor: pointer;
        color: greenyellow;
        }

    .navlist ul li a {
        text-decoration: none;
        color:black;
        }
        .btnsubmit  
        {  
            border: none;  
            border-radius: 1.5rem;  
            padding: 1%;  
            width: 20%;  
            cursor: pointer;  
            background: #0062cc;  
            color: #fff;  
            position : relative;
            left : 40%;
        }

</style>
</head>
<body>
<div class="navlinks">
  <div class="navlist" >
      <ul>
          <li><a href="./home.html">Home</a></li>
          <li class="active"><a href="./about.html">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="./department.html">Departments</a></li>
          <li><a href="./circular.html">Circulars</a></li>
          <li><a href="./stdcorner.html">Student corner</a></li>
          <li><a href="./projects.html">Projects</a></li>
          <li><a href="./login.php">Login</a></li>
      </ul>
  </div>
</div>

<div class="form">
    <h1 style="color:white; margin-left: 90px;">Forgot Password<h1>
    <form action='#' method='post'>
        <table cellspacing='5'>
            <tr><td>user id:</td><td><input type='text' placeholder="Enter userID* ..." name='user_id' style="width: 250px; padding: 10px; border-radius: 10px; outline: none; border-color: black; font-size: 20px; color: #4B3869; background-color: #FCFFA6;" /></td></tr>
            <tr><td></td><td><input class="btnsubmit" type='submit' name='submit' value='Submit' /></td></tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
    if(!empty($_POST['user_id']))
    {$user_id = $_POST['user_id'];
    $result = mysqli_query($con,"SELECT * FROM Admin where userID='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['userID'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				echo "<div align='center'>
                <h1 style='color:white;'>Your password is $password . </h1>
                <h2>Please wait <span id='countdown' class='text-primary'>5</span> seconds to redirect you to LOGIN page</h2>
                <script>
                var seconds = document.getElementById('countdown').textContent;
                var countdown = setInterval(function() {
                    seconds--;
                    document.getElementById('countdown').textContent = seconds;
                    if (seconds <= 0) window.location.href='login.php';
                }, 1000);
                </script>
                </div> ";
			}
				else{
					echo 'invalid userid';
				}}
}
?>