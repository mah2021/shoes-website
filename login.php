<?php
include("include/db.php");
if(isset($_POST['submit'])){
    
    $register_username = $_POST['email'];
    $register_password = $_POST['password'];
    $select_customer ="select * from users where email='$register_username' AND password='$register_password'";
    $run_customer = mysqli_query($con,$select_customer);
    $check_customer = mysqli_num_rows($run_customer);
     if($check_customer>0){
        $_SESSION['email']=$register_username;
            echo "<script>window.open('index.php?email=".$_SESSION['email']."','_self')</script>";
    }
    else 
         {
            echo "<script> alert('Your email or password is wrong') </script>";
        echo "<script>window.open('Account.php','_self')</script>";
        exit();
        }
           
}

?>