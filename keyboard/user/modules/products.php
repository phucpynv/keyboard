<!-- Header -->
<?php 
include 'header.php';
?>

<style type="text/css">
    .list-product{
        width: 33%;
        border: 1px solid black;
        height: 370px;
        float: left;
    }

</style>
<?php 
require 'connection.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>
<div id="container">
    <?php foreach ($result as $each): ?>
        <div class="list-product">
            <h3>
                <?php echo $each['name'] ?>
            </h3>
            <img src="../images/<?php echo $each['picture'] ?>" width=33%" >
            <p><?php echo $each['price'] ?>$</p>
            <a href="product.php?id=<?php echo $each['id'] ?> ">
            <i class="fas fa-info-circle"></i><i> Detail Product</i>
            </a>
            <br>
            <a href="add_to_cart.php?id=<?php echo $each['id'] ?> ">
            <i class="fas fa-cart-plus"></i><i> Add To Cart</i>
            </a>
        </div>


    <?php endforeach ?>

</div>


<!-- Footer -->
<?php 
include 'footer.php';
?>