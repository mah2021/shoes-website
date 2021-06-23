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
    <title>All Products</title>
</head>
<body>
  
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

<div class="small-container">
   
<div class="row row-2" >
    <h2>All Products</h2>
    
</div>



  <div class="row">
  <?php
        include("include/db.php");
        $get_products = "select * from product LIMIT 8,104 ";
        $run_products = mysqli_query($con,$get_products);
    
        while($row_products = mysqli_fetch_array($run_products)){
            $pro_id = $row_products['id'];
            $pro_title = $row_products['name'];
            $pro_price = $row_products['price'];
            $pro_price_saled=$row_products['price-saled'];
            $pro_detail=$row_products['detail'];
            $pro_img = $row_products['image'];
            if(isset($_GET['email'])){
                $email=$_GET['email'];
            echo  "
            <div class='col-4'><a href='product-detail.php?pro-id=$pro_id & email=$email'><img src='images/$pro_img'></a>";
            }
            else{
                echo  "
                <div class='col-4'><a href='product-detail.php?pro-id=$pro_id '><img src='images/$pro_img'></a>";
            }
            echo"
            <h4>$pro_title</h4>
            <div class='rating'>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star'></i>
            <i class='fa fa-star-o'></i>
            </div>";
             if($pro_price_saled==0){
              echo " <p>$ $pro_price</p>";
             }
             else{
                 echo"
                <del><p>$ $pro_price</p></del>";
                echo"<p style='color:red;'>$ $pro_price_saled</p>";
             }
            echo"
            </div>";
           
    }
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
</body>
</html>