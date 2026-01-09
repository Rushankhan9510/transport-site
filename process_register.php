<?php
include "config/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO users (name,email,password) 
          VALUES ('$name','$email','$password')";

if(mysqli_query($conn,$query)){
    header("Location: login.php");
}
?>
