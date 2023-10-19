
<!-- header section star -->
<?php 
require 'header.php'; 
?>
<!-- header section end -->

<!-- Main -->

<?php

if(isset($_GET['erorr'])){
    echo $_GET['erorr'];
    unset($_SESSION['erorr']);
}
?>



<form method="post" action="process_signup.php">
    <div class="form-element">  
                <label>Username</label>
                <input type="text" name="name" placeholder="Enter your name" autocomplete="off"/>
                </div>  
        <br>
    <div class="form-element">
            <label>Gender</label>
            <td><input type="radio" name="gender" value="1"/>  Man</td>  
            <td><input type="radio" name="gender" value="0"/>  Women</td>  
            </div>
        <br>
    <div class="form-element">
            <label>Phone</label>
            <input type="tel" name="phone" placeholder="Enter your name" autocomplete="off"/>
            </div>
        <br>
    <div class="form-element">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter your address" autocomplete="off"/>
            </div>
        <br>
    <div class="form-element">
            <label>Birth</label>
            <input type="date" name="birth" autocomplete="off"/>
            </div>
        <br>
    <div class="form-element">
        <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" autocomplete="off"/>
            </div>
        <br>
    <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" autocomplete="off"/>
            </div>
        <br>
        <button type="submit" name="register" value="register">Register</button>
</form>
<!-- footer section star -->
<?php 
require 'footer.php'; 
?>
<!-- footer section end -->