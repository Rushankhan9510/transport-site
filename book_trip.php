<?php
include("config/db.php");

$name    = $_POST['name'];
$phone   = $_POST['phone'];
$pickup  = $_POST['pickup'];
$drop    = $_POST['drop'];
$vehicle = $_POST['vehicle'];

$sql = "INSERT INTO bookings (name, phone, pickup, drop_location, vehicle)
        VALUES ('$name','$phone','$pickup','$drop','$vehicle')";

if(mysqli_query($conn, $sql)){

  $tracking_id = "TRK".rand(10000,99999);

$sql = "INSERT INTO bookings 
(name, phone, pickup, drop_location, vehicle, tracking_id)
VALUES 
('$name','$phone','$pickup','$drop','$vehicle','$tracking_id')";

?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Successful</title>
<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
  font-family:Segoe UI, sans-serif;
  color:#fff;
}
.success-box{
  width:380px;
  background:rgba(255,255,255,0.08);
  padding:35px;
  border-radius:18px;
  text-align:center;
  box-shadow:0 20px 45px rgba(0,0,0,.6);
}
.success-icon{
  font-size:60px;
  color:#22c55e;
}
.track-id{
  margin:15px 0;
  padding:12px;
  background:#22c55e;
  color:#000;
  font-weight:bold;
  border-radius:10px;
}
.btns{
  margin-top:20px;
  display:flex;
  gap:10px;
}
.btn{
  flex:1;
  padding:12px;
  text-decoration:none;
  border-radius:25px;
  font-weight:600;
}
.home{
  background:#fff;
  color:#000;
}
.admin{
  background:#0ea5e9;
  color:#fff;
}
</style>
</head>

<body>

<div class="success-box">
  <div class="success-icon">✔</div>
  <h2>Booking Confirmed</h2>
  <p>Your transport request has been successfully placed.</p>

  <div class="track-id">
    Tracking ID: <?= $tracking_id ?>
  </div>

  <p>Vehicle: <b><?= $vehicle ?></b></p>

  <div class="btns">
    <a href="index.php" class="btn home">Home</a>
    <a href="admin/bookings.php" class="btn admin">Admin Panel</a>
  </div>
</div>

</body>
</html>

<?php
} else {
  echo "INSERT ERROR: ".mysqli_error($conn);
}
?>
