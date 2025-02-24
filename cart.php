<!-- connect file -->
<?php
include('includes/connection.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaanKaro: Cart Details</title>
    <!-- bootstrap css and js link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<style>
        .bg-pink {
            background-color: rgba(174,134,157,0.3); /* You can replace this with your desired pink color code */
        }
        .bg-pinkd{
            background-color: rgba(174,134,157,0.5);
        }
        .cart_img {
  width: 80px;
  height: 80px;
  object-fit: contain;
}
.text-white {
    color: white;
}

    </style>
</head>
<body>
 <!-- NAVBAR -->
 <!-- container-fluid takes hundred percent of width -->
 <div class="conatiner-fluid p-0">
<!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-pinkd">
  <div class="container-fluid">
    <img src="./images/logodesign.png" alt="Logoimage" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Donate Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Resgister</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item()?></sup></a>
        </li>
       
       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php 
cart();
?>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-pink">
<ul class="navbar-nav me-auto">
        <?php 
          if(!isset($_SESSION['username'])){
            echo " <li class='nav-item'>
            <a class='nav-link text-dark' href='#'>Welcome Guest</a>
          </li>";
          }
          else{
            echo " <li class='nav-item'>
            <a class='nav-link text-dark' href='#'>.  Welcome ".$_SESSION['username']."</a>
          </li>";
          }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='./users_area/user_login.php'>Login</a>
        </li>";
        }
        else{
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='./users_area/logout.php'>Logout</a>
        </li>";
        }
        ?>
</ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">List of products</h3>
    <p class="text-center">DaanKaro Hai Toh Mumkin Hai!.</p>
</div>

<!-- fourth child table -->
<div class="container">
    <div class="row">
      <form action="" method="post">
        <table class="table table-bordered text-center">
           
              <?php
            // To display the items present in the cart
          
            $get_ip_add = getIPAddress();
            $total_price=0;
            $select_query = "select * from `cart_details` where  ip_address = '$get_ip_add'";
            $result_query=mysqli_query($conn,$select_query);
            $result_count =mysqli_num_rows( $result_query);
            if($result_count>0){
              echo "  <thead>
              <tr>
                  <th>Product Title </th>
                  <th>Product Image</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Select</th>
                  <th colspan='2'>Operations</th>
              </tr>
          </thead>
          <tbody>";
            while($row=mysqli_fetch_array($result_query)){
              $product_id = $row['product_id'];
              $select_products = "select * from `products` where product_id= '$product_id'";  
              $result_products =  mysqli_query($conn,$select_products);
              while($row_product_price = mysqli_fetch_array($result_products)){
              $product_price=array($row_product_price['product_price']);  // [200,300]
              $price_table = $row_product_price['product_price'];
              $product_title = $row_product_price['product_title'];
              $product_image1 = $row_product_price['product_image1'];

              $product_values=array_sum($product_price); //[500]
              $total_price +=$product_values;  //500
            ?>
            
                <tr>
                    <td><?php echo "$product_title" ?></td>
                        <td><img src="./admin_area/product_images/<?php echo "$product_image1" ?>" alt="" class="cart_img"></td>
                        <td><input type="text" name="qty" class="form-input w-50"></td>
                        <?php
                        $get_ip_add = getIPAddress();
                        if(isset($_POST['update_cart'])){
                        $quantities = $_POST['qty'];
                        $update_cart = "update `cart_details` set quantity=$quantities where ip_address='$get_ip_add' and product_id=$product_id";
                        $result_products_quantity=mysqli_query($conn,$update_cart);
                        $total_price = $total_price *  $quantities;
                        }
                      ?>
                        <td><?php echo "&#8377; $price_table/-" ?></td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                        <td>
                            <!-- <button class="bg-info px-3 py-2 border-0">
                              Update
                            </button> -->
                            <input type="submit" value="Update Cart" class="bg-success px-3 py-2 border-0 text-white" name="update_cart">
                            <input type="submit" value="Remove Cart" class="bg-danger px-3 py-2 border-0 text-white" name="remove_cart">
                </tr>
                
                <?php }}}
                else{
                  echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
                }
                
                ?>
    </tbody>
        </table>
<!-- subtotal -->
<div class="d-flex mb-5">
  <?php 
  $get_ip_add = getIPAddress();
  $select_query = "select * from `cart_details` where  ip_address = '$get_ip_add'";
  $result_query=mysqli_query($conn,$select_query);
  $result_count =mysqli_num_rows( $result_query);
  if($result_count>0){
    echo "<h4  class='px-3'>Subtotal:<strong class='text-info'>&#8377;$total_price/-</strong></h4>
    <input type='submit' value='Continue Donation' class='bg-pinkd px-3 py-2 border-0 mx-3 text-dark' name='continue_donation'>
   <button class='bg-pinkd p-3 py-2 border-0'><a href='./users_area/checkout.php' class='text-dark text-decoration-none'>Checkout</a></button>";
  }
  else{
    echo "<input type='submit' value='Continue Donation' class='bg-info px-3 py-2 border-0 mx-3' name='continue_donation'>";
}
if(isset($_POST['continue_donation'])){
  echo "<script>window.open('index.php','_self')</script>";
}
  
  ?>

    </div>
</div>
</div>
</form>
<!-- function to remove item from the cart -->
<?php 

function remove_cart_item(){
  global $conn;
  if(isset($_POST['remove_cart'])){
foreach($_POST['removeitem'] as $remove_id){
  echo $remove_id;
  $delete_query = "delete from `cart_details` where product_id=$remove_id";
  $run_delete = mysqli_query($conn,$delete_query);
  if($run_delete){
echo "<script>window.open('cart.php','_self')</script>";
  } 
}
}
}
echo $remove_item = remove_cart_item(); 
?>
<!-- last child --> 
<?php include("./includes/footer.php") ?>
 </div>
</body>
</html>