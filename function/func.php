<?php
$con=mysqli_connect("localhost","root","","shoesdb");

function getmore(){
global $con;
$get_product = "select * from product LIMIT 4 ";
$run_product = mysqli_query($con,$get_product);

while($row_product = mysqli_fetch_array($run_product)){
    $pro_id = $row_product['id'];
    $pro_title = $row_product['name'];
    $pro_price = $row_product['price'];
    $pro_price_saled=$row_product['price-saled'];
    $pro_detail=$row_product['detail'];
    $pro_img = $row_product['image'];
    
    echo"     
    <div class='col-4'><img src='images/$pro_img'>
    <h4>$pro_title</h4>
    <div class='rating'>
    <i class='fa fa-star'></i>
    <i class='fa fa-star'></i>
    <i class='fa fa-star'></i>
    <i class='fa fa-star'></i>
    <i class='fa fa-star-o'></i>
    </div>";
    if($pro_price_saled==0){
        echo " <h4>$ $pro_price</h4>";
    }
    else{
        echo"
        <del><h4>$ $pro_price</h4></del>";
        echo"<h4 style='color:red;'>$ $pro_price_saled</h4>";
    }
echo"
    </div>";
     
}
}  






  
?>   