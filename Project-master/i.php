<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="home.css" type="text/css">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style type="text/css">
        .bs-example{
        margin: 20px;
        }
        </style>

        <script type="text/javascript">
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
</head>

<<script>
    $(document).ready(function(){
        $("#add").hide();
        $("#addstud").click(function(){
            $("#add").slideToggle("slow");
        });
    });
</script> 


<style>
    .bt {
        position: relative;
        left : 30%;
        margin-top: 150px;
    }
    .bt h2{
        font-family: Arial, Helvetica, sans-serif;
        color: chocolate;
    }
    .bt a{
        font-size: x-large;
        margin : 30px;
    }
</style>
<body>
    <div class="container1">
        <div class="nav">
            <img src="./clg.jpg" alt="" style="height: 25%; filter: brightness(50%);">
        </div>
        <div class="navlinks">
            <div class="navlist">
                <ul>
                    <li><a href="./home.html">Home</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="./department.html">Departments</a></li>
                    <li><a href="./circular.html">Circulars</a></li>
                    <li><a href="./stdcorner.html">Student corner</a></li>
                    <li><a href="./projects.html">Projects</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bt">
        <h2> ADMIN PAGE </h2>

        <a class="waves-effect waves-light btn" id="addstud">Add Students ?</a>
    </div>

    <div id="add">
        <div class="row">
            <form class="col s12" action="addstud.php" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate" name="firstname" required>
                  <label for="icon_prefix">First Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="lastname" required>
                    <label for="icon_prefix">Last Name</label>
                  </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="email" class="validate" name="email" required>
                    <label for="icon_email">Email - Address</label>
                  </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" type="tel" class="validate" name="mobile" required>
                  <label for="icon_telephone">10 digit Mobile Number</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">enhanced_encryption</i>
                    <input id="icon_enhanced_encryption" type="text" class="validate" name="usn" required>
                    <label for="icon_enhanced_encryption">USN*</label>
                </div>
                <div class="input-field col s6">
                    <input class="btn waves-effect waves-light" type="submit"  value="Add" >
                </div>
              </div>
            </form>
          </div>
        
    </div>
    <div id="show">
        <div class="bs-example">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Students List</h2>
                        </div>
                        <?php
                            include('database.php');
                            $result = mysqli_query($con,"SELECT * FROM addstudents");
                        ?>
                        <?php
                            if (mysqli_num_rows($result) > 0) {
                        ?>
                        <table class='table table-bordered table-striped'>
                            <tr>
                                <td>Name</td>
                                <td>usn</td>
                                <td>Email id</td>
                                <td>Mobile</td>        
                            </tr>
                            <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                                <td><?php echo $row["usn"];?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["mobile"]; ?></td>
                                <td><a class="waves-effect waves-light btn-small" href="delete.php?id=<?php echo $row['usn']; ?>" ><i class="material-icons left">delete</i>Delete</a></td>  
                            </tr> 
                            <?php
                                $i++;
                                }
                            ?>
                        </table>
                        <?php
                            }
                            else{
                                echo "No result found";
                            }
                        ?>
                    </div>
                </div>        
            </div>
        </div>
    </div>

</body>
</html>