<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions</title>
  <style> 
   body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .message-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 50px;
     
    }

    .message {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>
  
</body>
</html> -->



<?php 
// include('./includes/connection.php');

// getting products
function getproducts(){
// condition to check isset or not 
    if(!isset($_GET['category'])){
      if(!isset($_GET['event'])){
  global $conn;
    $select_query = "select * from `products` order by rand() limit 0,9";
    $result_query = mysqli_query($conn, $select_query);
    while($row= mysqli_fetch_assoc($result_query)){
      	$product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id= $row['category_id'];
        $event_id= $row['event_id'];
        echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price: &#8377;$product_price/-</p>
          <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
        </div>
      </div>
      </div>";
    }
}
}
}

//get all products
function get_all_products(){
// condition to check isset or not 
if(!isset($_GET['category'])){
  if(!isset($_GET['event'])){
global $conn;
$select_query = "select * from `products` order by rand()";
$result_query = mysqli_query($conn, $select_query);
while($row= mysqli_fetch_assoc($result_query)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id= $row['category_id'];
    $event_id= $row['event_id'];
    echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>Price: &#8377;$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
    </div>
  </div>
  </div>";
}
}
}
}

//getting unique category
function get_unique_categories(){
  // condition to check isset or not 
  if(isset($_GET['category'])){
    $category_id = $_GET['category'];
global $conn;
  $select_query = "select * from `products` where category_id = $category_id";
  $result_query = mysqli_query($conn, $select_query);
  $num_of_rows = mysqli_num_rows( $result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No Product Available</h2>";
  }
  while($row= mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_keywords = $row['product_keywords'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id= $row['category_id'];
      $event_id= $row['event_id'];
      echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <p class='card-text'>Price: &#8377;$product_price/-</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
      </div>
    </div>
    </div>";
  }
}
}

//getting unique category
function get_unique_events(){
  // condition to check isset or not 
  if(isset($_GET['event'])){
    $event_id = $_GET['event'];
global $conn;
  $select_query = "select * from `products` where event_id = $event_id";
  $result_query = mysqli_query($conn, $select_query);
  $num_of_rows = mysqli_num_rows( $result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No Product Available for the event</h2>";
  }
  while($row= mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_keywords = $row['product_keywords'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id= $row['category_id'];
      $event_id= $row['event_id'];
      echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <p class='card-text'>Price: &#8377;$product_price/-</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
      </div>
    </div>
    </div>";
  }
}
}

// displaying events in side nav
function getevents(){
    global $conn;
    $select_events = 'select * from `events`';
$result_events = mysqli_query($conn,$select_events);
while($row_data = mysqli_fetch_assoc($result_events)){
  $event_title = $row_data['event_title'];
  $event_id = $row_data['event_id'];
  echo "  <li class='nav-item'>
  <a href='index.php?event=$event_id' class='nav-link text-dark'>$event_title</a>
</li>";
}
}

// displaying categories in side nav
function getcategories(){
    global $conn;
    $select_categories = 'select * from `categories`';
$result_categories = mysqli_query($conn, $select_categories);
while($row_data = mysqli_fetch_assoc($result_categories)){
  $category_title = $row_data['category_title'];
  $category_id = $row_data['category_id'];
  echo "  <li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-dark'>$category_title</a>
</li>";
}
}

//Search product with the help of keyword
function search_product(){
 global $conn;
if(isset($_GET['search_data_product'])){
  $search_data_value = $_GET['search_data'];
  $search_query = "select * from `products` where product_keywords like '%$search_data_value%'";
  $result_query = mysqli_query($conn, $search_query);
  $num_of_rows = mysqli_num_rows( $result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No Results Matched</h2>";
  }
  while($row= mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_keywords = $row['product_keywords'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id= $row['category_id'];
      $event_id= $row['event_id'];
      echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
      <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <p class='card-text'>Price: &#8377;$product_price/-</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
      </div>
    </div>
    </div>";
  }
}
}

// view details function
function view_details(){
  global $conn;
// condition to check isset or not 
if(isset($_GET['product_id'])){
if(!isset($_GET['category'])){
  if(!isset($_GET['event'])){
$product_id = $_GET['product_id'];
$select_query = "select * from `products` where product_id=$product_id";
$result_query = mysqli_query($conn, $select_query);
while($row= mysqli_fetch_assoc($result_query)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    $category_id= $row['category_id'];
    $event_id= $row['event_id'];
    echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
    <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='card1'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>Price: &#8377;$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to Cart</a>
      <a href='index.php' class='btn btn-secondary'>Home</a>
    </div>
  </div>
  </div>
  <div class='col-md-8'>
  <!-- related images -->
  <div class='row'>
      <div class='col-md-12'>
          <h4 class='text-center mb-5' style='color:rgb(174,134,157)'>Related Images</h4>
      </div>
      <div class='col-md-6'>
      <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='card1'>
      </div>
      <div class='col-md-6'>
      <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='card1'>  
      </div>
  </div>
      </div>";
}
}
}
}
}

// get ip function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip; 

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
  $get_ip_add = getIPAddress();
  $get_product_id = $_GET['add_to_cart'] ;
  $select_query="select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id";
  $result_query = mysqli_query($conn, $select_query);
  $num_of_rows = mysqli_num_rows( $result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
  else{
    $insert_query = "insert into `cart_details` (product_id ,ip_address,quantity) values('$get_product_id','$get_ip_add',0)";
    $result_query = mysqli_query($conn, $insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
}
}
// function to get cart numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip_add = getIPAddress();
    $get_product_id = $_GET['add_to_cart'] ;
    $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query);
    $count_cart_items = mysqli_num_rows( $result_query);
    }
    else{
      global $conn;
    $get_ip_add = getIPAddress();
    $select_query="select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query = mysqli_query($conn, $select_query);
    $count_cart_items = mysqli_num_rows( $result_query);
    }
    echo $count_cart_items;
  }

  function total_cart_price(){
    global $conn;
    $get_ip_add = getIPAddress();
    $total_price=0;
    $select_query = "select * from `cart_details` where  ip_address = '$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_array($result_query)){
      $product_id = $row['product_id'];
      $select_products = "select * from `products` where product_id= '$product_id'";  
      $result_products =  mysqli_query($conn,$select_products);
      while($row_product_price = mysqli_fetch_array($result_products)){
      $product_price=array($row_product_price['product_price']);  // [200,300]
      $product_values=array_sum($product_price); //[500]
      $total_price +=$product_values;  //500
    }
  }
  echo "&#8377;$total_price/-";
}
// get user donation details
function get_user_donation_details(){
  global $conn;
$username=$_SESSION['username'];
$get_details="Select * from `user_table` where username='$username'";
$result_query=mysqli_query($conn,$get_details);
while($row_query=mysqli_fetch_array($result_query)){
  $user_id = $row_query['user_id'];
  if(!isset($_GET['edit_account'])){
    if(!isset($_GET['my_donations'])){
      if(!isset($_GET['delete_account'])){
        $get_donations = "select * from `user_donations` where user_id= $user_id and donation_status='pending'";
        $result_donations_query=mysqli_query($conn,$get_donations);
        $row_count=mysqli_num_rows($result_donations_query);
        if($row_count>0){
        echo"<div class='message-container'>
    <p class='message'>You have <span class='text-danger'>$row_count</span> pending donations</p>
    <a href='profile.php?my_donations'><button class='button'>Donation Details</button></a>
</div> ";
          // echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span>pending donations</h3>'";
        }
        else{
          echo"<div class='message-container'>
          <p class='message'>You have <span class='text-success'>zero</span> pending donations</p>
          <a href='../index.php'><button class='button'>Explore Products</button></a>
      </div> ";
        }
      } 
    }
  }
}

}
?>
