<?php 
session_start();
include("include/db.php");
 ?>
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
    <title>Cart Detailes</title>
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
  
  <img src="images/menu.png"  class="menu-icon" onclick="menutoggle()">
</div>

</div>
<?php 
                
                if(isset($_GET['email']) && isset($_GET['pro-id'])){
                 $username=$_GET['email'];
                 $pro_id=$_GET['pro-id'];
                 $connect_cart = "SELECT * FROM `cart` WHERE `pro-id`='$pro_id' AND `email`='$username'  ";
                 $run_cart = mysqli_query($con,$connect_cart);
                 while($row_cart = mysqli_fetch_array($run_cart)){
                    $id=$row_cart['id'] ;  
                    $username = $row_cart['email'];
                    $num = $row_cart['num'];
                    $size = $row_cart['size'];
                 $connect_product="select * from product where id='$pro_id'";
                 $run_product = mysqli_query($con,$connect_product);
     ?>            

<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Subtotal</th>
        </tr>
        <?php 
                       $total = 0;
                      
                      while($row_product = mysqli_fetch_array($run_product)){
                          $price=$row_product['price'];
                          $price_saled=$row_product['price-saled'];
                          $name=$row_product['name'];
                          $img=$row_product['image'];
                          if($row_product['price-saled']==0){
                            $sub_total = $row_product['price'] * $num;
                          }
                          else{
                            $sub_total = $row_product['price-saled'] * $num;
                          }
                     
                      $total += $sub_total;
                      $tax=35.00;
                    ?>
        <tr>
            <td><div class="cart-info">
                <img src="images/<?php echo $img ?>" >
                <div>
                    <p><?php echo $name; ?></p>
                    <small>
                    <?php
                    if($row_product['price-saled']==0){
                         echo $price; 
                    }
                    else{
                        echo $price_saled;
                    }
                    ?>
                    </small><br>
                    <form action=""  method="post">
                    <div>
                   
                     <button type="submit" name="update" style="width:100px;height:50px;background-color:red;color:white;border-radius:5px">
                    <input type="checkbox" name="remove[]" value="<?php echo  $pro_id;  ?>"  style="width:20px;"> DELETE
                    </button>

                    </div>
                    </form>
                </div>
            </div></td>
            <td><?php echo $num ?> </td>
            <td><?php echo $size ?> </td>
            <td><?php echo  $sub_total ?></td>
        </tr>
     
    </table>
   
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td><?php echo  $total ?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$ <?php echo $tax ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?php echo  $total+$tax ?></td>
            </tr>
        </table>
    </div>
</div>
<?php
        }
        }
    } 
        ?>

<?php   
            function  update_cart(){
                global $con;
                if(isset($_POST['update'])){

                foreach($_POST['remove'] as $remove_id){
                    $delete_product="delete from cart where id='$remove_id' ";
                    $run_delete = mysqli_query($con,$delete_product);
                    if($run_delete){

                        echo "<script>window.open('cart.php','_self')</script>";
                    }
                }
            }
        }
        echo @$up_cart = update_cart();

        ?>



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