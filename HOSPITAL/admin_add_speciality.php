<?php
include('config.php');

if(isset($_POST['submit']))
{
$speciality = $_POST['speciality'];
$sql="insert into speciality_data values('$speciality')";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('You added a Speciality Successfully.')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speciality</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<style>
         
         * {
              font-family: Arial, Helvetica, sans-serif;
              
          }
  </style>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <h1 class="navbar-brand" style="padding-left:2%;">HMS | Add Speciality</h1>
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
                  <a class="nav-link active" aria-current="page" href="admin_main.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admin_appointment.php">Appointment List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="admin_doctor_list.php">Doctors List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_add_doctor.php">Add Doctor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin_add_speciality.php">Add Speciality</a>
                  </li>
                
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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


    <form action="#" method="post"  class="w3-container w3-card-4 w3-light-grey" style="font:arial;padding-left:3%; margin-left:23%; margin-right:30%; margin-top:15%; margin-bottom:1%;">
        <br><br><label for="speciality" style="padding-left:60px;">New Speciality :</label>
        <input type="text" name="speciality" size="50" placeholder="Enter new Speciality" required><br><br>
        <input type="submit" name="submit" style="width:15%;margin-left:255px;" value="Add"><br><br>
    </form>
</body>
</html>