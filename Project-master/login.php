
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background:linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)), url('images/login.jpg');
            background-position : center;
            background-repeat : no-repeat;
            background-attachment : fixed;
            background-size: cover;
            width : 100%;
            height:100%;
        }
        .f{
            position: relative;
            width : 40%;
            float : left ;
            margin-left: 5%;
        }
        .f1{
            position : relative ;
            width : 40%;
            float : right ;
            margin-right: 5%;
        }

        .login-box{
            border: 1px solid white;
            padding: 40px;
            margin-top: 20%;
            border-radius: 10px; 
            /* position:relative;
            left : -90%; */

            
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 5%;
            font-family: segoe ui;
            color: white;
            text-transform: uppercase;
        }

        .textbox {
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        .textbox i {
            margin-right: 10px;
            font-size: 20px;
            margin-top: 9px;
            color: blue;
        }

        .textbox input {
            width: 250px; padding: 10px; border-radius: 10px; outline: none; border-color: black; font-size: 20px; color: #4B3869; background-color: #FCFFA6;
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

        .button-class {
            display: flex;
            justify-content: center;
            margin: 15px;

        }

        .button-class .button {
            padding: 10px 50px;
            background-color: #CAB8FF;
            border: none;
            border-radius: 50px;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .login-box p{
            padding: 10px;
            font-family: segoe ui;
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
    </style>
  
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
<div class="f">
    <form action="auth.php" method="post">
            <div class="login-box">
                <h1>Student Login</h1>
    
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Enter your USN"
                            name="username" value="" required>
                </div>
    
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password"
                            name="password" value="" required>
                </div>
                <input type="hidden" name="form" value='1'>
    
                <input class="btnsubmit" type="submit"
                        name="login" value="LOG IN" >
                <p style="color:white;">Not registered? <a href="signup.php" style="text-decoration : none;color:black;">Sign up</a> here.</p>
                <p style="color:white;">Forgot Password? <a href="forgot.php" style="text-decoration : none;color:black;">Click here</a> to recover password.</p>
            </div>
        </form>
    </div>
    <div class="f1">
        <form action="auth1.php" method="post">
            <div class="login-box">
                <h1>Admin Login</h1>
    
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Enter your UserId"
                            name="username" value="" required>
                </div>
    
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password"
                            name="password" value="" required>
                </div>
                <input type="hidden" name="form" value='1'>
    
                <input class="btnsubmit" type="submit"
                        name="login" value="LOG IN" >
                <!-- <p style="color:white;">Not registered? <a href="signup.php" style="text-decoration : none;color:black;">Sign up</a> here.</p> -->
                <p style="color:white;">Forgot Password? <a href="forgot1.php" style="text-decoration : none;color:black;">Click here</a> to recover password.</p>
            </div>
        </form>
    </div>
    </body>
</html>
<?php 
    if(isset($_POST['login'])){
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
            header('Location: home.html');
        }else{
            echo "<script>alert('Invalid LoginId and Password')</script>";
            
        }
    } ?>