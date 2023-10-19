<?php

$con = mysqli_connect("localhost", "root", "", "mechanical_keyboard");

if(mysqli_connect_errno()){
    die("Cant Connect to DataBase".mysqli_connect_errno());
}
define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/keyboard/crud/uploads/image/");

define("FETCH_SRC", "http://127.0.0.1/keyboard/crud/uploads/image/");
