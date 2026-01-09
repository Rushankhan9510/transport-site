<?php
include "config/db.php";

$msg = "";
if(isset($_POST['book'])){
    $track = "TRK".rand(10000,99999);

    mysqli_query($conn,"INSERT INTO quick_bookings
    (name,phone,source,destination,material,tracking_id)
    VALUES(
    '{$_POST['name']}',
    '{$_POST['phone']}',
    '{$_POST['source']}',
    '{$_POST['destination']}',
    '{$_POST['material']}',
    '$track'
    )");

    $msg = "✅ Booking Successful! Your Tracking ID: <b>$track</b>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Transport Management System</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI;}
body{
    min-height:100vh;
    background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
    color:#fff;
}
.brand{
    text-align:center;
    padding:25px;
    font-size:22px;
    font-weight:bold;
}
.container{
    max-width:1100px;
    margin:auto;
    padding:40px;
    display:grid;
    grid-template-columns:1.2fr 1fr;
    gap:40px;
}
.hero{
    padding-top:40px;
}
.hero h1{
    font-size:40px;
    margin-bottom:15px;
}
.hero p{
    font-size:16px;
    opacity:0.9;
}
.features{
    margin-top:30px;
}
.features div{
    margin:10px 0;
    background:rgba(255,255,255,0.12);
    padding:12px;
    border-radius:10px;
}
.form-box{
    background:rgba(255,255,255,0.15);
    padding:30px;
    border-radius:20px;
    backdrop-filter:blur(10px);
}
.form-box h2{
    margin-bottom:20px;
}
input{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border-radius:8px;
    border:none;
    outline:none;
}
button{
    width:100%;
    padding:14px;
    background:#fff;
    color:#203a43;
    font-size:16px;
    font-weight:bold;
    border:none;
    border-radius:30px;
    cursor:pointer;
}
button:hover{
    background:#203a43;
    color:#fff;
}
.msg{
    background:rgba(0,255,0,0.2);
    padding:12px;
    border-radius:10px;
    margin-bottom:15px;
}
.links{
    text-align:center;
    margin-top:20px;
}
.links a{
    color:#fff;
    margin:0 10px;
    text-decoration:none;
    font-size:14px;
}
</style>
</head>

<body>

<div class="brand">🚚 Transport Management System</div>

<div class="container">

    <!-- LEFT -->
    <div class="hero">
        <h1>Book Transport Instantly</h1>
        <p>No login required • Fast • Reliable • Secure</p>

        <div class="features">
            <div>🚛 All India Transport</div>
            <div>📦 Household & Commercial Goods</div>
            <div>📍 Live Shipment Tracking</div>
            <div>⚡ Fast Delivery Network</div>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="form-box">
        <h2>Quick Booking</h2>

        <?php if($msg){ ?>
            <div class="msg"><?php echo $msg; ?></div>
        <?php } ?>

        <form action="book_trip.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="pickup" placeholder="Pickup" required>
    <input type="text" name="drop" placeholder="Drop" required>
    <select name="vehicle" required>
        <option value="Truck">Truck</option>
        <option value="Mini Truck">Mini Truck</option>
    </select>
    <button type="submit">Book Now</button>
</form>


        <div class="links">
            <a href="login.php">Login</a> |
            <a href="register.php">Register</a> |
            <a href="track.php">Track Shipment</a>

        </div>
    </div>

</div>

</body>
</html>
