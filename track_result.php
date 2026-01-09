<?php
include("config/db.php");

$tracking_id = $_POST['tracking_id'];

$sql = "SELECT * FROM bookings WHERE tracking_id='$tracking_id'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Tracking Result</title>
<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
  font-family:Segoe UI,sans-serif;
  color:#fff;
}
.card{
  width:380px;
  background:rgba(255,255,255,0.08);
  padding:30px;
  border-radius:18px;
}
p{margin:10px 0;}
</style>
</head>

<body>
<div class="card">
  <h2>Shipment Details</h2>
  <p><b>Name:</b> <?= $row['name'] ?></p>
  <p><b>Phone:</b> <?= $row['phone'] ?></p>
  <p><b>Pickup:</b> <?= $row['pickup'] ?></p>
  <p><b>Drop:</b> <?= $row['drop_location'] ?></p>
  <p><b>Vehicle:</b> <?= $row['vehicle'] ?></p>
  <p><b>Status:</b> 🟢 Booked</p>
</div>
</body>
</html>

<?php
}else{
  echo "<h2 style='color:red;text-align:center;'>Invalid Tracking ID</h2>";
}
?>
