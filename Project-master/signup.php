<html lang = "en">  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">         
      <title>Registration Form </title>  
   <style>  
 .note  
{  
    text-align: center;  
    height: 80px;  
    color: #fff;  
    font-weight: bold;  
    line-height: 80px;
}  
body {  
  margin: 0;  
  position:relative;
  top:20%;
  font-family: 'Lato', sans-serif;  
  font-size: 12px;  
  line-height: 1.8em;  
  text-transform: none;  
  letter-spacing: .075em;  
  font-weight: bold;  
  font-style: normal;  
  text-decoration: none;  
  color: #e7bd74;  
  display: block;  
  background:linear-gradient(rgba(255,255,255,0.3), rgba(255,255,255,0.3)),  url('images/login.jpg');
  background-position : center;
            background-repeat : no-repeat;
            background-attachment : fixed;
            background-size: cover;
            width : 100%;
            height:100%;
}  
.title {  
  margin-top: 2rem;  
  margin-bottom: 1rem;  
}  
.form-content  
{  
    padding: 5%;  
    border: 1px solid #ced4da;  
    margin-bottom: 2%;  
}  
.form-control {  
    border-radius: 1.5rem;  
}  
.btnSubmit  
{  
    border: none;  
    border-radius: 1.5rem;  
    padding: 1%;  
    width: 20%;  
    cursor: pointer;  
    background: #0062cc;  
    color: #fff;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 1rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
 text-transform: uppercase;  
padding-top: 20px;  
}  
a {  
  text-decoration: none;  
}  
a:hover {  
  text-decoration: none;
}  
.textbox input {
            padding: 10px;
            outline: none;
            border-color: black;
            font-size: 20px;
            color: #4B3869;
            background-color: #FCFFA6;
        }
        .navlinks {
        position: relative;
        top: -20%;
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

   <?php if(isset($_POST['form'])): ?>
    <div style="text-align : center;">
      <h2>Thank you.</h2>
      <p>You have registerd as <?php echo $_POST['username']?> with Email <?php echo $_POST['email'] ;?></p>
      <p> go  <a href="login.php" > BACK </a> to the form </p>
    </div>
    <?php else : ?>
    <form action="register.php" method="post">
    <h1 style="color: white; font-size:2rem;">BANGALORE ACADEMY OF TECHNICAL EDUCATION</h1>
        <div class="container register-form">
            <div class="form">
                <div class="form-content">
                <div class="note"><h1 style="position: relative;font-size:1.3rem; color:black;">SignUp</h1></div>
                    <div class="row">  
                        <div class="col-md-6">  
                          <div class="textbox">
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="Your USN *" value="" name="username" required />  
                            </div></div> 
                            <div class="textbox"> 
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="10 digit Mobile Number *" value="" name="mobile" required />  
                            </div>  
                        </div>   </div>           
                        <div class="col-md-6">  
                        <div class="textbox">
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="Your Password *" name="password" value="" required />  
                            </div> </div>
                            <div class="textbox"> 
                            <div class="form-group">  
                                <input type="text" class="form-control" placeholder="Confirm Password *" name="confirmpassword" value="" required />  
                            </div>  </div>
                        </div>  
                    </div>
    <div class="row align-items-center mt-4">
            <div class="col">  
              <input style="background-color : #FCFFA6; " type="text" class="form-control" placeholder=" Enter Email Address*" name="email">  
            </div>  
            <input type="hidden" name="form" value='1'>
            <input type="submit" class="btnSubmit" />  
            </div> 
    </div> 
        </div> 
      </form> 
        <?php endif ?>
</body>  
</html>  


