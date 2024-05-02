<?php 
include('../includes/connection.php');
include('../functions/common_function.php');
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    // echo  "$user_id";
}
// getting total items and price
$get_ip_address=getIPAddress();
$total_price=0;
$cart_query_price="select * from `cart_details` where ip_address='$get_ip_address'";
$result_cart_price = mysqli_query($conn,$cart_query_price);
$invoice_number=mt_rand();
$status ='pending';
$count_products = mysqli_num_rows($result_cart_price);
while($row_price = mysqli_fetch_array($result_cart_price)){
    $product_id = $row_price['product_id'];
$select_product="select * from `products` where product_id=$product_id";
$run_price = mysqli_query($conn,$select_product);
while($row_product_price = mysqli_fetch_array($run_price )){
    $product_price = array($row_product_price['product_price']);
    $product_values = array_sum($product_price);
    $total_price+=$product_values;
}
}
//getting quantity from cart
$get_cart = "select * from `cart_details`";
$run_cart=mysqli_query($conn,$get_cart);
$get_item_qunatity=mysqli_fetch_array($run_cart);
$quantity=$get_item_qunatity['quantity'];
if($quantity==0){
    $quantity=1;
    $subtotal=$total_price;
}
else{
    $quantity=$quantity;
    $subtotal=$total_price* $quantity;
}

$insert_doantions = "Insert into `user_donations` (user_id,amount_due,invoice_number,total_products,donation_date,donation_status) values($user_id,$subtotal,$invoice_number,$count_products,NOW(),'$status')";
$result_query = mysqli_query($conn,$insert_doantions);
if($result_query){
    echo "<script>alert('Donation Proceeded')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}
// donations pending
$insert_pending_doantions = "Insert into `donations_pending` (user_id,invoice_number,product_id,quantity,donation_status) values($user_id,$invoice_number,$product_id, $quantity,'$status')";
$result_pending_donations = mysqli_query($conn,$insert_pending_doantions);

//delete items from cart
$empty_cart = "delete from `cart_details` where ip_address='$get_ip_address'";
$result_delete = mysqli_query($conn,$empty_cart);

?>