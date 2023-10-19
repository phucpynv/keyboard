
<?php   
require 'header.php';
?>
<style>
    header{
        top: 0;
    }
    .cart-content-wrapper > .form{
        border: solid;
        width: 100%;
        height: 70%;
    }
    h1{
        color: gray;
        text-align: center;
    }
    h2{
        color: #99CCFF;
        text-align: right;
    } 
</style>

   
<?php
session_start();
$cart = $_SESSION['cart'];
$_id =$_SESSION['id'];
$sum =0;
?> 

<div class="cart-content-wrapper">
    <br>
    <br>
    <h1>Shopping Cart</h1>
    <form action="index.php?page=cart" method="post">
        <table border="1" width="100%"> 
                <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                    <td>Delete</td>
                </tr>
                <?php foreach ($cart as $id => $each): ?>
                    <tr>    
                        <td>
                        <img height="100" src="../images/<?php echo $each['picture'] ?>">
                        </td>
                        <td><?php echo $each['name'] ?></td>
                        <td><?php echo $each['price'] ?>$</td>
                        <td>
                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=minus"><i class="fas fa-minus"></i></a>
                        <?php echo $each['quantity'] ?>
                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=plus"><i class="fas fa-plus"></i></a>
                        </td>
                        <td>
                            <?php 
                            $result = $each['price'] * $each['quantity'];
                            echo $result;
                            echo '$';
                            $sum += $result; 
                            ?>
                        </td>
                        <td>
                        <a href="delete_form_cart.php?id=<?php echo $id ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
        </table>    
        <br>
        <br>
            <h2>
                TOTAL BILL:
            <?php echo $sum ?>$
            </h2>
    </form>
    <div class="buttons" style="float: right;" style="position: relative;">
        <button><a href="cart.php">Update</a></button>
        <button><a href="order.php">Order</a></button>
    </div>
</div>
</div>

<?php 
require 'footer.php';
?>