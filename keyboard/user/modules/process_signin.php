<?php session_start();
include 'connection.php';
if(isset($_POST['login']));
{
    $name_unsafe = $_POST['name'];
    $password_unsafe = $_POST['password'];

    $user_name = mysqli_real_escape_string($conn,$name_unsafe);
    $user_password = mysqli_real_escape_string($conn,$password_unsafe);

    $query = mysqli_query($conn,"SELECT * FROM customers WHERE name ='$user_name' and password='$user_password'")
    or die(mysqli_error($conn));

    $row =  mysqli_fetch_array($query);

        $name = $row['$name'];
        $counter = mysqli_num_rows($query);
        $id = $row['id'];

        if ($counter == 0)
        {
            echo "<script type='text/javascript'>
                alert('Invalid Username or Password!');
            document.location='signin.php'</script>";
        }
        else
        {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $user_name;

             echo "<script type='text/javascript'>
            document.location='index.php?id=<?php echo $id ?>'</script>";
        }
        }



?>