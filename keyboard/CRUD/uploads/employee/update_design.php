<?php 
    include("connection.php");

    $id = $_GET['id'];

    $query      = "SELECT * FROM `employee` where id =$id";
    $data       =  mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update</title>
</head>
<body>
<div class="container">
    <form action="#" method="POST">
            <div class="title">
                Update Employee Detail
            </div>
        
    <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname">
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname">
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password"value="<?php echo $result['password']; ?>" class="input" name="password">
            </div>

            <div class="input_field">
                <label>Comfirm Password</label>
                <input type="password"value="<?php echo $result['cpassword']; ?>" class="input" name="conpassword">
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender">
                    <option value="">Select</option>

                    <option value="Male"
                    <?php 
                            if($result['gender'] == 'Male')
                            {
                                echo "selected";
                            }
                    ?>    
                    >
                        
                    Male</option>
                    <option value="Female"
                    
                    <?php 
                            if($result['gender'] == 'Female')
                            {
                                echo "selected";
                            }
                        ?>    >
                        
                    Female</option>
                </select>
                </div>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="email" value="<?php echo $result['email']; ?>" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone">
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea"  name="address"><?php echo $result['address']; ?></textarea>
            </div>

            <div class="input_field term">
                <label class="check">
                    <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" values="Update Details" class="btn" name="update">
            </div>
    </div>
    </form>
</div>
</body>

<?php
    if(isset($_POST['update']))
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
                                VALUES('$fname', '$lname', '$pwd', '$ $cpwd', '$gender', '$email', '$phone', '$address')";

        $sql = "UPDATE `employee` set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',
                                       gender='$gender',email='$email',phone='$phone',address='$address',";                     
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