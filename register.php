<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register | Transport System</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body{
    height:100vh;
    background: linear-gradient(120deg,#0f2027,#203a43,#2c5364);
    display:flex;
    justify-content:center;
    align-items:center;
}
.register-box{
    background:#fff;
    width:400px;
    padding:40px;
    border-radius:15px;
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
    animation: slide 1s ease;
}
@keyframes slide{
    from{transform:translateY(40px);opacity:0}
    to{transform:translateY(0);opacity:1}
}
.register-box h2{
    text-align:center;
    margin-bottom:10px;
    color:#2c5364;
}
.register-box p{
    text-align:center;
    margin-bottom:25px;
    color:#777;
}
.input-group{
    margin-bottom:18px;
}
.input-group input{
    width:100%;
    padding:12px;
    border-radius:8px;
    border:1px solid #ccc;
    outline:none;
    font-size:15px;
}
.input-group input:focus{
    border-color:#2c5364;
}
.btn{
    width:100%;
    padding:12px;
    background:#2c5364;
    border:none;
    color:#fff;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}
.btn:hover{
    background:#203a43;
}
.extra{
    margin-top:15px;
    text-align:center;
}
.extra a{
    color:#2c5364;
    text-decoration:none;
    font-size:14px;
}
.brand{
    text-align:center;
    font-size:22px;
    font-weight:bold;
    color:#fff;
    position:absolute;
    top:40px;
}
</style>

</head>
<body>

<div class="brand">🚚 Transport Management System</div>

<div class="register-box">
    <h2>Create Account</h2>
    <p>Register to book your transport</p>

    <form action="process_register.php" method="POST">
        <div class="input-group">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="input-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn">Register</button>
    </form>

    <div class="extra">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>

</body>
</html>
