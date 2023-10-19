<?php

    require("connection.php");

?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" href="data:,">

    <title>CRUD Product</title>
</head>


<body class="bg-light">
        <!-- Header -->
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-item-center justify-content-between">
            <h2>
                <a href="index.php" class="text-white text-decoration-none">
                <i class="bi bi-bar-chart-fill"></i> Mechanical Keyboard</a>
            </h2>
        
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
        <i class="bi bi-plus-lg"> Add Product </i>
        </button>
        </div>
    </div>



    <div class="container mt-5 p-0">
        <table class="table table-hover text-center">




        <!-- Table CRUD -->
            <thead class="bg-dark text-white">
                <tr>
                    <th width="5%"scope="col" class="rounded-start">ID</th>
                    <th width="20%"scope="col">Image</th>
                    <th width="15%"scope="col">Name</th>
                    <th width="10%"scope="col">Price</th>
                    <th width="30%"scope="col">Description</th>
                    <th width="10%"cope="col" class="rounded-end">Action</th>
                </tr>
            </thead>



        <!--PHP Print Products  -->

            <tbody class="bg-white">
                    <?php
                    $query = "SELECT * FROM `products`";
                    $result = mysqli_query($con, $query);
                    $i = 1;
                    $fetch_src=FETCH_SRC;

                    while($fetch=mysqli_fetch_assoc($result))
                    {
                        echo <<<product
                        <tr class="align-middle">
                        <th scope="row">$i</th>
                        <td><img src="$fetch_src$fetch[image]" width="150px"></td>
                        <td>$fetch[name]</td>
                        <td>$fetch[price]</td>
                        <td>$fetch[description]</td>
                        <td>
                            <a href="?edit=$fetch[id]" class="btn btn-warning me-2" data-bs-target="#editproduct"><i class="bi bi-pencil-square"></i></a>
                            <button onclick="confirm_rem($fetch[id])" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                        </tr>
                    product;
                    $i++;
                    }
                          
                    ?>
            </tbody>
        </table>
    </div>

        <!-- Modal Add Products -->
    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" placeholder="Username"  name="name"required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price"required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" name="desc" min="1" placeholder="Description" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .png, .svg" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="addproduct">Add Product</button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
  

        <!-- Modal Edit Products -->
    <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" placeholder="Username"  name="name" id="editname"required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price"id="editprice"required>
                        </div>
                        <div class="input-group mb-3">
                        <span class="input-group-text">Description</span>
                        <textarea class="form-control" name="desc" id="editdesc" min="1" placeholder="Description" required></textarea>
                        </div>
                        <img src="" id="editimg" width="100%" class="mb-3"><br>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .png, .svg">
                            </div>
                            <input type="hidden" name="editpid" id="editpid">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="editproduct">Edit Product</button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
  

        <!--PHP Edit Products  -->
        <?php 
    
            if(isset($_GET['edit']) && $_GET['edit'] > 0)
            {
            $query="SELECT * FROM `products` WHERE `id`='$_GET[edit]'";
            $result=mysqli_query($con, $query);
            $fetch=mysqli_fetch_assoc($result);
            echo"
                <script>
                    var editproduct = new bootstrap.Modal(document.getElementById('editproduct'), {
                        keyboard: false
                    })
                    document.querySelector('#editname').value=`$fetch[name]`;
                    document.querySelector('#editprice').value=`$fetch[price]`;
                    document.querySelector('#editdesc').value=`$fetch[description]`;
                    document.querySelector('#editimg').src=`$fetch_src$fetch[image]`;
                    document.querySelector('#editpid').value=`$_GET[id]`;
                    editproduct.show();
                </script>
            ";
        }
        ?>


    
        <!-- JS Delete Products -->
<script>
    
    function confirm_rem(id){
        if(confirm("Are you sure, you want to delete this item?")){
            window.location.href="crud.php?rem="+id;
        }
    }
</script>
    

</body>
</html>