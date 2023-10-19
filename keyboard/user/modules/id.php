<style type="text/css">
</style>


<?php
$id = $_GET['id']; 
require 'connection.php';
$sql = "SELECT * FROM products where id = '$id'";
$result = mysqli_query($conn, $sql);
$each = mysqli_fetch_array($result);
?>
<div id="container">
            <h6>
                <?php echo $each['name'] ?>
            </h6>
            <img src="../images/<?php echo $each['picture'] ?>" height="50%" >
            <br>
            <p><?php echo $each['price'] ?>$</p>
            <p><?php echo $each['description'] ?></p>
        </div>


 