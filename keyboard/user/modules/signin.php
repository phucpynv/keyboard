<?php
include 'header.php';
?>


<body>  
<center> 
<h1>LOGIN TO KEYBOARD STORE</h1>
    <form action="process_signin.php" method="POST">
        <input type="text" name="name" id="user" placeholder="Enter your name">
        <br>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br>       
        <br>       
        <button type="submid" id="btn" name="login" default>LOGIN</button>
        <br>
        <br>
        <p>OR</p>
        <a href="signup.php"></a>  
        <button><a href="signup.php">Register</a></button>
        <br>
        <br>
        <div class="">
            <a href="#" class="btn btn-block py-2 btn-facebook">
                <span class="icoacebook mr-3"></span> Login with facebook
            </a>
            <br>
            <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span> Login with Google</a>
            </div>
    </form>
</center>
</body>
<?php
include 'footer.php';
?>
