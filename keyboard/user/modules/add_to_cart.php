<?php 
session_start();
// unset($_SESSION['cart']);
$id = $_GET['id'];

if(empty($_SESSION['cart'][$id])){
   require 'connection.php';
   $sql = "SELECT * FROM products where id ='$id'";
   $result = mysqli_query($conn, $sql);
   $each = mysqli_fetch_array($result);  
   $_SESSION['cart'][$id]['picture'] = $each['picture'];
   $_SESSION['cart'][$id]['name'] = $each['name'];  
   $_SESSION['cart'][$id]['price'] = $each['price'];
   $_SESSION['cart'][$id]['quantity'] = 1;
} else {
    $_SESSION['cart'][$id]['quantity']++;
    } 
echo json_encode($_SESSION['cart']);

header('location:products.php');

