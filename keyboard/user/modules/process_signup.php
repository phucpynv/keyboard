<?php
require 'connection.php';
?>


<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];




$sql = "SELECT COUNT(*) FROM CUSTOMERS WHERE EMAIL ='$email'";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result)['COUNT(*)'];
$number_rows = 1;
if($number_rows == 1){
    session_start();
    header('location:signup.php?error=Your email used');
    exit;
}

$sql="insert into customers (name,	gender,	birth,	phone,	
address, email,	password) values ('$name','$gender','$birth','$phone',
'$address','$email','$password')";
$result = mysqli_query($conn, $sql);

$sql="SELECT id FROM customers WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$id =mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
mysqli_close($conn);
header("Location:index.php");

?>