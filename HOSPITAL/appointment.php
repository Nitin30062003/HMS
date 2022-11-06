<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$doctor=$_POST['doctor'];
$speciality=$_POST['speciality'];
$slot=$_POST['slot'];



$sql="insert into appointment_data values('$name','$email','$phone','$date','$gender','$doctor','$speciality','$slot')";

if(mysqli_query($con,$sql))
{
    echo "<script>alert('Your appointment is Successful')</script>";
    echo "Go back to <a href='main.html'>Home</a> Page";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/appointment.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    

</head>
<body>
<script>
      function showCustomer(str) {
        var xhttp;    
        if (str == "") {
          document.getElementById("doctor").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("doctor").innerHTML = this.responseText;
          }
        };
        xhttp.open("POST", "get_doctor.php?q="+str, true);
        xhttp.send();
      }
</script>

    
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <h1 class="navbar-brand" style="padding-left:2%;">HMS | Appointment</h1>
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
            <a class="nav-link active" aria-current="page" href="main.html">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appointment.php">Book an Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">Appointment History</a>
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


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</script>
      <?php
      $phone=$_SESSION['phone'];
      ?>


    <form action="#" method="POST" class="w3-container" style="padding-left:5%; margin-left:15%; margin-right:28%; margin-top:1%; margin-bottom:1%;">
      <br> <br><br><label for="name">Name :</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required><br><br>
        <label for="email">Email id :</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email-Id" required><br><br>

        <label for="phone">Mobile No :</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone ?>" readonly required><br><br>

        <label for="date">Appointment Date :</label>
        <input id="date" name="date" type="date"><br><br>
        
        <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min',today);
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 2).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('max',today);
</script>
    
        
        <p>Gender :</p><input type="radio" name="gender" id="gender" value="male">
        <label for="gender" style="padding-left:2px;">male</label>
        
        <input type="radio" name="gender"  id="gender" value="female">
        <label for="gender" style="padding-left:2px;">female</label><br><br>
        
        
        <label for="speciality">Select speciality :</label>
        <select name="speciality" id="speciality" onchange="showCustomer(this.value);" required>
            <option value="">Select speciality</option>
            <?php
            $sql2=mysqli_query($con,"select * from speciality_data");
            while($row=mysqli_fetch_array($sql2))
            {
            ?>
           <option value="<?php echo htmlentities($row['speciality']); ?>"><?php echo htmlentities($row['speciality']); ?></option>
           <?php
           } ?>
        </select><br><br>

        <label for="doctor">Select a doctor :</label>
        <select name="doctor" id="doctor" required>
        <option value="">Select Doctor</option>
        </select><br><br>
        
        <label for="slot">Select a slot :</label>
        <select name="slot" id="slot" required>
            <option value="">Select a slot</option>
            <option value="12:00 - 12:20">12:00 - 12:20</option>
            <option value="12:20 - 12:40">12:20 - 12:40</option>
            <option value="12:40 - 13:00">12:40 - 13:00</option>
            <option value="13:00 - 13:20">13:00 - 13:20</option>
            <option value="13:20 - 13:40">13:20 - 13:40</option>
            <option value="13:40 - 14:00">13:40 - 14:00</option>
        </select><br><br>
        <input type="submit" name='submit' value="Submit"><br><br>
        
        
                
    </form>
    



</body>
</html>