<?php
session_start();
include("config/db.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);

    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    if($row['role'] === 'admin'){
        header("Location: admin/dashboard.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}else{
    echo "<script>alert('Invalid Login'); window.location='login.php';</script>";
}
?>
