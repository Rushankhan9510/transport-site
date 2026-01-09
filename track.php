<!DOCTYPE html>
<html>
<head>
<title>Track Shipment</title>
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
.box{
  width:360px;
  background:rgba(255,255,255,0.08);
  padding:30px;
  border-radius:18px;
  text-align:center;
}
input{
  width:100%;
  padding:12px;
  border-radius:25px;
  border:none;
  outline:none;
  margin-top:15px;
}
button{
  width:100%;
  padding:12px;
  border-radius:25px;
  border:none;
  background:#22c55e;
  margin-top:15px;
  font-weight:bold;
  cursor:pointer;
}
</style>
</head>

<body>
<div class="box">
  <h2>Track Your Shipment</h2>
  <form method="POST" action="track_result.php">
    <input type="text" name="tracking_id" placeholder="Enter Tracking ID" required>
    <button>Track Now</button>
  </form>
</div>
</body>
</html>
