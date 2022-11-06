
<?php
include('config.php');

$sql = "SELECT * FROM admin_doctors_data WHERE speciality= ?";

$stmt = $con->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name,$age,$gender,$phone,$email,$speciality,$password,$Joining_date);
$stmt->fetch();

if(!empty($speciality)) 
{
    $stmt->close();

 $sql=mysqli_query($con,"select * from admin_doctors_data where speciality='$speciality'");?>
 <select name="" id="">

     <option selected="selected">Select Doctor </option>
     <?php
 while($row=mysqli_fetch_array($sql))
 {?>
  <option value="<?php echo htmlentities($row['name']); ?>"><?php echo htmlentities($row['name']); ?></option>
  <?php
}?>
</select><?php
}
?>
    