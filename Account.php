<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Account</title>
</head>
<body>
  
    <div class="container">
<div class="navbar">
    <div class="logo"><a href="index.html"><img src="images/logo.png" width="125px"></a></div>
  <nav>
    <ul  id="MenuItem">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="Account.php">Account</a></li>
    </ul>

  </nav>
  <a href="cart.html"><img src="images/cart.png"  width="30px"  height="30px"></a>
  <img src="images/menu.png"  class="menu-icon" onclick="menutoggle()">
</div>

</div>


<!-------Acocount----->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>
            <div class="col-2">
               <div class="form-container">
                   <div class="form-btn">
                   <span onclick="Login()"> Login</span>
                   <span onclick="Register()">Register</span>
                   <hr id="indicater">
               </div>
               <form id="loginform" action="login.php" method="post">
                   <input type="text" placeholder="UserName" name="email">
                   <input type="password" placeholder="Password" name="password">
                <button type="submit" class="btn"  name="submit">Login</button>
            <a href="">Forget password</a>  
            </form>

            <form id="registerform"  action="" method="post"> 
                <input type="text" placeholder="FullName"  name="fullname">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password" id="pass" onkeypress="isInputNumber(event)">
             <button type="submit" class="btn" name="submit">Register</button>

         </form></div>
            </div>
        </div>
    </div>
</div>




<!--footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App For Android</p>
            <div class="app-logo">
                <img src="images/play-store.png">
                <img src="images/app-store.png">
            </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nulla maxime, explicabo perferendis aut quod laudantium nisi alias, in tenetur tempora odio hic iusto placeat inventore. </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affilies</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow US</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instgram</li>
                    <li>YOuTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copy">Copyright 2020 - Easy Tutorial</p>
    </div>
</div>



<script>
    var MenuItem=document.getElementById("MenuItem");
    MenuItem.style.maxHeight="0px";
   function menutoggle(){
       if(MenuItem.style.maxHeight=="0px"){
        MenuItem.style.maxHeight="200px";
   }
   else{
    MenuItem.style.maxHeight="0px";
   }
}
</script>

<script>
    var loginform=document.getElementById("loginform");
    var registerform=document.getElementById("registerform");
    var indicator=document.getElementById("indicater");

 function Register(){
    registerform.style.transform="translateX(0px)";
    loginform.style.transform="translateX(0px)";
    indicator.style.transform="translateX(100px)";
 }

 function Login(){
    registerform.style.transform="translateX(300px)";
    loginform.style.transform="translateX(300px)";
    indicator.style.transform="translateX(0px)";
 }







</script>
<script>
    function isInputNumber(evt){
    var ch = String.fromCharCode(evt.which);
    if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
    }
}
</script>
</body>
</html>



<?php
   include("include/db.php");
    if(isset($_POST['submit'])){
        $sender_name = $_POST['fullname'];
        $sender_email = $_POST['email'];
        $sender_password = $_POST['password'];
        
        $insert_message = "insert into users (fullname,email,password,date)
        values('$sender_name','$sender_email',' $sender_password',NOW())";
      
        $run_message = mysqli_query($con,$insert_message);
        if($run_message){
            echo "<script>alert('Registration completed successfully')</script>";
            echo "<script>window.open('Account.php','_self')</script>";
        }
       }
    
?>


