<?php 
    include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>
        
    <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required placeholder="Enter First Your Name">
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required placeholder="Enter Last Your Name">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" required placeholder="Enter Your Password">
            </div>

            <div class="input_field">
                <label>Comfirm Password</label>
                <input type="password" class="input" name="conpassword" required placeholder="Enter ComFirm Your Password">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required placeholder="Enter Your Email Address">
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required placeholder="Enter Your Phone Number">
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required placeholder="Enter Your Address"></textarea>
            </div>

            <div class="input_field term">
                <label class="check">
                    <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" values="Register" class="btn" name="register">
            </div>
    </div>
    </form>
</div>
</body>

<?php
    if(isset($_POST['register']))
    {
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $pwd     = $_POST['password'];
        $cpwd    = $_POST['conpassword'];        
        $gender  = $_POST['gender'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];

        

        $sql = "INSERT INTO `employee`(`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`)
                                VALUES('$fname', '$lname', '$pwd', '$cpwd', '$gender', '$email', '$phone', '$address')";
        $mysqli = mysqli_query($con,$sql);

        if($sql)
            {
            echo "Data Inserted into Database";
            }
        else{
            echo "Data Failed into Database";

            }
        }

?>

























</html>