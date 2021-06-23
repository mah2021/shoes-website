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
    <title>Products Detailes</title>
</head>
<body>
<?php
        session_start();
        include("include/db.php");
        if(isset($_GET['pro-id'])){
            $id=$_GET['pro-id'];
        $get_products = "select * from product where id=$id ";
        $run_products = mysqli_query($con,$get_products);
    
        while($row_products = mysqli_fetch_array($run_products)){
            $pro_id = $row_products['id'];
            $pro_title = $row_products['name'];
            $pro_price = $row_products['price'];
            $pro_price_saled=$row_products['price-saled'];
            $pro_detail=$row_products['detail'];
            $pro_img = $row_products['image'];
            
           
    }
}
 ?>       
    <div class="container">
<div class="navbar">
    <div class="logo"><a href="index.html"><img src="images/logo.png" width="125px"></a></div>
  <nav>
    <ul  id="MenuItem">
    <?php
        if(isset($_GET['email'])){
            $email=$_GET['email'];
            echo"
            <li><a href='logout.php' style='color:red;'>$email</a></li>
            <li><a href='index.php?email=$email'>Home</a></li>
            <li><a href='product.php?email=$email'>Products</a></li>
            <li><a href='contact.php?email=$email'>Contact</a></li>
            <li><a href='Account.php'>Account</a></li>";
        }
        else{
            echo" <li><a href='index.php'>Home</a></li>
            <li><a href='product.php'>Products</a></li>
           
            <li><a href='contact.php'>Contact</a></li>
            <li><a href='Account.php'>Account</a></li>";
        }
        ?>
         </ul>

  </nav>
  <a href="cart.html"><img src="images/cart.png"  width="30px"  height="30px"></a>
  <img src="images/menu.png"  class="menu-icon" onclick="menutoggle()">
</div>

</div>

<!-----single product------->

<div class="small-container  single-product">
    <div class="row">
        <div class="col-2">
        
        <form  action="product-detail.php?pro-id=<?php echo $pro_id; ?>&email=<?php echo $email ?>" method="post">
             <?php 
            
            if(isset($_GET['pro-id'])){
                echo"
            <img src='images/$pro_img' width='100%'>
        
        
        
        </div>
        <div class='col-2'>
           
        <h2>$pro_title </h2>";
        if($pro_price_saled==0){
            echo " <h4>$ $pro_price</h4>";
           }
           else{
               echo"
              <del><h4>$ $pro_price</h4></del>";
              echo"<h4 style='color:red;'>$ $pro_price_saled</h4>";
           }
    
       echo"
       <lable>Quantity : </lable> <input type='number' value='1' name='num'>
       <lable>Size : </lable> <input type='number' value='36' name='size'>
      

    <input type='submit' name='submit'  class='btn'  value='Add To Cart' style='width:200px'>



<h3>Product Details<i class='fa fa-indent'></i></h3>
<br>
<p>$pro_detail</p>";
  }
        ?>  
        </form>
            </div>
    </div>
</div>

<div class="small-container">
    <div class="row row-2">
  <h2>Related Products</h2>
  <a href="product.php"><p>View more</p></a>
    </div>
</div>



<div class="small-container">

  
  <div class="row">
 <?php 
 include("function/func.php");
 getmore();
 ?>
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
    var productimg = document.getElementById("productimg");
     var smallimg=document.getElementsByClassName("small-img");
smallimg[0].onclick=function(){
    productimg.src=smallimg[0].src;
}
smallimg[1].onclick=function(){
    productimg.src=smallimg[1].src;
}
smallimg[2].onclick=function(){
    productimg.src=smallimg[2].src;
}
smallimg[3].onclick=function(){
    productimg.src=smallimg[3].src;
}
</script>
</body>
</html>


<?php
           
           if(isset($_GET['email']) && isset($_GET['pro-id'])){
               if(isset($_POST['submit'])){
                   global $con;
                   $email=$_GET['email'];
                   $id=$_GET['pro-id'];
                   $num=$_POST['num'];
                   $size=$_POST['size'];
                   $insert_shoes="insert into cart (pro-id,email,num,size,date)
                       values('$id','$email','$num','$size',NOW())";
                     
                       $run_message = mysqli_query($con,$insert_shoes);
                       if($run_message){
                           echo "<script>window.open('cart.php?email=".$_GET['email']."& pro-id=".$_GET['pro-id']."','_self')</script>";
                       }
                       else{
                           echo"<script>alert('Not Successful')</script>";
                           echo "<script>window.open('cart.php?email=".$_GET['email']."& pro-id=".$_GET['pro-id']."','_self')</script>";
                       }
               }
           }
           else{
            echo "<script>window.open('Account.php','_self')</script>";
           }
           
           
          
         ?>
