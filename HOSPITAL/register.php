<?php
include('config.php');
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$cpassword=$_POST['cpassword'];
if($password===$cpassword)
{

$sql = "insert into login_data values('$name','$age','$gender','$phone','$email','$password','$address')";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('Your are Successfully Registered.')</script>";
    
}
}
else
  echo "<script>alert('Password doesnot match')</script>";
mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/register.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    

    
</head>
<body>
   
    <!--<nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">HMS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="register.php">Register</a>
                    
                        </div>
                    </div>
                    </div>
                </nav>-->

                <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <h1 class="navbar-brand" style="padding-left:2%;">HMS | Registration</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">HMS</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                
                
                      <hr class="dropdown-divider">
                    </li>
                    
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
     <!--<h3 class="header" style="padding-left:30%;padding-top:2%;">HMS | Registration</h3>-->
    <form action="#" method="post" class="w3-container w3-card-4 w3-light-grey" style="padding-left:3%; margin-left:23%; margin-right:23%; margin-top:5%; margin-bottom:1%;">
    
        <div>
            <br>
            <label for="name" class="form-label">Name:</label><br>
            <input type="text" name="name" size="50" id="name" placeholder="Enter your name" required><br><br>
        </div>
        
        <div>
            <label for="age">Age:</label><br>
            <input type="text" name="age" id="age" size="50" placeholder="Enter your age" required><br><br>
        </div>


        <label for="gender">Gender :</label><br>
        <input type="radio" name="gender" id="gender" value="male">
        <label for="gender">male &nbsp&nbsp</label>
        <input type="radio" name="gender" id="gender" value="female">
        <label for="gender">female</label><br><br>


        <label for="phone">Mobile no:</label><br>
        <input type="text" name="phone" id="phone" size="50" placeholder="Enter your mobile no" required> <br><br>


        <label for="email">Email-id :</label><br>
        <input type="email" name="email" id="email" size="50" placeholder="Enter your Email-id" required> <br><br>


        <label for="password">password:</label><br>
        <input type="password" name="password" id="password" size="50" placeholder="Enter new password" required><br><br>

        <label for="cpassword">Confirm password:</label><br>
        <input type="password" name="cpassword" id="cpassword" size="50" placeholder="Confirm password" required><br><br>

        <label for="address">Address :</label><br>
        <textarea name="address" id="address" placeholder="Enter your Address" style="width:400px;height: 70px;" required></textarea><br><br>


        <input type="submit" name="submit" value="Register"> <p>Already have an account? &nbsp<a  href='login.php'>Login</a></p>
       
        
    </form>
        
    
   
</body>
</html>