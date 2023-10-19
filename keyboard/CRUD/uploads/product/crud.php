<?php
require("connection.php");

// UPLOAD IMAGE PRODUCTS
function image_upload($img){
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111, 99999) . $img['name'];

    $new_loc = UPLOAD_SRC . $new_name;


// UPLOAD FILES

if(!move_uploaded_file($tmp_loc,$new_loc))
{
        header("location: index.php?alert=img_upload");
        exit;
}
else{
        return $new_name;
}
}



// ADD PRODUCTS
if(isset($_POST['addproduct']))
{
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con,$value);
    }

    $imgpath = image_upload($_FILES['image']);

    $query = "INSERT INTO `products`(`name`, `price`, `description`, `image`) 
              VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$imgpath')";

    if (mysqli_query($con, $query)) {
        header("location: index.php?success=added");
    } else {
        header("location: index.php?alert=add_failed");
    }

}



// REMOVE IMAGE PRODUCTS
function image_remove($img){
    if(!unlink(UPLOAD_SRC.$img)){
        header("location: index.php?alert=img_rem_fail");
        exit;
    }
    else{
        header("location: index.php?alert=img_rem_fail");
    }


}



// DELETE PRODUCTS
if(isset($_GET['rem']) && $_GET['rem'] > 0)
{
    $query = "SELECT * FROM `products` WHERE `id`='$_GET[rem]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    // image_remove('$fetch['id']');

    $query ="DELETE FROM `products` WHERE `id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: index.php?success=removed");
    }
    else{
        header("location: index.php?alert=remove_failed");
    }
}



// <!-- EDIT PRODUCTS -->
if (isset($_POST['editpid'])) {
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }

    if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
    {
        $query = "SELECT * FROM `products` WHERE `id`='$_POST[editpid]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        image_remove($fetch['image']);
        
        $imgpath=image_upload($_FILES['image']);

        $update ="UPDATE `products` SET `name`='$_POST[name]',`price`='$_POST[price]',
                         `description`='$_POST[desc]',`image`='$imgpath' WHERE `id`='$_POST[editpid]'";
    }
    else{
        $update ="UPDATE `products` SET `name`='$_POST[name]',`price`='$_POST[price]',
        `description`='$_POST[desc]' WHERE `id`='$_POST[editpid]'";
    }
    
    if(mysqli_query($con,$update)){
        header("location: index.php?success=updated");
    }
    else{
        header("location: index.php?alert=update_failed");

    }

}